<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Panier;
use App\Entity\Produit;
use App\Entity\Patient;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/ajouter-panier/{id}', name: 'ajouter_panier')]
    public function ajouterPanier(Produit $produit, Request $request, EntityManagerInterface $em): Response
    {
        dump('Route appelée'); // Vérifie si la méthode est appelée

        // Récupérer l'utilisateur connecté
        $utilisateur = $this->getUser();
        dump($utilisateur); // Vérifie si l'utilisateur est bien connecté et de type Patient

        // Vérifier si l'utilisateur est un Patient
        if (!$utilisateur instanceof Patient) {
            throw new \LogicException('Seuls les patients peuvent ajouter des produits au panier.');
        }

        // Récupérer la quantité demandée depuis le formulaire
        $quantiteDemandee = (int) $request->request->get('quantite');
        dump($quantiteDemandee); // Vérifie si la quantité est bien reçue

        // Vérifier que la quantité demandée est valide
        if ($quantiteDemandee <= 0) {
            $this->addFlash('error', 'Veuillez entrer une quantité valide.');
            return $this->redirectToRoute('produit_index_patient');
        }

        // Vérifier que la quantité demandée est disponible
        if ($produit->getQuantite() < $quantiteDemandee) {
            $this->addFlash('error', 'Stock insuffisant ! Il ne reste que ' . $produit->getQuantite() . ' unités.');
            return $this->redirectToRoute('produit_index_patient');
        }

        // Vérifier si le produit est déjà dans le panier du patient
        $panierRepository = $em->getRepository(Panier::class);
        $panierExistant = $panierRepository->findOneBy([
            'utilisateur' => $utilisateur,
            'produit' => $produit
        ]);

        if ($panierExistant) {
            // Si le produit est déjà dans le panier, on met à jour la quantité
            $nouvelleQuantite = $panierExistant->getQuantite() + $quantiteDemandee;
            if ($produit->getQuantite() < $nouvelleQuantite) {
                $this->addFlash('error', 'Stock insuffisant pour cette quantité.');
                return $this->redirectToRoute('produit_index_patient');
            }
            $panierExistant->setQuantite($nouvelleQuantite);
        } else {
            // Sinon, on crée une nouvelle entrée dans le panier
            $panier = new Panier();
            $panier->setUtilisateur($utilisateur);
            $panier->setProduit($produit);
            $panier->setQuantite($quantiteDemandee);

            $em->persist($panier);
        }

        // Enregistrer en base de données
        $em->flush();

        // Ajouter un message flash
        $this->addFlash('success', 'Le produit a été ajouté à votre panier.');

        // Rediriger vers la page des produits
        return $this->redirectToRoute('produit_index_patient');
    }






    // Route pour afficher le panier de l'utilisateur

    #[Route('/panier', name: 'app_panier')]
    public function show(\App\Repository\PanierRepository $panierRepository): Response
    {
        // Récupérer l'utilisateur connecté
        $utilisateur = $this->getUser();

        if (!$utilisateur instanceof Patient) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer les éléments du panier de l'utilisateur
        $panierItems = $panierRepository->findBy(['utilisateur' => $utilisateur]);

        // Calcul du total sans remise
        $total = array_reduce($panierItems, function ($carry, $item) {
            return $carry + ($item->getProduit()->getPrix() * $item->getQuantite());
        }, 0);

        // Appliquer la remise de 10% si le total dépasse 100 DT
        $remise = 0;
        if ($total >= 100) {
            $remise = $total * 0.10; // 10% de remise
            $total -= $remise; // Appliquer la remise
        }

        return $this->render('panier/show.html.twig', [
            'panierItems' => $panierItems,
            'total' => $total,
            'remise' => $remise, // Passer la remise à la vue
        ]);
    }

    // Route pour supprimer un produit du panier
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

        // Ajouter un message flash de succès
        $this->addFlash('success', 'Le produit a été supprimé de votre panier.');

        // Redirection vers le panier
        return $this->redirectToRoute('app_panier');
    }

    // Route pour modifier la quantité d'un produit dans le panier
    #[Route('/modifier-quantite/{id}', name: 'modifier_quantite_panier', methods: ['POST'])]
    public function modifierQuantite(Panier $panier, Request $request, EntityManagerInterface $em): Response
    {
        // Récupérer la nouvelle quantité
        $nouvelleQuantite = (int) $request->request->get('quantite');

        // Vérifier si la quantité est valide
        if ($nouvelleQuantite <= 0) {
            $this->addFlash('error', 'Quantité invalide.');
            return $this->redirectToRoute('app_panier');
        }

        // Vérifier la disponibilité du stock
        $produit = $panier->getProduit();
        if ($produit->getQuantite() < $nouvelleQuantite) {
            $this->addFlash('error', 'Stock insuffisant.');
            return $this->redirectToRoute('app_panier');
        }

        // Mettre à jour la quantité dans le panier et recalculer le total
        $panier->setQuantite($nouvelleQuantite);
        $panier->setTotal($nouvelleQuantite * $produit->getPrix()); // Mise à jour du total

        $em->flush();

        // Ajouter un message flash de succès
        $this->addFlash('success', 'Quantité mise à jour.');

        // Redirection vers le panier
        return $this->redirectToRoute('app_panier');
    }
}
