<?php

namespace App\Controller;

use App\Entity\Activite;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/patient/activities')]
class PatientActivityController extends AbstractController
{
    #[Route('/', name: 'patient_activity_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $activities = $em->getRepository(Activite::class)
            ->findAll();

        return $this->render('patient/activities.html.twig', [
            'patientActivities' => $activities,
            'user' => $user
        ]);
    }

    #[Route('/update-status', name: 'patient_update_activity_status', methods: ['POST'])]
    public function updateStatus(
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $activity = $em->getRepository(Activite::class)->find($request->request->get('activity_id'));

        if ($activity) {
            $activity->setStatus($request->request->get('status'));
            $em->flush();
        }

        return new Response(null, 204);
    }
}