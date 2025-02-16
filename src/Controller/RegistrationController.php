<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Psychiatre;
use App\Entity\Patient;
use App\Entity\Fournisseur;
use App\Form\PsychiatreType;
use App\Form\PatientType;
use App\Form\FournisseurType;
use App\Security\SecurityAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
public function register(
    Request $request,
    UserPasswordHasherInterface $userPasswordHasher,
    Security $security,
    EntityManagerInterface $entityManager
): Response {
    // Formulaire psychiatre
    $psychiatre = new Psychiatre();
    $psychiatreForm = $this->createForm(PsychiatreType::class, $psychiatre);
    $psychiatreForm->handleRequest($request);

    if ($psychiatreForm->isSubmitted() && $psychiatreForm->isValid()) {
        /** @var string $plainPassword */
        $plainPassword = $psychiatreForm->get('plainPassword')->getData();

        $psychiatre->setRoles(['ROLE_PSYCHIATRE']);
        $psychiatre->setPassword($userPasswordHasher->hashPassword($psychiatre, $plainPassword));

        $entityManager->persist($psychiatre);
        $entityManager->flush();

        return $security->login($psychiatre, SecurityAuthenticator::class, 'main');
    }

    // Formulaire Fournisseur
    $fournisseur = new Fournisseur();
    $fournisseurForm = $this->createForm(FournisseurType::class, $fournisseur);
    $fournisseurForm->handleRequest($request);

    if ($fournisseurForm->isSubmitted() && $fournisseurForm->isValid()) {
        /** @var string $plainPassword */
        $plainPassword = $fournisseurForm->get('plainPassword')->getData();

        $fournisseur->setRoles(['ROLE_FOURNISSEUR']);
        $fournisseur->setEtat('true');
        $fournisseur->setPassword($userPasswordHasher->hashPassword($fournisseur, $plainPassword));

        $entityManager->persist($fournisseur);
        $entityManager->flush();

        return $security->login($fournisseur, SecurityAuthenticator::class, 'main');
    }

    $patient = new Patient();
    $patientForm = $this->createForm(PatientType::class, $patient, [
        'is_edit' => false, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
        'is_admin' => true, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
        'is_register' => true, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
    ]);
    $patientForm->handleRequest($request);

    if ($patientForm->isSubmitted() && $patientForm->isValid()) {
        /** @var string $plainPassword */
        $plainPassword = $patientForm->get('plainPassword')->getData();

        $patient->setRoles(['ROLE_PATIENT']);
        $patient->setPassword($userPasswordHasher->hashPassword($patient, $plainPassword));

        $entityManager->persist($patient);
        $entityManager->flush();

        return $security->login($patient, SecurityAuthenticator::class, 'main');
    }

    // Passer les deux formulaires à la vue Twig
    return $this->render('registration/register.html.twig', [
        'psychiatreType' => $psychiatreForm->createView(),
        'fournissuerType' => $fournisseurForm->createView(),
        'patientFormType' => $patientForm->createView(),
    ]);
}
}
