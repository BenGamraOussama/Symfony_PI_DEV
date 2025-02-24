<?php
namespace App\Controller;

use App\Service\DeepSeekMotivationalMessageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MotivationController extends AbstractController
{
    private $motivationalMessageService;

    public function __construct(DeepSeekMotivationalMessageService $motivationalMessageService)
    {
        $this->motivationalMessageService = $motivationalMessageService;
    }

    public function showMotivationalMessage(): Response
    {
        $message = $this->motivationalMessageService->getMotivationalMessage();

        return $this->render('home/index.html.twig', [
            'message' => $message,
        ]);
    }
}