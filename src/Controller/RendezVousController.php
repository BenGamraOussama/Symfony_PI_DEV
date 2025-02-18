<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\RDVRepository;

final class RendezVousController extends AbstractController
{
    #[Route('/rendezVous', name: 'app_rendez__vous_admin')]
    public function index(RDVRepository $rdvRepository): Response
    {
        return $this->render('rendez_vous/index.html.twig', [
            'controller_name' => 'RendezVousController',
            'rdvs' => $rdvRepository->findAll(),

        ]);
    }

  
}
