<?php

namespace App\Controller;

use App\Entity\Traitement;
use App\Entity\Consultation;
use App\Form\TraitementType;
use App\Repository\TraitementRepository;
use App\Repository\ConsultationRepository; // Corrected namespace
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TraitementController extends AbstractController
{
    private ConsultationRepository $consultationRepository;

    public function __construct(ConsultationRepository $consultationRepository)
    {
        $this->consultationRepository = $consultationRepository;
    }

    #[Route('/traitement', name: 'app_traitement_indexx')]
    public function indexx(): Response
    {
        $consultations = $this->consultationRepository->findAll();

        return $this->render('traitement/index.html.twig', [
            'consultations' => $consultations,
        ]);
    }

    #[Route('/consultation/{consultation_id}/traitement', name: 'app_traitement_index')]
    public function index(TraitementRepository $traitementRepository, int $consultation_id): Response
    {
        $user = $this->getUser();
        $consultation = $this->consultationRepository->find($consultation_id);
        if (!$consultation) {
            throw $this->createNotFoundException("Consultation introuvable.");
        }

        return $this->render('traitement/index.html.twig', [
            'consultation' => $consultation,
            'traitements' => $traitementRepository->findBy(['consultation' => $consultation]),
            'user' => $user,
        ]);
    }

    #[Route('/consultation/{consultation_id}/traitement/new', name: 'app_traitement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $consultation_id): Response
    {
        $user = $this->getUser();
        $consultation = $entityManager->getRepository(Consultation::class)->find($consultation_id);
        
        if (!$consultation) {
            throw $this->createNotFoundException("Consultation avec l'ID $consultation_id non trouvée.");
        }

        $traitement = new Traitement();
        $traitement->setConsultation($consultation);

        $form = $this->createForm(TraitementType::class, $traitement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($traitement);
            $entityManager->flush();

            return $this->redirectToRoute('app_consultation_index', ['consultation_id' => $consultation_id]);
        }

        return $this->render('traitement/new.html.twig', [
            'traitement' => $traitement,
            'form' => $form,
            'consultation' => $consultation,
            'user' => $user,
        ]);
    }

    #[Route('/consultation/{consultation_id}/traitement/{id}', name: 'app_traitement_show', methods: ['GET'])]
    public function show(int $consultation_id, Traitement $traitement, EntityManagerInterface $entityManager): Response
    {
        $consultation = $entityManager->getRepository(Consultation::class)->find($consultation_id);
        if (!$consultation) {
            throw $this->createNotFoundException("Consultation avec l'ID $consultation_id non trouvée.");
        }

        return $this->render('traitement/show.html.twig', [
            'traitement' => $traitement,
            'consultation' => $consultation,
        ]);
    }

    #[Route('/consultation/{consultation_id}/traitement/{id}/edit', name: 'app_traitement_edit')]
    public function edit(Request $request, int $consultation_id, Traitement $traitement, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $consultation = $this->consultationRepository->find($consultation_id);
        if (!$consultation) {
            throw $this->createNotFoundException("Consultation introuvable.");
        }

        $form = $this->createForm(TraitementType::class, $traitement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_traitement_index', ['consultation_id' => $consultation_id]);
        }

        return $this->render('traitement/edit.html.twig', [
            'traitement' => $traitement,
            'form' => $form->createView(),
            'consultation' => $consultation,
            'user' => $user,
        ]);
    }

    #[Route('/consultation/{consultation_id}/traitement/{id}/delete', name: 'app_traitement_delete', methods: ['POST'])]
    public function delete(Request $request, int $consultation_id, Traitement $traitement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$traitement->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($traitement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_traitement_index', ['consultation_id' => $consultation_id]);
    }
}
