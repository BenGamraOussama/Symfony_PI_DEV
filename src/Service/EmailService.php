<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendAppointmentConfirmation(string $recipientEmail, string $appointmentDetails): void
    {
        $email = (new Email())
            ->from('no-reply@example.com') // Adresse expéditeur
            ->to($recipientEmail) // Adresse destinataire
            ->subject('Confirmation de rendez-vous') // Sujet de l'e-mail
            ->text('Votre rendez-vous a été confirmé. Détails : ' . $appointmentDetails); // Corps du message

        $this->mailer->send($email);
    }
}