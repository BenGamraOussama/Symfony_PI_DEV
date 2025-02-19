<?php

namespace App\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class PatientController extends AbstractController
{
    // Affichage de tous les produits dans l'interface utilisateur
    #[Route('/patient', name: 'produit_index_patient', methods: ['GET'])]
    public function indexPatient(EntityManagerInterface $entityManager): Response
    {
        // Récupération de tous les produits de la base de données
        $produits = $entityManager->getRepository(Produit::class)->findAll();

        // Retourner la vue avec les produits
        return $this->render('produit/index_patient.html.twig', [
            'produits' => $produits,
        ]);
    }

    // API pour récupérer la liste des produits en format JSON
    #[Route('/api/produits', name: 'api_produits', methods: ['GET'])]
    public function getProduit(EntityManagerInterface $entityManager): JsonResponse
    {
        // Récupérer tous les produits depuis la base de données
        $produits = $entityManager->getRepository(Produit::class)->findAll();

        // Convertir les produits en tableau pour les renvoyer en JSON
        $produitsArray = [];
        foreach ($produits as $produit) {
            $produitsArray[] = [
                'id' => $produit->getId(),
                'nom' => $produit->getNom(),
                'description' => $produit->getDescription(),
                'prix' => $produit->getPrix(),
                'image' => $produit->getImage(),
            ];
        }

        // Retourner les produits sous forme de réponse JSON
        return new JsonResponse(['produits' => $produitsArray]);
    }

    // Affichage d'un produit spécifique
    #[Route('/produit/{id<\d+>}', name: 'produit_show_patient', methods: ['GET'])]
    public function showProduit(EntityManagerInterface $entityManager, int $id): Response
    {
        // Vérifier que l'ID est valide avant de tenter de récupérer le produit
        if (!is_numeric($id)) {
            throw $this->createNotFoundException('ID invalide');
        }

        // Récupérer un produit spécifique par son ID
        $produit = $entityManager->getRepository(Produit::class)->find($id);

        // Vérifier si le produit existe, sinon afficher une erreur
        if (!$produit) {
            throw $this->createNotFoundException('Produit introuvable');
        }

        // Retourner la vue pour afficher les détails du produit
        return $this->render('produit/show_patient.html.twig', [
            'produit' => $produit,
        ]);
    }
}
