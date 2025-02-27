<?php

namespace App\Twig;

use App\Service\DeepSeekMotivationalMessageService;
use Symfony\Component\Security\Core\Security;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class AppExtension extends AbstractExtension implements GlobalsInterface
{
    private $motivationalMessageService;
    private $security;

    public function __construct(DeepSeekMotivationalMessageService $motivationalMessageService, Security $security)
    {
        $this->motivationalMessageService = $motivationalMessageService;
        $this->security = $security;
    }

    public function getGlobals(): array
    {
        return [
            'message' => $this->motivationalMessageService->getMotivationalMessage(),
            'user' => $this->security->getUser(),
        ];
    }
}