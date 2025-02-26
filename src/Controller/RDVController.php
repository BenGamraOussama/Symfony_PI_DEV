<?php

namespace App\Controller;

use App\Entity\RDV;
use App\Form\RDVType;
use App\Repository\RDVRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/rdv')]
final class RDVController extends AbstractController
{
    #[Route(name: 'app_rdv_index', methods: ['GET', 'POST'])]
    public function index(RDVRepository $rdvRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();
        $rdv = new RDV();
        $form = $this->createForm(RDVType::class, $rdv);
        $form->handleRequest($request);
        // Set the patient if the user is logged in and is a Patient
        if ($user instanceof Patient) {
            $rdv->setPatient($user);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($rdv);
            $entityManager->flush();

            return $this->redirectToRoute('app_rdv_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rdv/index.html.twig', [
            'rdvs' => $rdvRepository->findAll(),
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }


    #[Route('/new', name: 'app_rdv_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $rdv = new RDV();
        $form = $this->createForm(RDVType::class, $rdv);
        $form->handleRequest($request);
        // Set the patient if the user is logged in and is a Patient
        if ($user instanceof Patient) {
            $rdv->setPatient($user);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($rdv);
            $entityManager->flush();

            return $this->redirectToRoute('app_rdv_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rdv/new.html.twig', [
            'rdv' => $rdv,
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/{id}', name: 'app_rdv_show', methods: ['GET'])]
    public function show(RDV $rdv): Response
    {
        $user = $this->getUser();
        return $this->render('rdv/show.html.twig', [
            'rdv' => $rdv,
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_rdv_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, RDV $rdv, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(RDVType::class, $rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_rdv_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rdv/edit.html.twig', [
            'rdv' => $rdv,
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/{id}', name: 'app_rdv_delete', methods: ['POST'])]
    public function delete(Request $request, RDV $rdv, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rdv->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($rdv);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_rendez__vous_admin', [], Response::HTTP_SEE_OTHER);
    }
}
