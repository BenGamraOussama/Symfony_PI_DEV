<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Form\PatientType;
use App\Form\PasswordForm;
use App\Repository\PatientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Repository\ActiviteRepository;
use App\Entity\Activite;

#[Route('/patient')]
final class PatientController extends AbstractController{
    #[Route('/{id}', name: 'app_patient_show', methods: ['GET'])]
    public function show(Patient $patient): Response
    {
        return $this->render('patient/show.html.twig', [
            'patient' => $patient,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Patient $patient, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordHasherInterface $passwordHasher, int $id): Response
    {
        $form = $this->createForm(PatientType::class, $patient, [
            'is_edit' => true, // L'utilisateur connecté, donc on n'affiche pas le champ de mot de passe
            'is_admin' => true, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
            'is_register' => true, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
            'on_register' => true, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
        ]);
        $form->handleRequest($request);

        $formPassword = $this->createForm(PasswordForm::class);
        $formPassword->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossierMedicalFile = $form->get('dossierMedical')->getData();

            if ($dossierMedicalFile) {
                $originalFilename = pathinfo($dossierMedicalFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$dossierMedicalFile->guessExtension();

                try {
                    $dossierMedicalFile->move(
                        $this->getParameter('dossier_medical_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle exception if something happens during file upload
                }

                $patient->setDossierMedicalPath($newFilename);
            }
            $entityManager->flush();

            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }

        if ($formPassword->isSubmitted() && $formPassword->isValid()) {
            $newPassword = $formPassword->get('plainPassword')->getData();
            $hashedPassword = $passwordHasher->hashPassword($patient, $newPassword);
            $patient->setPassword($hashedPassword);

            $entityManager->flush();

            return $this->redirectToRoute('app_patient_show', ['id' => $psychiatre->getId()],  Response::HTTP_SEE_OTHER);
        }

        return $this->render('patient/edit.html.twig', [
            'patient' => $patient,
            'form' => $form->createView(),
            'formP' => $formPassword->createView(),
        ]);
    }
    #[Route('/{id}', name: 'app_patient_delet', methods: ['POST'])]
    public function delete(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$patient->getId(), $request->get('_token'))) {
            $entityManager->remove($patient);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
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
