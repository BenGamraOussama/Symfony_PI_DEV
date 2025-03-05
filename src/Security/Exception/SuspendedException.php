<?php 

namespace App\Security\Exception;

use Symfony\Component\Security\Core\Exception\AccountStatusException;

class SuspendedException extends AccountStatusException
{
    public function __construct(string $message = "Your account is suspended.")
    {
        parent::__construct($message);
    }
}
