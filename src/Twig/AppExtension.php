<?php

namespace App\Twig;

use Symfony\Component\Security\Core\Security;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use App\Service\AuthenticatorService;
use Psr\Log\LoggerInterface;

class AppExtension extends AbstractExtension implements GlobalsInterface
{
    private ?string $qrCodeUri = '';
    private ?string $secret = '';
    private ?bool $result = null;

    public function __construct(
        private readonly AuthenticatorService $authenticatorService,
        private readonly Security $security,
        private readonly LoggerInterface $logger
    )
    {
        $user = $this->security->getUser();
        if ($user) {
            $qrCodeData = $this->authenticatorService->getQrCodeUri($user);
            if ($qrCodeData) {
                [$this->qrCodeUri, $this->secret] = $qrCodeData;
            } else {
                $this->logger->error('Failed to get QR code data for user.');
            }
        } else {
            $this->logger->error('No authenticated user found.');
        }
    }

    public function setResult(?bool $result): void
    {
        $this->result = $result;
    }

    public function getGlobals(): array
    {
        return [
            'qrCodeUri' => $this->qrCodeUri,
            'secret' => $this->secret,
            'user' => $this->security->getUser(),
            'result' => $this->result,
        ];
    }
}