<?php

namespace App\Controller;

use App\Entity\Consultation;
use App\Entity\Psychiatre;
use App\Form\ConsultationType;
use App\Repository\ConsultationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\GoogleCalendarService;
use GuzzleHttp\Client;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\JsonResponse;


#[Route('/consultation')]
final class ConsultationController extends AbstractController
{
    #[Route(name: 'app_consultation_index')]
    public function index(ConsultationRepository $consultationRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $date = $request->query->get('date');
        $patientName = $request->query->get('patient_name');
    
        $consultations = $consultationRepository->findAll();
    
        // Filter consultations based on date and patient name
        if ($date) {
            $consultations = array_filter($consultations, function($consultation) use ($date) {
                return $consultation->getDate()->format('Y-m-d') === $date;
            });
        }
    
        if ($patientName) {
            $consultations = array_filter($consultations, function($consultation) use ($patientName) {
                return stripos($consultation->getPsychiatre()->first()->getFirstName(), $patientName) !== false;
            });
        }
    
        $user = $this->getUser();
        $consultation = new Consultation();
        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);
    
        $page = $request->query->getInt('page', 1);
        $limit = 3; // Number of consultations per page
        $total = count($consultations);
        $consultations = array_slice($consultations, ($page - 1) * $limit, $limit);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // The form data will now include the patient, which will automatically be set in the Consultation entity
            $entityManager->persist($consultation);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_consultation_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('consultation/index.html.twig', [
            'consultations' => $consultations,
            'consultation' => $consultation,
            'form' => $form,
            'user' => $user,
            'current_page' => $page,
            'total_pages' => ceil($total / $limit),
        ]);
    }
    
    #[Route('/new', name: 'app_consultation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        $consultation = new Consultation();
        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($consultation);
            $entityManager->flush();

            return $this->redirectToRoute('app_consultation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('consultation/index.html.twig', [
            'consultation' => $consultation,
            'form' => $form,
            'user' => $user,
        ]);
    }

    #[Route('/calendar', name: 'app_consultation_calendar_view', methods: ['GET'])]
    public function calendarView(): Response
    {
        // Fetch consultations or any necessary data here
        return $this->render('consultation/calendar.html.twig', [
            'consultations' => [], // Pass the consultations data here
        ]);
    }

    public function show(Consultation $consultation): Response
    {
        $user = $this->getUser();

        return $this->render('consultation/show.html.twig', [
            'consultation' => $consultation,
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_consultation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Consultation $consultation, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_consultation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('consultation/edit.html.twig', [
            'consultation' => $consultation,
            'form' => $form,
            'user' => $user,
        ]);
    }

    #[Route('/{id}', name: 'app_consultation_delete', methods: ['POST'])]
    public function delete(Request $request, Consultation $consultation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$consultation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($consultation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_consultation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/consultation/{id}/add-to-calendar', name: 'app_consultation_calendar', methods: ['POST'])]
    public function addToCalendar(int $id, GoogleCalendarService $calendarService, ConsultationRepository $consultationRepository): Response
    {
        $consultation = $consultationRepository->find($id);
        if (!$consultation) {
            throw $this->createNotFoundException('Consultation non trouvée.');
        }

        // Assuming you want to get the first psychiatrist's name
        $psychiatre = $consultation->getPsychiatre()->first();
        $patientName = $psychiatre ? $psychiatre->getFirstName() : 'Unknown Patient';

        $calendarService->createEvent('primary', [
            'title' => 'Consultation avec ' . $patientName,
            'start' => $consultation->getDate()->format('Y-m-d\TH:i:s'),
            'end' => $consultation->getDate()->modify('+1 hour')->format('Y-m-d\TH:i:s'),
            'description' => 'Détails de la consultation...',
        ]);

        $this->addFlash('success', 'Consultation ajoutée au Google Calendar.');

        return $this->redirectToRoute('app_consultation_index');
    }
    
    #[Route('/todo/{id}/add-to-todoist', name: 'app_consultation_todoist', methods: ['POST'])]
    public function addToTodoist(int $id, ConsultationRepository $consultationRepository, MailerInterface $mailer)
    {
        $this->addFlash('info', 'Consultation ID received: ' . $id);

        $consultation = $consultationRepository->find($id);
        if (!$consultation) {
            throw $this->createNotFoundException('Consultation non trouvée.');
        }
    
        // Vérifier si un patient est associé à cette consultation
        $patient = $consultation->getPatient();
        if (!$patient) {
            throw new \LogicException('Aucun patient associé à cette consultation.');
        }
    
        $client = new Client();
        try {
            $response = $client->post('https://api.todoist.com/rest/v2/tasks', [
                'headers' => [
                    'Authorization' => 'Bearer bd4dcbf1dd0c9e36ea6763179c6b0ef9e6a0b0a9', // Corrected header
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'content' => 'Consultation ID: ' . $consultation->getId(),
                    'due_string' => $consultation->getDate()->format('Y-m-d H:i'),
                    'description' => 'Rappel de votre consultation.',
                ],
            ]);
    
            if ($response->getStatusCode() === 200 || $response->getStatusCode() === 201) {
                // Send email to the patient
                $patientEmail = $patient->getEmail();
                $email = (new Email())
                    ->from('novateeam@gmail.com')
                    ->to($patientEmail)
                    ->subject('Rappel de votre consultation')
                    ->html($this->renderView(
                        'emails/consultation_reminder.html.twig',
                        [
                            'consultation' => $consultation,
                            'patient' => $patient,

                        ]
                    ));
                $mailer->send($email);
                $this->addFlash('success', 'Tâche ajoutée à Todoist et email envoyé');
                return $this->redirectToRoute('app_consultation_index');            } else {
                // Handle Todoist error response
                return new JsonResponse(['message' => 'Erreur lors de l\'ajout de la tâche à Todoist.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        } catch (\Exception $e) {
            // Catch any errors (e.g., network issues, API errors)
            return new JsonResponse(['message' => 'Erreur lors de l\'appel à l\'API Todoist: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
  #[Route('/consultationpatient', name: 'app_consultation_patient')]
public function indexpatient(ConsultationRepository $consultationRepository): Response
{       
    $user = $this->getUser();

    // Fetch psychiatrist data
    $consultation = $consultationRepository->findAllWithPsychiatre();
    
    // Fetch consultations
    $consultations = $consultationRepository->findAll();

    return $this->render('patientConsultation/patientconsultation.html.twig', [
        'controller_name' => 'ConsultationController',
        'user' => $user,
        'consultations' => $consultations,
        'psychiatres' => $consultation, // Make sure this matches the Twig variable
    ]);
}

    
}
