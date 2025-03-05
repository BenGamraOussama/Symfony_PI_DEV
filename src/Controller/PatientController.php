<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Form\PatientType;
use App\Form\PasswordForm;
use App\Repository\PatientRepository;
use App\Entity\Produit;
use App\Entity\Rating;
use App\Form\RatingType;
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
use Knp\Component\Pager\PaginatorInterface;

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
    // Affichage de tous les produits avec pagination et filtre par prix
    #[Route('/produit_patient', name: 'produit_index_patient', methods: ['GET'])]
    #[IsGranted('PUBLIC_ACCESS')]
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {
        // Récupérer les valeurs de prix depuis la requête GET
        $prixMin = $request->query->get('prix_min');
        $prixMax = $request->query->get('prix_max');

        // Requête de base pour récupérer les produits avec des filtres sur les prix
        $queryBuilder = $entityManager->getRepository(Produit::class)->createQueryBuilder('p');

        if ($prixMin) {
            $queryBuilder->andWhere('p.prix >= :prixMin')->setParameter('prixMin', $prixMin);
        }

        if ($prixMax) {
            $queryBuilder->andWhere('p.prix <= :prixMax')->setParameter('prixMax', $prixMax);
        }

        $query = $queryBuilder->getQuery();

        // Pagination
        $pagination = $paginator->paginate($query, $request->query->getInt('page', 1), 2);
        $produits = $pagination->getItems();

        return $this->render('produit/index_patient.html.twig', [
            'pagination' => $pagination,
            'produits' => $produits,
            'prixMin' => $prixMin,
            'prixMax' => $prixMax,
        ]);
    }

    // Affichage d'un produit spécifique avec un formulaire de notation
    #[Route('/produit/{id}', name: 'produit_show_patient')]
    public function showProduit(Produit $produit, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Création du formulaire de notation
        $rating = new Rating(); // Créer une instance de l'entité Rating
        $form = $this->createForm(RatingType::class, $rating); // Créer le formulaire avec RatingType
        $form->handleRequest($request); // Gérer la soumission du formulaire

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Lier l'évaluation au produit
            $rating->setProduit($produit);
            $entityManager->persist($rating); // Persister l'évaluation
            $entityManager->flush(); // Sauvegarder dans la base de données

            // Calcul de la moyenne des notes du produit
            $ratings = $entityManager->getRepository(Rating::class)->findBy(['produit' => $produit]);
            $totalRating = 0;
            $ratingCount = count($ratings);

            // Si le produit a des évaluations
            if ($ratingCount > 0) {
                foreach ($ratings as $r) {
                    $totalRating += $r->getNote(); // Ajoute la note à la somme
                }
                $averageRating = $totalRating / $ratingCount; // Calcul de la moyenne
            } else {
                $averageRating = 0; // Aucun rating, donc moyenne = 0
            }

            // Mettre à jour la note moyenne du produit
            $produit->setAverageRating($averageRating); // Utilisation du setter
            $entityManager->persist($produit);
            $entityManager->flush();

            // Rediriger après la soumission du formulaire
            return $this->redirectToRoute('produit_show_patient', ['id' => $produit->getId()]);
        }

        // Renvoyer la vue avec les variables 'produit' et 'form'
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(), // Passer le formulaire à la vue
        ]);
    }

    #[Route('/produits/recherche', name: 'produit_recherche')]
    public function search(Request $request, EntityManagerInterface $entityManager, ProduitRepository $produitRepository): Response
    {
        // Récupère la query du formulaire de recherche
        $query = $request->query->get('query');

        dump($query); // Affiche la valeur de la recherche dans la barre de débogage pour vérifier

        if (!$query) {
            $produits = []; // Si aucune recherche, pas de produits à afficher
        } else {
            // Si une recherche a été effectuée, on utilise le repository pour récupérer les produits correspondants
            $produits = $produitRepository->findBySearchQuery($query);
        }

        // On renvoie la réponse avec les produits dans la vue
        return $this->render('produit/index_user.html.twig', [
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
