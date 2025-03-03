<?php
namespace App\Controller;

use App\Entity\Consultation;
use App\Service\GoogleMeetService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ConsultationController extends AbstractController
{
    #[Route("/consultation/google_meet/{id}", name: "app_consultation_google_meet", methods: ["GET"])]
    public function createGoogleMeet(int $id, Consultation $consultation, GoogleMeetService $googleMeetService, \Doctrine\Persistence\ManagerRegistry $doctrine): JsonResponse
    {
        $consultation = $doctrine->getRepository(Consultation::class)->find($id);
    
        if (!$consultation) {
            return $this->json(['error' => 'Consultation not found'], 404);
        }
    
       
        // Create the Google Meet event
        $meetLink = $googleMeetService->createGoogleMeetEvent(
            (new \DateTime($consultation->getDate()->format('Y-m-d')))->setTime(0, 0, 0)->format('Y-m-d\TH:i:s'),
            (new \DateTime($consultation->getDate()->format('Y-m-d')))->setTime(0, 0, 0)->modify('+1 hour')->format('Y-m-d\TH:i:s'),
            'Consultation Médicale',
            'Lien de la consultation Google Meet',
            ['patient@example.com']
        );

        return $this->json(['status' => 'Event created', 'meet_link' => $meetLink]);
    }

    #[Route("/oauth2callback", name: "oauth2callback")]
    public function oauth2callback(GoogleMeetService $googleMeetService): JsonResponse
    {
        // Handle the OAuth callback
        $code = $_GET['code'] ?? null;
        if ($code) {
            $googleMeetService->handleOAuthCallback($code);
            return $this->json(['status' => 'OAuth callback handled', 'redirect_route' => 'app_consultation_google_meet', 'id' => 1]);
        }

        return $this->json(['error' => 'No code provided'], 400);
    }

}
