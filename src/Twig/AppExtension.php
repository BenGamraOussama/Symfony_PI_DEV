<?php

namespace App\Twig;

use Symfony\Component\Security\Core\Security;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use App\Service\AuthenticatorService;

class AppExtension extends AbstractExtension implements GlobalsInterface
{
    private ?string $qrCodeUri = null;
    private ?string $secret = null;

    public function __construct(
        private readonly AuthenticatorService $authenticatorService,
        private readonly Security $security
    )
    {
        $user = $this->security->getUser();
        if ($user) {
            [$this->qrCodeUri, $this->secret] = $this->authenticatorService->getQrCodeUri($user);
        }
    }

    public function getGlobals(): array
    {
        return [
            'qrCodeUri' => $this->qrCodeUri,
            'secret' => $this->secret,
            'user' => $this->security->getUser(),
        ];
    }
}