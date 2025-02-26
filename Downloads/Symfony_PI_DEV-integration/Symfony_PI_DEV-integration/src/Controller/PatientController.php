<?php

namespace App\Controller;
use App\Entity\Panier;
use App\Entity\Patient;
use App\Form\PatientType;
use App\Form\PasswordForm;
use App\Entity\Produit;
use App\Entity\Activite;
use App\Repository\PatientRepository;
use App\Repository\ActiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/patient')]
final class PatientController extends AbstractController
{
    // Afficher un patient spécifique
    #[Route('/{id}', name: 'app_patient_show', methods: ['GET'])]
    public function show(Patient $patient): Response
    {
        return $this->render('patient/show.html.twig', [
            'patient' => $patient,
        ]);
    }

    // Affichage de tous les produits dans l'interface utilisateur avec pagination
    #[Route('/produit_patient', name: 'produit_index_patient', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {
        // Récupérer les produits depuis la base de données
        $query = $entityManager->getRepository(Produit::class)->createQueryBuilder('p')->getQuery();

        // Pagination
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            3
        );

        // Assurez-vous que la variable 'produits' est définie ici
        $produits = $pagination->getItems(); // Récupérer les produits de la pagination

        // Renvoyer la vue avec les variables correctes
        return $this->render('produit/index_patient.html.twig', [
            'pagination' => $pagination,
            'produits' => $produits, // Passer la variable 'produits' dans la vue
        ]);
    }
    // API pour récupérer la liste des produits en JSON
    #[Route('/api/produits', name: 'api_produits', methods: ['GET'])]
    public function getProduits(EntityManagerInterface $entityManager): JsonResponse
    {
        $produits = $entityManager->getRepository(Produit::class)->findAll();
        $produitsArray = array_map(fn($produit) => [
            'id' => $produit->getId(),
            'nom' => $produit->getNom(),
            'description' => $produit->getDescription(),
            'prix' => $produit->getPrix(),
            'image' => $produit->getImage(),
        ], $produits);

        return new JsonResponse(['produits' => $produitsArray]);
    }

    // Affichage d'un produit spécifique
    #[Route('/produit/{id}', name: 'produit_show_patient')]
    public function showProduit(Produit $produit): Response
    {
        // Retourne la vue avec le produit récupéré
        return $this->render('produit/show.html.twig', [
            'produit' => $produit, // Envoie l'objet produit à la vue
        ]);
    }

    // Modifier le profil d'un patient
    #[Route('/{id}/edit', name: 'app_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Patient $patient, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordHasherInterface $passwordHasher): Response
    {
        $form = $this->createForm(PatientType::class, $patient, [
            'is_edit' => true,
            'is_admin' => true,
            'is_register' => true,
            'on_register' => true,
        ]);
        $form->handleRequest($request);

        $formPassword = $this->createForm(PasswordForm::class);
        $formPassword->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossierMedicalFile = $form->get('dossierMedical')->getData();

            if ($dossierMedicalFile) {
                $originalFilename = pathinfo($dossierMedicalFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $dossierMedicalFile->guessExtension();

                try {
                    $dossierMedicalFile->move(
                        $this->getParameter('dossier_medical_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload du fichier.');
                }

                $patient->setDossierMedicalPath($newFilename);
            }
            $entityManager->flush();
            return $this->redirectToRoute('app_home');
        }

        if ($formPassword->isSubmitted() && $formPassword->isValid()) {
            $newPassword = $formPassword->get('plainPassword')->getData();
            $hashedPassword = $passwordHasher->hashPassword($patient, $newPassword);
            $patient->setPassword($hashedPassword);
            $entityManager->flush();
            return $this->redirectToRoute('app_patient_show', ['id' => $patient->getId()]);
        }

        return $this->render('patient/edit.html.twig', [
            'patient' => $patient,
            'form' => $form->createView(),
            'formP' => $formPassword->createView(),
        ]);
    }

    // Supprimer un patient
    #[Route('/{id}', name: 'app_patient_delete', methods: ['POST'])]
    public function delete(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $patient->getId(), $request->get('_token'))) {
            $entityManager->remove($patient);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_home');
    }

    // Affichage des activités d'un patient
    #[Route('/{patientId}/activites', name: 'app_patient_activites', methods: ['GET'])]
    public function viewActivities(int $patientId, ActiviteRepository $activiteRepository, PatientRepository $patientRepository): Response
    {
        $patient = $patientRepository->find($patientId);
        if (!$patient) {
            throw $this->createNotFoundException('Patient introuvable');
        }

        $activites = $activiteRepository->findBy(['patient' => $patient]);

        return $this->render('activite/index.html.twig', [
            'activites' => $activites,
            'patient' => $patient,
        ]);
    }

    // Mise à jour du statut d'une activité
    #[Route('/activity/update/{id}', name: 'app_patient_update_activity_status', methods: ['POST'])]
    public function updateActivityStatus(Activite $activity, Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $status = $request->request->get('status');
        if (in_array($status, ['not_started', 'in_progress', 'completed'])) {
            $activity->setStatus($status);
            $entityManager->flush();
        }

        return $this->json(['status' => $activity->getStatus()]);
    }

}
