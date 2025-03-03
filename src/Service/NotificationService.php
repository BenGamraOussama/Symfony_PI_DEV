<?php 

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Entity\Patient;

class NotificationService
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendActivityAssignedEmail(Patient $patient, string $type)
    {
        $email = (new Email())
            ->from('no-reply@yourdomain.com')
            ->to($patient->getUser()->getEmail())
            ->subject('New ' . $type . ' Assigned to You')
            ->html("<p>Hello " . $patient->getUser()->getFirstName() . ",</p>
                    <p>A new <strong>$type</strong> has been assigned to you.</p>
                    <p>Please check your dashboard to complete it.</p>");

        $this->mailer->send($email);
    }
}
