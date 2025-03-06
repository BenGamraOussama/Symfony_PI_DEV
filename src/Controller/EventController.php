<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Event;

class EventController extends AbstractController
{
    #[Route('/event/add', name: 'app_event_add', methods: ['POST'])]
    public function addEvent(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $event = new Event();
        $event->setTitle($data['title']);
        $event->setDate(new \DateTime($data['date']));

        $entityManager->persist($event);
        $entityManager->flush();

        return new JsonResponse(['status' => 'success', 'id' => $event->getId()]);
    }
}

