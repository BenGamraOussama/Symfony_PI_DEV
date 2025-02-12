<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository;
use App\Repository\PsychiatreRepository;
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
use App\Form\PsychiatreType;
use App\Security\SecurityAuthenticator;
use Symfony\Bundle\SecurityBundle\Security;

final class AdminController extends AbstractController{
    
    #[Route('/admin', name: 'app_admin')]
    public function index(UserRepository $userRepository): Response
    {
        $totalPatients = $userRepository->countPatients();
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'total'=>$totalPatients,
        ]);

    }
    #[Route('/admin/psychiatres', name: 'app_psychiatres', methods: ['GET'])]
    public function list(PsychiatreRepository $psychiatreRepository)
    {
        $psychiatres = $psychiatreRepository->findAll();

        return $this->render('admin/listPsychiatre.html.twig', [
            'psychiatres' => $psychiatres,
        ]);
    }
    #[Route('/admin/ajouterPsychitare', name: 'app_ajouter_psychiatre')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        PasswordGenerator $passwordGenerator,
        MailerInterface $mailer,
        UserRepository $userRepository // Injecter le repository User
     ): Response {
        $user = new Psychiatre();
        $form = $this->createForm(PsychiatreType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si l'email existe déjà
            $existingUser = $userRepository->findOneBy(['email' => $user->getEmail()]);

            if ($existingUser) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');
                return $this->redirectToRoute('app_ajouter_psychiatre');
            }
            $user->setSpecialite('S');
            // Générer un mot de passe aléatoire
            $password = $passwordGenerator->generatePassword();

            // Encoder le mot de passe
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $password // <-- Utilisez la variable $password déjà générée
                )
            );
            // Attribuer le rôle ROLE_MEDECIN
            $user->setRoles(['ROLE_PSYCHIATRE']);

            // Enregistrer l'utilisateur en base de données
            $entityManager->persist($user);
            $entityManager->flush();

            // Envoyer un email avec les informations de connexion
            $email = (new Email())
                ->from('oussamagamra52@gmail.com')
                ->to($user->getEmail())
                ->subject('Vos informations de connexion')
                ->html($this->renderView(
                    'emails/psychiatre_registration.html.twig',
                    [
                        'email' => $user->getEmail(),
                        'password' => $password, // <-- Utilisez $password ici
                    ]
                ));

            $mailer->send($email);

            $this->addFlash('success', 'Compte médecin créé avec succès. Un email a été envoyé avec les informations de connexion.');
            return $this->redirectToRoute('app_ajouter_psychiatre');
        }

        return $this->render('admin/ajouterPsychiatre.html.twig', [
            'psychiatreType' => $form,
            'firstName' => $form->get('firstName')->createView(),
            'lastName' => $form->get('lastName')->createView(),
            'email' => $form->get('email')->createView(),
        ]);
    }
}
