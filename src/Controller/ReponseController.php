<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Exercice;
use App\Entity\Activite;
use App\Entity\Patient;
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

        // Check if the user is a Patient
        if (!$user || !($user instanceof Patient)) {
            $this->addFlash('error', 'Patient profile not found');
            return $this->redirectToRoute('app_home');
        }

        /** @var Patient $patient */
        $patient = $user;

        // Check if response already exists
        $existingResponse = $entityManager->getRepository(Reponse::class)
            ->findOneBy(['exercice' => $exercice, 'patient' => $patient]);

        if ($existingResponse) {
            $this->addFlash('error', 'You have already submitted a response for this exercise.');
            return $this->redirectToRoute('app_activite_show', [
                'id' => $activite->getId()
            ]);
        }

        // Get user response
        $userResponse = $request->request->get('reponse');

        // List of bad words
        $badWords = ['badword1', 'badword2', 'badword3']; // Add your words

        // Check for bad words
        foreach ($badWords as $badWord) {
            if (stripos($userResponse, $badWord) !== false) {
                $currentAttempts = $patient->getBadWordAttempts() + 1;
                $patient->setBadWordAttempts($currentAttempts);
        
                if ($currentAttempts >= 3) {
                    // Suspend account for 24 hours
                    $patient->setSuspendedUntil(new \DateTime('+24 hours'));
                    $patient->setBadWordAttempts(0);
                    
                    $entityManager->persist($patient);  // Ensure the updated patient is persisted
                    $entityManager->flush();
                    
                    $this->addFlash('error', 'Votre compte a été suspendu pendant 24 heures en raison de réponses inappropriées répétées.');
                    return $this->redirectToRoute('app_home');
                }
        
                // Persist the updated attempts if below the suspension threshold
                $entityManager->persist($patient);  // Persist the patient entity to store the updated attempts
                $entityManager->flush();
                
                $this->addFlash('error', "Réponse inappropriée détectée ! Tentative $currentAttempts/3.");
                return $this->redirectToRoute('app_activite_show', [
                    'id' => $activite->getId()
                ]);
            }
        }

        // Reset bad word attempts if response is clean
        $patient->setBadWordAttempts(0);

        // Save response
        $reponse = new Reponse();
        $reponse->setContenu($userResponse);
        $reponse->setExercice($exercice);
        $reponse->setPatient($patient);
        $reponse->setDateCreation(new \DateTime());

        // Mark activity as completed
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
}
