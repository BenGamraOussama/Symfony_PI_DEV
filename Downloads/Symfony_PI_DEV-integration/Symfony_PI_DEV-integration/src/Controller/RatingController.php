<?php

// src/Controller/RatingController.php
namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Rating;
use App\Form\RatingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RatingController extends AbstractController
{
    #[Route('/produit/{id}/rate', name: 'produit_rate')]
    public function rate(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $rating = new Rating();
        $rating->setProduit($produit);

        $form = $this->createForm(RatingType::class, $rating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($rating);
            $entityManager->flush();

            // Calculer la nouvelle moyenne
            $totalNotes = array_sum(array_map(fn($r) => $r->getNote(), $produit->getRatings()->toArray()));
            $moyenne = $totalNotes / count($produit->getRatings());
            $produit->setRating($moyenne);

            $entityManager->flush();

            return $this->redirectToRoute('produit_show_patient', ['id' => $produit->getId()]);
        }

        return $this->render('rating/rate.html.twig', [
            'form' => $form->createView(),
            'produit' => $produit,
        ]);
    }
}

