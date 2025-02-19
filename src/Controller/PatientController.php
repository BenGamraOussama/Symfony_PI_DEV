<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;

final class PatientController extends AbstractController
{


    #[Route('/patient', name: 'produit_index_patient', methods: ['GET'])]
    public function indexproduit(EntityManagerInterface $entityManager): Response
    {
        $produits = $entityManager->getRepository(Produit::class)->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/produit/{id}', name: 'produit_show_patient', methods: ['GET'])]
    public function showProduit(EntityManagerInterface $em, $id): Response
    {
        $produit = $em->getRepository(Produit::class)->find($id);

        if (!$produit) {
            throw $this->createNotFoundException('Produit introuvable');
        }

        return $this->render('produit/show_patient.html.twig', [
            'produit' => $produit,
        ]);
    }
}