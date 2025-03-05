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
use App\Service\AuthenticatorService;
use OTPHP\TOTP;
use App\Twig\AppExtension;

#[Route('/patient')]
final class PatientController extends AbstractController
{
    public function __construct(
        private readonly AuthenticatorService $authenticatorService,
        private readonly AppExtension $appExtension
    )
    {
    }
    #[Route('/{id}', name: 'app_patient_show', methods: ['GET'])]
    public function show(Patient $patient): Response
    {
        return $this->render('patient/show.html.twig', [
            'patient' => $patient,
        ]);
    }

    #[Route('/produit_patient', name: 'produit_index_patient', methods: ['GET'])]
    public function indexPatient(EntityManagerInterface $entityManager): Response
    {
        $produits = $entityManager->getRepository(Produit::class)->findAll();
        return $this->render('produit/index_patient.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/api/produits', name: 'api_produits', methods: ['GET'])]
    public function getProduit(EntityManagerInterface $entityManager): JsonResponse
    {
        $produits = $entityManager->getRepository(Produit::class)->findAll();
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
        return new JsonResponse(['produits' => $produitsArray]);
    }

    #[Route('/produit/{id<\d+>}', name: 'produit_show_patient', methods: ['GET'])]
    public function showProduit(EntityManagerInterface $entityManager, int $id): Response
    {
        if (!is_numeric($id)) {
            throw $this->createNotFoundException('ID invalide');
        }
        $produit = $entityManager->getRepository(Produit::class)->find($id);
        if (!$produit) {
            throw $this->createNotFoundException('Produit introuvable');
        }
        return $this->render('produit/show_patient.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Patient $patient, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordHasherInterface $passwordHasher, int $id): Response
    {
        $user = $this->getUser();
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
            // Handle 2FA settings
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

            // Handle authenticator pairing
            if ($request->isMethod(Request::METHOD_POST)) {
                $secret = $request->request->get('secret');
                if ($secret) {
                    $this->authenticatorService->validatePairing($patient, $secret);
                } else {
                    [$qrCodeUri, $secret] = $this->authenticatorService->getQrCodeUri($patient);
                    $patient->setSecret($secret); // Set the secret for the patient
                }
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_patient_show', ['id' => $patient->getId()], Response::HTTP_SEE_OTHER);
        }

        if ($formPassword->isSubmitted() && $formPassword->isValid()) {
            $newPassword = $formPassword->get('plainPassword')->getData();
            $hashedPassword = $passwordHasher->hashPassword($patient, $newPassword);
            $patient->setPassword($hashedPassword);

            $entityManager->flush();

            return $this->redirectToRoute('app_patient_show', ['id' => $patient->getId()], Response::HTTP_SEE_OTHER);
        }

        // Handle authenticator pairing
        if ($request->isMethod(Request::METHOD_POST) && $request->request->has('secret')) {
            $secret = $request->request->get('secret');
            $this->authenticatorService->validatePairing($patient, $secret);
            return $this->redirectToRoute('app_profile_edit', ['id' => $patient->getId()]);
        }

        $user = $this->getUser();
        if ($user === null) {
            return $this->redirectToRoute('app_login'); // Redirect to login if user is not authenticated
        }
        // Vérification de l'OTP (Authentification 2FA)
        if ($request->isMethod(Request::METHOD_POST) && $request->request->has('otp')) {
            if (null === $patient->getSecret()) {
                $this->addFlash('error', 'Le secret 2FA est manquant. Veuillez configurer l\'authentification à deux facteurs.');
                return $this->render('patient/edit.html.twig', [
                    'patient' => $patient,
                    'form' => $form->createView(),
                    'formP' => $formPassword->createView(),
                ]);
            }
    
            $totp = TOTP::create($patient->getSecret()); // Correction ici
            $otp = $request->request->get('otp');
            $result = $totp->verify($otp);
    
            return $this->render('patient/edit.html.twig', [
                'patient' => $patient,
                'form' => $form->createView(),
                'formP' => $formPassword->createView(),
                'result' => $result,
            ]);
        }
        [$qrCodeUri, $secret] = $this->authenticatorService->getQrCodeUri($patient);

        return $this->render('patient/edit.html.twig', [
            'patient' => $patient,
            'form' => $form->createView(),
            'formP' => $formPassword->createView(),
            'qrCodeUri' => $qrCodeUri,
            'secret' => $secret,
        ]);
    }


    #[Route('/{id}', name: 'app_patient_delet', methods: ['POST'])]
    public function delete(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$patient->getId(), $request->get('_token'))) {
            $patient->setBlocked(true); // Set the patient as blocked instead of deleting
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/patient/{patientId}/activites', name: 'app_patient_activites')]
    public function viewActivities(int $patientId, ActiviteRepository $activiteRepository, PatientRepository $patientRepository): Response
    {
        $patient = $patientRepository->find($patientId);
        if (!$patient) {
            throw $this->createNotFoundException('Patient not found');
        }
        $activites = $activiteRepository->findBy(['patient' => $patient]);

        return $this->render('activite/index.html.twig', [
            'activites' => $activites,
            'patient' => $patient,
        ]);
    }

    /**
     * @Route("/patient/activity/update/{id}", name="app_patient_update_activity_status")
     */
    public function updateActivityStatus(Activite $activity, Request $request, EntityManagerInterface $entityManager): Response
    {
        $status = $request->request->get('status');
        if (in_array($status, ['Pas commencé', 'En cours', 'Complété'])) {
            $activity->setStatus($status);
            $entityManager->flush();
        }

        return $this->json([
            'status' => $activity->getStatus(),
        ]);
    }
}
