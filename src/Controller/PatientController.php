<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Form\PatientType;
use App\Form\PasswordForm;
use App\Repository\PatientRepository;
use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Repository\ActiviteRepository;
use App\Entity\Activite;
use Symfony\Component\HttpFoundation\JsonResponse;


#[Route('/patient')]
final class PatientController extends AbstractController{
    #[Route('/{id}', name: 'app_patient_show', methods: ['GET'])]
    public function show(Patient $patient): Response
    {
        return $this->render('patient/show.html.twig', [
            'patient' => $patient,
        ]);
    }
    // Affichage de tous les produits dans l'interface utilisateur
    #[Route('/produit_patient', name: 'produit_index_patient', methods: ['GET'])]
    public function indexPatient(EntityManagerInterface $entityManager): Response
    {
        // Récupération de tous les produits de la base de données
        $produits = $entityManager->getRepository(Produit::class)->findAll();

        // Retourner la vue avec les produits
        return $this->render('produit/index_patient.html.twig', [
            'produits' => $produits,
        ]);
    }

    // API pour récupérer la liste des produits en format JSON
    #[Route('/api/produits', name: 'api_produits', methods: ['GET'])]
    public function getProduit(EntityManagerInterface $entityManager): JsonResponse
    {
        // Récupérer tous les produits depuis la base de données
        $produits = $entityManager->getRepository(Produit::class)->findAll();

        // Convertir les produits en tableau pour les renvoyer en JSON
        $produitsArray = [];
        foreach ($produits as $produit) {
            $produitsArray[] = [
                'id' => $produit->getId(),
                'nom' => $produit->getNom(),
                'description' => $produit->getDescription(),
                'prix' => $produit->getPrix(),
                'image' => $produit->getImage(),
            ];
        }

        // Retourner les produits sous forme de réponse JSON
        return new JsonResponse(['produits' => $produitsArray]);
    }

    // Affichage d'un produit spécifique
    #[Route('/produit/{id<\d+>}', name: 'produit_show_patient', methods: ['GET'])]
    public function showProduit(EntityManagerInterface $entityManager, int $id): Response
    {
        // Vérifier que l'ID est valide avant de tenter de récupérer le produit
        if (!is_numeric($id)) {
            throw $this->createNotFoundException('ID invalide');
        }

        // Récupérer un produit spécifique par son ID
        $produit = $entityManager->getRepository(Produit::class)->find($id);

        // Vérifier si le produit existe, sinon afficher une erreur
        if (!$produit) {
            throw $this->createNotFoundException('Produit introuvable');
        }

        // Retourner la vue pour afficher les détails du produit
        return $this->render('produit/show_patient.html.twig', [
            'produit' => $produit,
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
