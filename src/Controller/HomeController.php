<?php

namespace App\Controller;

use App\Service\DeepSeekMotivationalMessageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    private $motivationalMessageService;

    public function __construct(DeepSeekMotivationalMessageService $motivationalMessageService)
    {
        $this->motivationalMessageService = $motivationalMessageService;
    }
    
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('home/index.html.twig',[
            'message' => $message,
        ]);
    }
}
