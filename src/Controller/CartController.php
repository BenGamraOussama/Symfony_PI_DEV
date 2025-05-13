<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Repository\ProduitRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
    
    
        $commande = new Commande();
        $commande->setDateCommande(new \DateTime());
    
        // Initialiser le montant total
        $total = 0;
    
        foreach ($cart as $id => $quantity) {
            $produit = $produitRepository->find($id);
    
            if (!$produit) {
                continue; // Sauter les produits qui n'existent plus
            }
    
            $subtotal = floatval($produit->getPrix()) * $quantity;
            $total += $subtotal;
    
            // Création de la ligne de commande
            $ligneCommande = new LigneCommande();
            $ligneCommande->setCommande($commande);
            $ligneCommande->setProduit($produit);
            $ligneCommande->setQuantite($quantity);
            $ligneCommande->setPrixUnitaire(floatval($produit->getPrix()));
    
            $entityManager->persist($ligneCommande);
        }
    

        
        // Mettre à jour le montant total de la commande
        $commande->setMontantTotal($total);
        $commande->setUser($this->getUser());
    
        $entityManager->persist($commande);
        $entityManager->flush();
    
        // Vider le panier après validation
        $session->remove('cart');
    
        $this->addFlash('success', 'Commande validée avec succès.');
    
        return $this->redirectToRoute('produit_index_patient'); // Redirection vers la page des commandes
    }
    


    #[Route('/cart/add/{id}', name: 'cart_add')]
    public function addToCart(Request $request, int $id): Response
    {
        $session = $request->getSession();
        $cart = $session->get('cart', []); // Récupérer le panier ou initialiser un tableau vide

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
    $total = 0; // Initialize the total

    foreach ($cart as $id => $quantity) {
        $produit = $produitRepository->find($id);
        if ($produit) {
            $subtotal = $produit->getPrix() * $quantity;
            $total += $subtotal; // Add to the total

            $cartData[] = [
                'produit' => $produit,
                'quantity' => $quantity,
                'subtotal' => $subtotal,
            ];
        }
    }

    return $this->render('cart/show.html.twig', [
        'cart' => $cartData,
        'total' => $total, // Pass the total to the template

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
 #[Route('/cart/confirmation', name: 'cart_confirmation')]
public function confirmation(Request $request, ProduitRepository $produitRepository): Response
{
    $session = $request->getSession();
    $cart = $session->get('cart', []);

    $cartData = [];
    $total = 0;

    foreach ($cart as $id => $quantity) {
        $produit = $produitRepository->find($id);
        if ($produit) {
            $subtotal = $produit->getPrix() * $quantity;
            $total += $subtotal;

            $cartData[] = [
                'produit' => $produit,
                'quantity' => $quantity,
            ];
        }
    }

    return $this->render('cart/confirmation.html.twig', [
        'cart' => $cartData,
        'total' => $total,
    ]);
}
#[Route('/cart/increase/{id}', name: 'cart_increase', methods: ['POST'])]
public function increaseQuantity(Request $request, ProduitRepository $produitRepository, int $id): JsonResponse
{
    $session = $request->getSession();
    $cart = $session->get('cart', []);
    $produit = $produitRepository->find($id);

    if (!$produit) {
        return $this->json(['success' => false, 'error' => 'Produit non trouvé'], 404);
    }

    if (isset($cart[$id])) {
        $cart[$id]++;
    } else {
        $cart[$id] = 1;
    }

    $session->set('cart', $cart);

    // Calculer le sous-total et le total général
    $subtotal = $produit->getPrix() * $cart[$id];
    $total = $this->calculateTotal($session, $produitRepository);

    return $this->json([
        'success' => true,
        'quantity' => $cart[$id],
        'subtotal' => $subtotal,
        'total' => $total,
    ]);
}



private function calculateTotal($session, ProduitRepository $produitRepository): float
{
    $cart = $session->get('cart', []);
    $total = 0;

    foreach ($cart as $id => $quantity) {
        $medicament = $produitRepository->find($id);
        if ($medicament) {
            $total += $medicament->getPrix() * $quantity;
        }
    }

    return $total;
}

#[Route('/cart/decrease/{id}', name: 'cart_decrease')]
public function decreaseQuantity(Request $request, ProduitRepository $produitRepository, int $id): Response
{
    $session = $request->getSession();
    $cart = $session->get('cart', []);

    if (isset($cart[$id])) {
        if ($cart[$id] > 1) {
            $cart[$id]--;
        } else {
            unset($cart[$id]); // Remove item if quantity is 1
        }
        $session->set('cart', $cart);
    }

    $medicament = $produitRepository->find($id);
    $newSubtotal = isset($cart[$id]) ? $cart[$id] * $medicament->getPrix() : 0;

    return $this->json([
        'success' => true,
        'quantity' => $cart[$id] ?? 0,
        'subtotal' => $newSubtotal,
        'total' => $this->calculateTotal($session, $produitRepository),
    ]);
}
 

}
