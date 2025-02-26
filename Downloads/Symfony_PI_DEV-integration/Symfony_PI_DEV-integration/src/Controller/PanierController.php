<?php

// src/Controller/PanierController.php
namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Produit;
use App\Repository\PanierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/ajouter-panier/{id}', name: 'ajouter_panier')]
    public function ajouterPanier(Produit $produit, EntityManagerInterface $em): Response // Ajout du type de retour
    {
        // Récupérer l'utilisateur connecté
        $utilisateur = $this->getUser();

        // Vérifier si l'utilisateur est connecté
        if (!$utilisateur) {
            return $this->redirectToRoute('app_login'); // Rediriger vers la page de connexion
        }

        // Créer une nouvelle entrée dans le panier
        $panier = new Panier();
        $panier->setUtilisateur($utilisateur);
        $panier->setProduit($produit);
        $panier->setQuantite(1); // Par défaut, ajouter 1 unité

        // Enregistrer en base de données
        $em->persist($panier);
        $em->flush();

        // Ajouter un message flash
        $this->addFlash('success', 'Le produit a été ajouté à votre panier.');

        // Rediriger vers la page du panier ou la page précédente
        return $this->redirectToRoute('produit_index_patient');
    }

    #[Route('/panier', name: 'app_panier')]
    public function show(PanierRepository $panierRepository): Response
    {
        // Récupérer l'utilisateur connecté
        $utilisateur = $this->getUser();

        // Vérifier si l'utilisateur est connecté
        if (!$utilisateur) {
            return $this->redirectToRoute('app_login'); // Rediriger vers la page de connexion
        }

        // Récupérer les éléments du panier de l'utilisateur depuis la base de données
        $panierItems = $panierRepository->findBy(['utilisateur' => $utilisateur]);

        // Calcul du total
        $total = array_reduce($panierItems, function ($carry, $item) {
            return $carry + ($item->getProduit()->getPrix() * $item->getQuantite());
        }, 0);

        // Passer les variables au template
        return $this->render('panier/show.html.twig', [
            'panierItems' => $panierItems,
            'total' => $total,
        ]);
    }

    #[Route('/supprimer-du-panier/{id}', name: 'supprimer_du_panier')]
    public function supprimerDuPanier(Panier $panier, EntityManagerInterface $em): Response
    {
        // Vérifier que l'utilisateur est autorisé à supprimer cet élément
        if ($panier->getUtilisateur() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à supprimer cet élément.');
        }

        // Supprimer l'élément du panier
        $em->remove($panier);
        $em->flush();

        // Ajouter un message flash
        $this->addFlash('success', 'Le produit a été supprimé de votre panier.');

        // Rediriger vers la page du panier
        return $this->redirectToRoute('app_panier');
    }
}