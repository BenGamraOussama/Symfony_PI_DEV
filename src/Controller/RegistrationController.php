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
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class RegistrationController extends AbstractController
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
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
        $psychiatre->setConfirmationToken(bin2hex(random_bytes(32))); // Generate confirmation token
        $entityManager->persist($psychiatre);
        $this->sendConfirmationEmail($psychiatre); // Send confirmation email
        $entityManager->flush();

        $this->addFlash('success', 'Please check your email to confirm your registration.');
        return $this->redirectToRoute('app_login');
    }

    // Formulaire Fournisseur
    $fournisseur = new Fournisseur();
    $fournisseurForm = $this->createForm(FournisseurType::class, $fournisseur);
    $fournisseurForm->handleRequest($request);

    if ($fournisseurForm->isSubmitted() && $fournisseurForm->isValid()) {
        /** @var string $plainPassword */
        $plainPassword = $fournisseurForm->get('plainPassword')->getData();

        $fournisseur->setRoles(['ROLE_FOURNISSEUR']);
        $fournisseur->setPassword($userPasswordHasher->hashPassword($fournisseur, $plainPassword));

        $fournisseur->setConfirmationToken(bin2hex(random_bytes(32))); // Generate confirmation token
        $entityManager->persist($fournisseur);
        $this->sendConfirmationEmail($fournisseur); // Send confirmation email
        $entityManager->flush();

        $this->addFlash('success', 'Please check your email to confirm your registration.');
        return $this->redirectToRoute('app_login');
    }

    $patient = new Patient();
    $patientForm = $this->createForm(PatientType::class, $patient, [
        'is_edit' => false, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
        'is_admin' => true, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
        'is_register' => true, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
        'on_register' => false, // L'utilisateur n'est pas connecté, donc on affiche le champ de mot de passe
    ]);
    $patientForm->handleRequest($request);

    if ($patientForm->isSubmitted() && $patientForm->isValid()) {
        /** @var string $plainPassword */
        $plainPassword = $patientForm->get('plainPassword')->getData();

        $patient->setRoles(['ROLE_PATIENT']);
        $patient->setPassword($userPasswordHasher->hashPassword($patient, $plainPassword));

        // Generate a 2FA secret
        $patient->setConfirmationToken(bin2hex(random_bytes(32))); // Generate confirmation token
        $entityManager->persist($patient);
        $this->sendConfirmationEmail($patient); // Send confirmation email
        $entityManager->flush();

        $this->addFlash('success', 'Please check your email to confirm your registration.');
        return $this->redirectToRoute('app_login');
    }

    // Passer les deux formulaires à la vue Twig
    return $this->render('registration/register.html.twig', [
        'psychiatreType' => $psychiatreForm->createView(),
        'fournissuerType' => $fournisseurForm->createView(),
        'patientFormType' => $patientForm->createView(),
        'recaptcha_site_key' => $_ENV['RECAPTCHA_SITE_KEY'], // Passer la clé à Twig
    ]);
}
private function sendConfirmationEmail($user): void
    {
        $email = (new Email())
            ->from('noreply@example.com')
            ->to($user->getEmail())
            ->subject('Please Confirm Your Email')
            ->html($this->renderView('emails/email1.html.twig', [
                'user' => $user,
                'token' => $user->getConfirmationToken(),
            ]));

            $this->mailer->send($email);
    }

    #[Route('/confirm-email/{token}', name: 'app_confirm_email')]
    public function confirmEmail(string $token, EntityManagerInterface $entityManager): Response
    {
        // Find user by confirmation token
        $user = $entityManager->getRepository(Patient::class)->findOneBy(['confirmationToken' => $token])
            ?? $entityManager->getRepository(Psychiatre::class)->findOneBy(['confirmationToken' => $token])
            ?? $entityManager->getRepository(Fournisseur::class)->findOneBy(['confirmationToken' => $token]);

        if (!$user || $user->getConfirmationToken() !== $token) {
            throw $this->createNotFoundException('Invalid confirmation token or token has already been used');
        }

        // Clear the confirmation token
        $user->setConfirmationToken(null);
        $entityManager->flush();

        // Redirect to login with success message
        $this->addFlash('success', 'Your email has been confirmed! You can now log in.');
        return $this->redirectToRoute('app_login');
    }
}
