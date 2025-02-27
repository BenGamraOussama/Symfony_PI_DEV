<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Exercice;
use App\Entity\Activite; 
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/reponse')]
class ReponseController extends AbstractController
{
    #[Route('/response/exercise/{id}/new', name: 'app_reponse_new', methods: ['POST'])]
    public function new(
        Request $request, 
        Exercice $exercice, 
        EntityManagerInterface $entityManager,
        Security $security
    ): Response {
        $activite = $exercice->getActivite();
        $user = $security->getUser();
        
        if (!$user || !$user->getPatient()) {
            $this->addFlash('error', 'Patient profile not found');
            return $this->redirectToRoute('app_home');
        }
    
        $patient = $user->getPatient();
    
        // Check for existing response
        $existingResponse = $entityManager->getRepository(Reponse::class)
            ->findOneBy(['exercice' => $exercice, 'patient' => $patient]);
    
        if ($existingResponse) {
            $this->addFlash('error', 'You have already submitted a response for this exercise');
            return $this->redirectToRoute('app_activite_show', [
                'id' => $activite->getId()
            ]);
        }
    
        // Get user input
        $userResponse = $request->request->get('reponse');
    
        // Bad words list
        $badWords = ['badword1', 'badword2', 'badword3']; // Add more words if needed
    
        // Check if the response contains bad words
        foreach ($badWords as $badWord) {
            if (stripos($userResponse, $badWord) !== false) {
                $this->addFlash('error', 'Your response contains inappropriate words and cannot be submitted.');
                return $this->redirectToRoute('app_activite_show', [
                    'id' => $activite->getId()
                ]);
            }
        }
    
        // Create and persist response
        $reponse = new Reponse();
        $reponse->setContenu($userResponse);
        $reponse->setExercice($exercice);
        $reponse->setPatient($patient);
        $reponse->setDateCreation(new \DateTime());
    
        // Update activity status
        if ($activite->getStatus() !== Activite::STATUS_COMPLETED) {
            $activite->setStatus(Activite::STATUS_COMPLETED);
            $entityManager->persist($activite);
        }
    
        $entityManager->persist($reponse);
        $entityManager->flush();
    
        $this->addFlash('success', 'Response submitted successfully! Activity marked as completed.');
        return $this->redirectToRoute('app_activite_show', [
            'id' => $activite->getId()
        ]);
    }
    #[Route('/{id}/delete', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete_response', $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
            $this->addFlash('success', 'Response deleted successfully!');
        }

        return $this->redirectToRoute('app_activite_show', [
            'id' => $reponse->getExercice()->getActivite()->getId()
        ]);
    }
}