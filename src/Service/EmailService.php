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

public function sendEmail(string $to, string $subject, string $body): void
{
// Créer l'email
$email = (new Email())
->from('ton_adresse_email@example.com')  // Ton adresse email d'expéditeur
->to($to)  // L'email du destinataire
->subject($subject)  // Le sujet de l'email
->text($body);  // Le corps de l'email en texte brut

// Envoie l'email
$this->mailer->send($email);
}
}
