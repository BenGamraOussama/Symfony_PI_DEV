<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ActiviteRepository;
use App\Repository\PatientRepository;
use App\Entity\Activite;
use App\Entity\Patient;

final class PatientController extends AbstractController
{
    #[Route('/patient', name: 'app_patient')]
public function index(): Response
{
    return $this->render('patient/index.html.twig', [
        'controller_name' => 'PatientController',
    ]);
}
    #[Route('/patient/{patientId}/activites', name: 'app_patient_activites')]
    public function viewActivities(int $patientId, ActiviteRepository $activiteRepository, PatientRepository $patientRepository): Response
    {
        // Fetch patient by their ID
        $patient = $patientRepository->find($patientId);

        // If patient is not found, redirect or show error
        if (!$patient) {
            throw $this->createNotFoundException('Patient not found');
        }

        // Fetch activities for the given patient
        $activites = $activiteRepository->findBy(['patient' => $patient]);

        return $this->render('activite/index.html.twig', [
            'activites' => $activites,  // Pass activities to the view
            'patient' => $patient,      // Optionally pass patient info
        ]);
    }

    /**
     * @Route("/patient/activity/update/{id}", name="app_patient_update_activity_status")
     */
    public function updateActivityStatus(Activite $activity, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Update the status of the activity
        $status = $request->request->get('status');
        if (in_array($status, ['not_started', 'in_progress', 'completed'])) {
            $activity->setStatus($status);
            $entityManager->flush();
        }

        return $this->json([
            'status' => $activity->getStatus(),
        ]);
    }

    
}
