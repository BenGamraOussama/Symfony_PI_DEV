<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\Exercice;
use App\Form\ActiviteType;
use App\Repository\ActiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;


#[Route('/activite')]
final class ActiviteController extends AbstractController
{
    #[Route('/', name: 'app_activite_index', methods: ['GET'])]
    public function index(Request $request, ActiviteRepository $activiteRepository): Response
    {
        $user = $this->getUser();
        $typeFilter = $request->query->get('type');

        $activites = $activiteRepository->findByFilters($typeFilter);

        return $this->render('activite/index.html.twig', [
            'activites' => $activites,
            'typeFilter' => $typeFilter,
            'user' => $user
        ]);
    }
        
    #[Route('/update-status', name: 'app_activite_update_status', methods: ['POST'])]
public function updateStatus(
    Request $request,
    EntityManagerInterface $em
): Response {
    $user = $this->getUser();

    $activites = $em->getRepository(Activite::class)->find($request->request->get('activity_id'));

    if ($activites) {
        $activites->setStatus($request->request->get('status'));
        $em->flush();
    }

    return new Response(null, 204);
}

    #[Route('/new', name: 'app_activite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Handle exercise relationship
                if ($activite->getType() === 'exercise') {
                    $exerciseData = $form->get('exercice')->getData();
                    
                    if (!$exerciseData || empty($exerciseData->getQuestion())) {
                        throw new \Exception('Exercise question is required.');
                    }

                    $exercise = new Exercice();
                    $exercise->setQuestion($exerciseData->getQuestion());
                    $exercise->setActivite($activite);
                    $entityManager->persist($exercise);
                }

                $entityManager->persist($activite);
                $entityManager->flush();

                $this->addFlash('success', 'Activity created successfully!');
                return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
            }
        }

        return $this->render('activite/new.html.twig', [
            'activite' => $activite,
            'form' => $form,
            'user' => $user
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
                $originalExercise = $activite->getExercice();
                
                if ($activite->getType() === 'exercise') {
                    $exerciseData = $form->get('exercice')->getData();
                    
                    if (!$exerciseData || empty($exerciseData->getQuestion())) {
                        throw new \Exception('Exercise question is required.');
                    }

                    if ($originalExercise) {
                        $originalExercise->setQuestion($exerciseData->getQuestion());
                    } else {
                        $exercise = new Exercice();
                        $exercise->setQuestion($exerciseData->getQuestion());
                        $exercise->setActivite($activite);
                        $entityManager->persist($exercise);
                    }
                } else {
                    if ($originalExercise) {
                        $entityManager->remove($originalExercise);
                    }
                }

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
}