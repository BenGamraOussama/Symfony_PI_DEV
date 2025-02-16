<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProfileController extends AbstractController{
    #[Route('/pro', name: 'app_profile**')]
    public function index(): Response
    {
        $user = $this->getUser();

        // Vérifier si l'utilisateur est connecté
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }
        return $this->render('patient/show.html.twig', [
            'controller_name' => 'ProfileController',
            'user' => $user,
        ]);
    }
}
