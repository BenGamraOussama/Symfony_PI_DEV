<?php
namespace App\Controller;

use App\Service\GoogleService;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;
use Google_Service_Calendar_EventDateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RDVRepository;

class GoogleAuthController extends AbstractController
{
    

    

        #[Route('/calendar', name: 'app_calendar')]
public function index(RDVRepository $rendezVousRepository): Response
{
    $user = $this->getUser();
    $rendezVous = $rendezVousRepository->findAll();

    // Debugging: Vérifier les données
    foreach ($rendezVous as $rdv) {
        dump($rdv->getPatient()); // Vérifier si le patient est bien récupéré
    }

    return $this->render('google_auth/index.html.twig', [
        'rdvs' => $rendezVous,
        'user' => $user,
    ]);
}

        
    }
