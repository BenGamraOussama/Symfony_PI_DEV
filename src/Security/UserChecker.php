<?php
namespace App\Security;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Patient;

class UserChecker implements UserCheckerInterface
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function checkPreAuth(UserInterface $user)
    
    {
        if ($user instanceof Patient) {
            if ($user->getSuspendedUntil() && $user->getSuspendedUntil() > new \DateTime()) {
                throw new CustomUserMessageAccountStatusException(
                    'Your account is suspended until ' . $user->getSuspendedUntil()->format('Y-m-d H:i:s')
                );
            }
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
        // Additional checks after authentication if needed
    }
}
