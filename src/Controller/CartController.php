<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Repository\ProduitRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CartController extends AbstractController
{

    #[Route('/cart/valider', name: 'valider_commande', methods: ['GET'])]
    public function valider(
        Request $request, 
        EntityManagerInterface $entityManager, 
        ProduitRepository $produitRepository
    ): Response {
        $session = $request->getSession();
        $cart = $session->get('cart', []);
    
        if (empty($cart)) {
            $this->addFlash('warning', 'Votre panier est vide.');
            return $this->redirectToRoute('cart_show');
        }
    
        $commande = new Commande();
        $commande->setDateCommande(new \DateTime());
    
        $total = 0;
    
        foreach ($cart as $id => $quantity) {
            $produit = $produitRepository->find($id);
    
            if (!$produit) {
                continue; // Sauter les produits qui n'existent plus
            }
    
            $subtotal = floatval($produit->getPrix()) * $quantity;
            $total += $subtotal;
    
            $ligneCommande = new LigneCommande();
            $ligneCommande->setCommande($commande);
            $ligneCommande->setProduit($produit);
            $ligneCommande->setQuantite($quantity);
            $ligneCommande->setPrixUnitaire(floatval($produit->getPrix()));
    
            $entityManager->persist($ligneCommande);
        }
    
        $commande->setMontantTotal($total);
        $commande->setUser($this->getUser());
    
        $entityManager->persist($commande);
        $entityManager->flush();
    
        $session->remove('cart');
    
        $this->addFlash('success', 'Commande validée avec succès.');
    
        return $this->redirectToRoute('produit_index_patient'); // Redirection vers la page des commandes
    }
    


    #[Route('/cart/add/{id}', name: 'cart_add')]
    public function addToCart(Request $request, int $id): Response
    {
        $session = $request->getSession();
        $cart = $session->get('cart', []); 
        if (!isset($cart[$id])) {
            $cart[$id] = 1; // Si le produit n'existe pas encore, on l'ajoute avec une quantité de 1
        } else {
            $cart[$id]++; // Sinon, on incrémente la quantité
        }

        $session->set('cart', $cart); // Sauvegarde du panier en session
        $this->addFlash(
           'success',
           'Produit Ajouter avec succées '
        );;
return $this->redirectToRoute('produit_index_patient');    }

    #[Route('/cart', name: 'cart_show')]
    public function showCart(Request $request, ProduitRepository $produitRepository): Response
    {
        $session = $request->getSession();
        $cart = $session->get('cart', []);
    
        $cartData = [];
        foreach ($cart as $id => $quantity) {
            $produit = $produitRepository->find($id);
            if ($produit) {
                $cartData[] = [
                    'produit' => $produit,
                    'quantity' => $quantity
                ];
            }
        }
    
        return $this->render('cart/show.html.twig', [
            'cart' => $cartData
        ]);
    }
    
#[Route('/cart/remove/{id}', name: 'cart_remove')]
public function removeFromCart(Request $request, int $id): Response
{
    $session = $request->getSession();
    $cart = $session->get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]); // Supprime l'article du panier
        $session->set('cart', $cart);
    }

    return $this->redirectToRoute('cart_show');
}
#[Route('/cart/clear', name: 'cart_clear')]
public function clearCart(Request $request): Response
{
    $session = $request->getSession();
    $session->remove('cart'); // Supprime la session du panier

    return $this->redirectToRoute('cart_show');
}
 

 

}
