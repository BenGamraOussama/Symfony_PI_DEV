<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\RDVRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\RDV;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

final class RendezVousController extends AbstractController
{
    #[Route('/rendezVous', name: 'app_rendez__vous_admin')]
    public function index(RDVRepository $rdvRepository, EntityManagerInterface $entityManager,Request $request): Response
    {

        $rdvs = $entityManager
            ->getRepository(RDV::class)
            ->findAll();

        $user = $this->getUser();

        $page = $request->query->getInt('page', 1);
        $limit = 3; // Number of products per page
        $total = count($rdvs);
        $rdvs = array_slice($rdvs, ($page - 1) * $limit, $limit);

        return $this->render('rendez_vous/index_psychiatre.html.twig', [
            'controller_name' => 'RendezVousController',
            'rdvs' => $rdvs,
            'user' => $user,
            'current_page' => $page,
            'total_pages' => ceil($total / $limit),
        ]);
    }
    
    #[Route('/rdv/accept/{id}', name: 'app_rdv_accept', methods: ['POST'])]
    public function accept(RDV $rdv, EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer): Response
    {
        // Validate CSRF token
        if ($this->isCsrfTokenValid('accept' . $rdv->getId(), $request->request->get('_token'))) {
            // Update RDV priority to "Accepted"
            $rdv->setPriorite('Accepted');
            $entityManager->flush();
            
            $patient = $rdv->getPatient(); // Assuming RDV entity has a getPatient() method
            
            $email = (new Email())
            ->from('novateeam@gmail.com')
            ->to($patient->getEmail())
            ->subject('RDV Accepted')
            ->html($this->renderView(
                'emails/accept.html.twig',
                [
                    'email' => $patient->getEmail(),
                ]
            ));

        $mailer->send($email);

        // Add a flash message
        $this->addFlash('success', 'RDV accepted successfully and email sent.');
  
    }
     

        return $this->redirectToRoute('app_rendez__vous_admin');
        
    }

    #[Route('/rdv/cancel/{id}', name: 'app_rdv_cancel', methods: ['POST'])]
    public function cancel(RDV $rdv, EntityManagerInterface $entityManager, Request $request): Response
    {
        // Validate CSRF token
        if ($this->isCsrfTokenValid('cancel' . $rdv->getId(), $request->request->get('_token'))) {
            // Update RDV priority to "Canceled"
            $rdv->setPriorite('Canceled');
            $entityManager->flush();

            // Add a flash message
            $this->addFlash('success', 'RDV canceled successfully.');
        }

        return $this->redirectToRoute('app_rendez__vous_admin');
    }
   
}
