<?php

namespace App\Controller;

use App\Service\DeepSeekMotivationalMessageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository;
use App\Repository\PsychiatreRepository;
use App\Repository\FournisseurRepository;
use App\Repository\PatientRepository;
use App\Entity\User;
use App\Service\PasswordGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\Patient;
use App\Entity\Fournisseur;
use App\Entity\Psychiatre;
use App\Form\Psychiatreadd;
use App\Form\Fournisseuradd;
use App\Form\PatientType;
use App\Form\PsychiatreType;
use App\Form\FournisseurType;
use App\Form\Patientadd;
use App\Security\SecurityAuthenticator;
use Symfony\Bundle\SecurityBundle\Security;
#[Route('/admin')]
final class AdminController extends AbstractController
{
    private $motivationalMessageService;

    public function __construct(DeepSeekMotivationalMessageService $motivationalMessageService)
    {
        $this->motivationalMessageService = $motivationalMessageService;
    }

    
    #[Route(name: 'app_admin')]
    public function index(UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        $totalPatients = $userRepository->countPatients();
        $totalPsychiatres = $userRepository->countPsychiatres();
        $totalFournisseurs = $userRepository->countFournisseurs();

        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'totalP'=>$totalPatients,
            'totalPsy'=>$totalPsychiatres,
            'totalF'=>$totalFournisseurs,
            'user' => $user,
            'message' => $message,
        ]);


    }
    #[Route('/profile/{id}', name: 'app_admin_show', methods: ['GET'])]
    public function show(): Response
    {
        $user = $this->getUser();
        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('admin/profile.html.twig', [
            'user' => $user,
            'message' => $message,
        ]);

    }
    //psychiatre
    #[Route('/listPsychiatre', name: 'app_admin_listpsychiatre', methods: ['GET'])]
    public function listPsychiatre(PsychiatreRepository $psychiatreRepository): Response
    {
        $user = $this->getUser();
        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('admin/listPsychiatre.html.twig', [
            'psychiatres' => $psychiatreRepository->findAll(),
            'user' => $user,
            'message' => $message,
        ]);

    }
    #[Route('/ajouterPsychitare', name: 'app_admin_ajouterpsychiatre')]

    public function addpsychiatre(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        PasswordGenerator $passwordGenerator,
        MailerInterface $mailer,
        UserRepository $userRepository // Injecter le repository User
     ): Response {
        $user = $this->getUser();
        $psychiatre = new Psychiatre();
        $form = $this->createForm(Psychiatreadd::class, $psychiatre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si l'email existe déjà
            $existingUser = $userRepository->findOneBy(['email' => $psychiatre->getEmail()]);

            if ($existingUser) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');
                return $this->redirectToRoute('app_admin_ajouterpsychiatre');
            }
            // Générer un mot de passe aléatoire
            $password = $passwordGenerator->generatePassword();

            // Encoder le mot de passe
            $psychiatre->setPassword(
                $userPasswordHasher->hashPassword(
                    $psychiatre,
                    $password // <-- Utilisez la variable $password déjà générée
                )
            );
            // Attribuer le rôle ROLE_MEDECIN
            $psychiatre->setRoles(['ROLE_PSYCHIATRE']);

            // Enregistrer l'utilisateur en base de données
            $entityManager->persist($psychiatre);
            $entityManager->flush();

            // Envoyer un email avec les informations de connexion
            $email = (new Email())
                ->from('oussamagamra52@gmail.com')
                ->to($psychiatre->getEmail())
                ->subject('Vos informations de connexion')
                ->html($this->renderView(
                    'emails/psychiatre_registration.html.twig',
                    [
                        'email' => $psychiatre->getEmail(),
                        'password' => $password, // <-- Utilisez $password ici
                    ]
                ));

            $mailer->send($email);

            $this->addFlash('success', 'Compte médecin créé avec succès. Un email a été envoyé avec les informations de connexion.');
            return $this->redirectToRoute('app_admin_ajouterpsychiatre');

        }

        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('admin/ajouterPsychiatre.html.twig', [
            'psychiatreadd' => $form,
            'firstName' => $form->get('firstName')->createView(),
            'lastName' => $form->get('lastName')->createView(),
            'email' => $form->get('email')->createView(),
            'user'=>$user,
            'message' => $message,
        ]);

    }
    #[Route('listPsychiatre/{id}', name: 'psychiatre_delete', methods: ['POST'])]
    public function deletepsychiatre(Request $request, Psychiatre $psychiatre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$psychiatre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($psychiatre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_listpsychiatre', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('listPsychiatre/{id}', name: 'app_psychiatre_block', methods: ['POST'])]
    public function blockpsy(Request $request, Psychiatre $psychiatre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('blockpsy'.$psychiatre->getId(), $request->getPayload()->getString('_token'))) {
            $psychiatre->setBlocked(true); // Set the psychiatrist as blocked instead of deleting
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }
    //fournisseur
    #[Route('/listFournisseur', name: 'app_admin_listfournisseur', methods: ['GET'])]
    public function listFournisseur(FournisseurRepository $fournisseurRepository): Response
    {
        $user = $this->getUser();
        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('admin/listFournisseur.html.twig', [
            'fournisseurs' => $fournisseurRepository->findAll(),
            'user' => $user,
            'message' => $message,
        ]);

    }
    #[Route('/ajouterFournisseur', name: 'app_admin_ajouterfournisseur', methods: ['GET', 'POST'])]
    public function addfournisseur(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        PasswordGenerator $passwordGenerator,
        MailerInterface $mailer,
        UserRepository $userRepository // Injecter le repository User
     ): Response {
        $user = $this->getUser();
        $fournisseur = new Fournisseur();
        $form = $this->createForm(Fournisseuradd::class, $fournisseur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si l'email existe déjà
            $existingUser = $userRepository->findOneBy(['email' => $fournisseur->getEmail()]);

            if ($existingUser) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');
                return $this->redirectToRoute('app_admin_ajouterfournisseur');
            }
            $fournisseur->setEtat('true');
            // Générer un mot de passe aléatoire
            $password = $passwordGenerator->generatePassword();

            // Encoder le mot de passe
            $fournisseur->setPassword(
                $userPasswordHasher->hashPassword(
                    $fournisseur,
                    $password // <-- Utilisez la variable $password déjà générée
                )
            );
            // Attribuer le rôle ROLE_MEDECIN
            $fournisseur->setRoles(['ROLE_FOURNISSEUR']);

            // Enregistrer l'utilisateur en base de données
            $entityManager->persist($fournisseur);
            $entityManager->flush();

            // Envoyer un email avec les informations de connexion
            $email = (new Email())
                ->from('oussamagamra52@gmail.com')
                ->to($fournisseur->getEmail())
                ->subject('Vos informations de connexion')
                ->html($this->renderView(
                    'emails/psychiatre_registration.html.twig',
                    [
                        'email' => $fournisseur->getEmail(),
                        'password' => $password, // <-- Utilisez $password ici
                    ]
                ));

            $mailer->send($email);

            $this->addFlash('success', 'Compte médecin créé avec succès. Un email a été envoyé avec les informations de connexion.');
            return $this->redirectToRoute('app_admin_ajouterfournisseur');
        }

        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('admin/ajouterFournisseur.html.twig', [
            'fournisseuradd' => $form,
            'firstName' => $form->get('firstName')->createView(),
            'lastName' => $form->get('lastName')->createView(),
            'email' => $form->get('email')->createView(),
            'user'=>$user,
            'message' => $message,
        ]);

    }
    #[Route('listFournisseur/{id}', name: 'fournisseur_delete', methods: ['POST'])]
    public function delete(Request $request, Fournisseur $fournisseur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fournisseur->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($fournisseur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_listfournisseur', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('listFournisseur/{id}', name: 'app_fournisseur_block', methods: ['POST'])]
    public function block(Request $request, Fournisseur $fournisseur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('block'.$fournisseur->getId(), $request->getPayload()->getString('_token'))) {
            $fournisseur->setBlocked(true); // Set the fournisseur as blocked instead of deleting
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }

    //Patient
    #[Route('/listPatient', name: 'list_patient_index', methods: ['GET'])]
    public function listPatient(PatientRepository $patientRepository): Response
    {
        $user = $this->getUser();
        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('admin/listPatient.html.twig', [
            'patients' => $patientRepository->findAll(),
            'user' => $user,
            'message' => $message,
        ]);

    }

    #[Route('/ajouterPatient', name: 'app_patient_new', methods: ['GET', 'POST'])]
    public function addpatient(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        PasswordGenerator $passwordGenerator,
        MailerInterface $mailer,
        UserRepository $userRepository // Injecter le repository User
     ): Response {
        $user = $this->getUser();
        $patient = new Patient();
        $form = $this->createForm(PatientType::class, $patient, [
            'is_edit' => true, // L'utilisateur n'est pas en mode édition
            'is_admin' => true, // L'utilisateur est un administrateur
            'is_register' => false, // L'utilisateur n'est pas en mode édition
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si l'email existe déjà
            $existingUser = $userRepository->findOneBy(['email' => $patient->getEmail()]);

            if ($existingUser) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');
                return $this->redirectToRoute('app_patient_new');
            }
            // Générer un mot de passe aléatoire
            $password = $passwordGenerator->generatePassword();

            // Encoder le mot de passe
            $patient->setPassword(
                $userPasswordHasher->hashPassword(
                    $patient,
                    $password // <-- Utilisez la variable $password déjà générée
                )
            );
            // Attribuer le rôle ROLE_MEDECIN
            $patient->setRoles(['ROLE_PATIENT']);

            // Enregistrer l'utilisateur en base de données
            $entityManager->persist($patient);
            $entityManager->flush();

            // Envoyer un email avec les informations de connexion
            $email = (new Email())
                ->from('oussamagamra52@gmail.com')
                ->to($patient->getEmail())
                ->subject('Vos informations de connexion')
                ->html($this->renderView(
                    'emails/psychiatre_registration.html.twig',
                    [
                        'email' => $patient->getEmail(),
                        'password' => $password, // <-- Utilisez $password ici
                    ]
                ));

            $mailer->send($email);

            $this->addFlash('success', 'Compte médecin créé avec succès. Un email a été envoyé avec les informations de connexion.');
            return $this->redirectToRoute('app_patient_new');
        }

        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('admin/ajouterPatient.html.twig', [
            'patientadd' => $form,
            'firstName' => $form->get('firstName')->createView(),
            'lastName' => $form->get('lastName')->createView(),
            'email' => $form->get('email')->createView(),
            'user'=>$user,
            'message' => $message,
        ]);

    }
    #[Route('listPatient/{id}', name: 'patient_delete', methods: ['POST'])]
    public function deletePatient(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$patient->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($patient);
            $entityManager->flush();
        }
        return $this->redirectToRoute('list_patient_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('listPatient/{id}', name: 'app_patient_block', methods: ['POST'])]
    public function blockP(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('blockP'.$patient->getId(), $request->get('_token'))) {
            $patient->setBlocked(true); // Set the patient as blocked instead of deleting
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }
}
