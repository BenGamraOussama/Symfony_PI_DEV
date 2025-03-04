<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\Exercice;
use App\Form\ActiviteType;
use App\Repository\ActiviteRepository;
use App\Service\TwilioService;
use App\Service\NotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/activite')]
final class ActiviteController extends AbstractController
{
    private TwilioService $twilioService;
    public function __construct(TwilioService $twilioService)
    {
        $this->twilioService = $twilioService;
    }

    #[Route('/', name: 'app_activite_index', methods: ['GET'])]
    public function index(Request $request, ActiviteRepository $activiteRepository): Response
    {
        $user = $this->getUser();
    $typeFilter = $request->query->get('type');

    $activites = $activiteRepository->findByFilters($typeFilter);

    // Calculate statistics
    $completedCount = 0;
    $exerciseCount = 0;
    $mentalCount = 0;
    $relaxationCount = 0;
    $socialCount = 0;

    foreach ($activites as $activite) {
        // Status counts
        if ($activite->getStatus() === 'Complété') {
            $completedCount++;
        }

        // Type counts
        switch ($activite->getType()) {
            case 'exercise':
                $exerciseCount++;
                break;
            case 'mentale':
                $mentalCount++;
                break;
            case 'relaxation':
                $relaxationCount++;
                break;
            case 'sociale':
                $socialCount++;
                break;
        }
    }

    return $this->render('activite/index.html.twig', [
        'activites' => $activites,
        'typeFilter' => $typeFilter,
        'user' => $user,
        'completedCount' => $completedCount,
        'exerciseCount' => $exerciseCount,
        'mentalCount' => $mentalCount,
        'relaxationCount' => $relaxationCount,
        'socialCount' => $socialCount
    ]);
    }
    
    #[Route('/update-status', name: 'app_activite_update_status', methods: ['POST'])]
    public function updateStatus(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        $activites = $em->getRepository(Activite::class)->find($request->request->get('activity_id'));

        if ($activites) {
            $activites->setStatus($request->request->get('status'));
            $em->flush();
        }

        return new Response(null, 204);
    }

    #[Route('/new', name: 'app_activite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            if ($activite->getType() === 'exercise') {
                $exerciceData = $form->get('exercice')->getData();
                
                if ($exerciceData && $exerciceData->getQuestion()) {
                    $existingExercice = $entityManager->getRepository(Exercice::class)->findOneBy([
                        'question' => $exerciceData->getQuestion()
                    ]);
                    
                    if ($existingExercice) {
                        $activite->setExercice($existingExercice);
                    } else {
                        $exercice = new Exercice();
                        $exercice->setQuestion($exerciceData->getQuestion());
                        $exercice->setActivite($activite);
                        $entityManager->persist($exercice);
                        $activite->setExercice($exercice);
                    }
                }
            }
    
            $entityManager->persist($activite);
            $entityManager->flush();
    
            if (!$activite->getPatients()->isEmpty()) {
                foreach ($activite->getPatients() as $patient) {
                    $user = $patient->getUser();
                    $phoneNumber = $patient->getPhone();
    
                    if ($user && $user->getEmail()) {
                        $this->sendActivityNotification($mailer, $user);
                    }
                    if ($phoneNumber) {
                        $this->twilioService->sendSms(
                            $phoneNumber,
                            "Hello " . ($user ? $user->getFirstName() : "Patient") . ", Une nouvelle activité vous a été assignée."
                        );
                    }
                }
        }
    
            return $this->redirectToRoute('app_activite_index');
        }
    
        return $this->render('activite/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    

    #[Route('/{id}/edit', name: 'app_activite_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
{
    $user = $this->getUser();
    $form = $this->createForm(ActiviteType::class, $activite);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        try {
            // Get the existing Exercice if any
            $originalExercise = $activite->getExercice();

            // Only update the Exercice if the activity type is 'exercise'
            if ($activite->getType() === 'exercise') {
                $exerciseData = $form->get('exercice')->getData();
                
                if (!$exerciseData || empty($exerciseData->getQuestion())) {
                    throw new \Exception('Exercise question is required.');
                }

                // Update the Exercice or create a new one if it doesn't exist
                $exercise = $activite->getExercice() ?? new Exercice();
                $exercise->setQuestion($exerciseData->getQuestion());
                $exercise->setActivite($activite); // Link to the current Activite

                // Persist the new Exercice if it's a new one
                if (!$activite->getExercice()) {
                    $entityManager->persist($exercise);
                }

                // Explicitly set the Exercice to track changes
                $activite->setExercice($exercise); 
            } else {
                // If it's not an exercise, remove the Exercice
                if ($originalExercise) {
                    $entityManager->remove($originalExercise);
                    $activite->setExercice(null); // Unlink the exercise from the activity
                }
            }

            // After making sure the Exercice is handled, save the changes to the Activite
            $entityManager->flush();
            $this->addFlash('success', 'Activity updated successfully!');
            return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
        } catch (\Exception $e) {
            $this->addFlash('error', $e->getMessage());
        }
    }

    return $this->render('activite/edit.html.twig', [
        'activite' => $activite,
        'form' => $form,
        'user' => $user
    ]);
}


    #[Route('/{id}', name: 'app_activite_delete', methods: ['POST'])]
    public function delete(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if ($this->isCsrfTokenValid('delete'.$activite->getId(), $request->request->get('_token'))) {
            try {
                // Remove associated exercise if exists
                if ($exercise = $activite->getExercice()) {
                    $entityManager->remove($exercise);
                }
                
                $entityManager->remove($activite);
                $entityManager->flush();
                $this->addFlash('success', 'Activity deleted successfully!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Error deleting activity: '.$e->getMessage());
            }
        }

        return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_activite_show', methods: ['GET'])]
    public function show(Activite $activite): Response
    {
        $user = $this->getUser();
        // Check if it's an exercise type activity
        if ($activite->getType() === 'exercise' && $activite->getExercice()) {
            return $this->redirectToRoute('app_exercice_show', [
                'id' => $activite->getExercice()->getId()
            ]);
        }

        return $this->render('activite/show.html.twig', [
            'activite' => $activite,
            'user' => $user
        ]);
    }

    private function sendActivityNotification(MailerInterface $mailer, User $user)
    {
        if (!$user->getEmail()) {
            return;
        }

        $email = (new Email())
            ->from('oussemadenguir999@gmail.com')
            ->to($user->getEmail())
            ->subject('Nouvelle activité assignée')
            ->text("Hello " . $user->getFirstName() . ",\n\nA Une nouvelle activité vous a été assignée.");

        $mailer->send($email);
    }
}
