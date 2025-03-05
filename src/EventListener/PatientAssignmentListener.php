<?php
namespace App\EventListener;

use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\Event\PostFlushEventArgs;
use Doctrine\ORM\EntityManagerInterface; // Make sure to import this
use Doctrine\ORM\UnitOfWork;
use App\Entity\Patient;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class PatientAssignmentListener
{
    private $mailer;
    private $emailsToSend = [];

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onFlush(OnFlushEventArgs $args): void
    {
        $em = $args->getObjectManager();

        // Make sure we treat $em as an EntityManager
        if ($em instanceof EntityManagerInterface) {
            $uow = $em->getUnitOfWork();

            foreach ($uow->getScheduledCollectionUpdates() as $collection) {
                $owner = $collection->getOwner();

                if ($owner instanceof Patient) {
                    $mapping = $collection->getMapping();

                    if ($mapping['fieldName'] === 'activites') {
                        foreach ($collection->getInsertDiff() as $activite) {
                            $this->emailsToSend[] = [
                                'patient' => $owner,
                                'activity' => $activite,
                                'type' => 'activity'
                            ];
                        }
                    } elseif ($mapping['fieldName'] === 'exercices') {
                        foreach ($collection->getInsertDiff() as $exercice) {
                            $this->emailsToSend[] = [
                                'patient' => $owner,
                                'exercise' => $exercice,
                                'type' => 'exercise'
                            ];
                        }
                    }
                }
            }
        }
    }

    public function postFlush(PostFlushEventArgs $args): void
    {
        foreach ($this->emailsToSend as $emailData) {
            $patient = $emailData['patient'];
            $user = $patient->getUser();

            if (!$user || !$user->getEmail()) {
                continue;
            }

            try {
                if ($emailData['type'] === 'activity') {
                    $activity = $emailData['activity'];
                    $email = (new TemplatedEmail())
                        ->to($user->getEmail())
                        ->subject('nouvelle activité assignée')
                        ->htmlTemplate('emails/new_activity_assigned.html.twig')
                        ->context([
                            'patient' => $patient,
                            'activity' => $activity
                        ]);
                } else {
                    $exercise = $emailData['exercise'];
                    $email = (new TemplatedEmail())
                        ->to($user->getEmail())
                        ->subject('nouvelle exercice assignée')
                        ->htmlTemplate('emails/new_exercise_assigned.html.twig')
                        ->context([
                            'patient' => $patient,
                            'exercise' => $exercise
                        ]);
                }

                $this->mailer->send($email);
            } catch (\Exception $e) {
                // Log error here if needed
            }
        }

        $this->emailsToSend = [];
    }
}
