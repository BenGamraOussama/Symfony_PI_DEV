<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Service\DeepSeekMotivationalMessageService;
use App\Form\FournisseurType;
use App\Repository\FournisseurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository;
use App\Entity\User;

#[Route('/fournisseur')]
final class FournisseurController extends AbstractController
{
    private $motivationalMessageService;

    public function __construct(DeepSeekMotivationalMessageService $motivationalMessageService)
    {
        $this->motivationalMessageService = $motivationalMessageService;
    }

    #[Route(name: 'app_fournisseur')]
    public function index(UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('fournisseur/index.html.twig', [
            'controller_name' => 'FournisseurController',
            'user' => $user,
            'message' => $message,
        ]);
    }
    
    #[Route('/{id}', name: 'app_fournisseur_show', methods: ['GET'])]
    public function show(Fournisseur $fournisseur, int $id): Response
    {
        $user = $this->getUser();
        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('fournisseur/show.html.twig', [
            'fournisseur' => $fournisseur,
            'user' => $user,
            'id' => $id,
            'message' => $message,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fournisseur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Fournisseur $fournisseur, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(FournisseurType::class, $fournisseur, [
            'is_edit' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_fournisseur_show', ['id' => $fournisseur->getId()], Response::HTTP_SEE_OTHER);
        }

        $message = $this->motivationalMessageService->getMotivationalMessage();
        return $this->render('fournisseur/edit.html.twig', [
            'fournisseur' => $fournisseur,
            'form' => $form,
            'user' => $user,
            'message' => $message,
        ]);
    }

    #[Route('/{id}', name: 'app_fournisseur_delete', methods: ['POST'])]
    public function delete(Request $request, Fournisseur $fournisseur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fournisseur->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($fournisseur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }
}
