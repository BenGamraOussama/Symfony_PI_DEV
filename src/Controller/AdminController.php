<?php

namespace App\Controller;

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
use App\Security\SecurityAuthenticator;
use Symfony\Bundle\SecurityBundle\Security;
#[Route('/admin')]
final class AdminController extends AbstractController{
    
    #[Route(name: 'app_admin')]
    public function index(UserRepository $userRepository): Response
    {
        $totalPatients = $userRepository->countPatients();
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'total'=>$totalPatients,
        ]);

    }
    //psychiatre
    #[Route('/listPsychiatre', name: 'app_psychiatre_index', methods: ['GET'])]
    public function listPsychiatre(PsychiatreRepository $psychiatreRepository): Response
    {
        return $this->render('psychiatre/index.html.twig', [
            'psychiatres' => $psychiatreRepository->findAll(),
        ]);
    }
    #[Route('/ajouterPsychitare', name: 'app_ajouter_psychiatre')]
    public function addpsychiatre(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        PasswordGenerator $passwordGenerator,
        MailerInterface $mailer,
        UserRepository $userRepository // Injecter le repository User
     ): Response {
        $psychiatre = new Psychiatre();
        $form = $this->createForm(Psychiatreadd::class, $psychiatre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si l'email existe déjà
            $existingUser = $userRepository->findOneBy(['email' => $psychiatre->getEmail()]);

            if ($existingUser) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');
                return $this->redirectToRoute('app_ajouter_psychiatre');
            }
            $psychiatre->setSpecialite('S');
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
            return $this->redirectToRoute('app_ajouter_psychiatre');
        }

        return $this->render('admin/ajouterPsychiatre.html.twig', [
            'psychiatreadd' => $form,
            'firstName' => $form->get('firstName')->createView(),
            'lastName' => $form->get('lastName')->createView(),
            'email' => $form->get('email')->createView(),
        ]);
    }
    #[Route('/{id}', name: 'psychiatre_delete', methods: ['POST'])]
    public function deletepsychiatre(Request $request, Psychiatre $psychiatre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$psychiatre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($psychiatre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_psychiatre_index', [], Response::HTTP_SEE_OTHER);
    }
    //fournisseur
    #[Route('/listFournisseur', name: 'app_fournisseur_index', methods: ['GET'])]
    public function listFournisseur(FournisseurRepository $fournisseurRepository): Response
    {
        return $this->render('fournisseur/index.html.twig', [
            'fournisseurs' => $fournisseurRepository->findAll(),
        ]);
    }
    #[Route('/ajouterFournisseur', name: 'app_fournisseur_new', methods: ['GET', 'POST'])]
    public function addfournisseur(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        PasswordGenerator $passwordGenerator,
        MailerInterface $mailer,
        UserRepository $userRepository // Injecter le repository User
     ): Response {
        $fournisseur = new Fournisseur();
        $form = $this->createForm(Fournisseuradd::class, $fournisseur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si l'email existe déjà
            $existingUser = $userRepository->findOneBy(['email' => $fournisseur->getEmail()]);

            if ($existingUser) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');
                return $this->redirectToRoute('app_fournisseur_new');
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
            return $this->redirectToRoute('app_fournisseur_new');
        }

        return $this->render('admin/ajouterPsychiatre.html.twig', [
            'fournisseuradd' => $form,
            'firstName' => $form->get('firstName')->createView(),
            'lastName' => $form->get('lastName')->createView(),
            'email' => $form->get('email')->createView(),
        ]);
    }
    #[Route('listFournisseur/{id}', name: 'fournisseur_delete', methods: ['POST'])]
    public function delete(Request $request, Fournisseur $fournisseur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fournisseur->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($fournisseur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fournisseur_index', [], Response::HTTP_SEE_OTHER);
    }
    //Patient
    #[Route('/listPatient', name: 'list_patient_index', methods: ['GET'])]
    public function listPatient(PatientRepository $patientRepository): Response
    {
        return $this->render('patient/index.html.twig', [
            'patients' => $patientRepository->findAll(),
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
        $patient = new Patient();
        $form = $this->createForm(PatientType::class, $patient, [
            'is_edit' => false, // L'utilisateur n'est pas en mode édition
            'is_admin' => true, // L'utilisateur est un administrateur
            'is_register' => false, // L'utilisateur n'est pas en mode édition
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si l'email existe déjà
            $existingUser = $userRepository->findOneBy(['email' => $patient->getEmail()]);

            if ($existingUser) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');
                return $this->redirectToRoute('app_ajouter_psychiatre');
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
            return $this->redirectToRoute('app_ajouter_psychiatre');
        }

        return $this->render('admin/ajouterPsychiatre.html.twig', [
            'patientadd' => $form,
            'firstName' => $form->get('firstName')->createView(),
            'lastName' => $form->get('lastName')->createView(),
            'email' => $form->get('email')->createView(),
        ]);
    }
    #[Route('listPatient/{id}', name: 'patient_delete', methods: ['POST'])]
    public function deletePatient(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$patient->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($patient);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_patient_index', [], Response::HTTP_SEE_OTHER);
    }
}
