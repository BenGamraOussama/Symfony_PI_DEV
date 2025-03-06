<?php

namespace App\Controller;

use App\Entity\Psychiatre;
use App\Form\PsychiatreType;
use App\Repository\PsychiatreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository;
use App\Entity\User;

#[Route('/psychiatre')]
final class PsychiatreController extends AbstractController{
    #[Route(name: 'app_psychiatre')]
    public function index(UserRepository $userRepository): Response
    {
        
        $user = $this->getUser();
        return $this->render('psychiatre/index.html.twig', [
            'controller_name' => 'PsychiatreController',
            'user' => $user,
            
        ]);
    }

    #[Route('/{id}', name: 'app_psychiatre_show', methods: ['GET'])]
    #[Route('/list', name: 'app_psychiatre_list', methods: ['GET'])]
    public function show(Psychiatre $psychiatre): Response
    {
        $user = $this->getUser();
        return $this->render('psychiatre/show.html.twig', [
            'psychiatre' => $psychiatre,
            'user' => $user,
        ]);
    }

    #[Route('/list', name: 'app_psychiatre_list', methods: ['GET'])]
    public function list(PsychiatreRepository $psychiatreRepository): Response
    {
        $psychiatres = $psychiatreRepository->findAllPsychiatres();
        return $this->render('psychiatre/list.html.twig', [
            'psychiatres' => $psychiatres,
        ]);
    }
    #[Route('/{id}/edit', name: 'app_psychiatre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Psychiatre $psychiatre, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(PsychiatreType::class, $psychiatre, [
            'is_edit' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_psychiatre_show', ['id' => $psychiatre->getId()], Response::HTTP_SEE_OTHER);
        }
        return $this->render('psychiatre/edit.html.twig', [
            'user' => $user,
            'psychiatre' => $psychiatre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_psychiatre_delete', methods: ['POST'])]
    public function delete(Request $request, Psychiatre $psychiatre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$psychiatre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($psychiatre);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }
    
}
