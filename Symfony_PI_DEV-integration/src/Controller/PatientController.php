<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Entity\Produit;
use App\Form\RatingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/patient')]
final class PatientController extends AbstractController
{
    // Affichage de tous les produits avec pagination et filtre par prix
    #[Route('/produit_patient', name: 'produit_index_patient', methods: ['GET'])]
    #[IsGranted('PUBLIC_ACCESS')]
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {
        // Récupérer les valeurs de prix depuis la requête GET
        $prixMin = $request->query->get('prix_min');
        $prixMax = $request->query->get('prix_max');

        // Requête de base pour récupérer les produits avec des filtres sur les prix
        $queryBuilder = $entityManager->getRepository(Produit::class)->createQueryBuilder('p');

        if ($prixMin) {
            $queryBuilder->andWhere('p.prix >= :prixMin')->setParameter('prixMin', $prixMin);
        }

        if ($prixMax) {
            $queryBuilder->andWhere('p.prix <= :prixMax')->setParameter('prixMax', $prixMax);
        }

        $query = $queryBuilder->getQuery();

        // Pagination
        $pagination = $paginator->paginate($query, $request->query->getInt('page', 1), 2);
        $produits = $pagination->getItems();

        return $this->render('produit/index_patient.html.twig', [
            'pagination' => $pagination,
            'produits' => $produits,
            'prixMin' => $prixMin,
            'prixMax' => $prixMax,
        ]);
    }

    // Affichage d'un produit spécifique avec un formulaire de notation
    #[Route('/produit/{id}', name: 'produit_show_patient')]
    public function showProduit(Produit $produit, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Création du formulaire de notation
        $rating = new Rating(); // Créer une instance de l'entité Rating
        $form = $this->createForm(RatingType::class, $rating); // Créer le formulaire avec RatingType
        $form->handleRequest($request); // Gérer la soumission du formulaire

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Lier l'évaluation au produit
            $rating->setProduit($produit);
            $entityManager->persist($rating); // Persister l'évaluation
            $entityManager->flush(); // Sauvegarder dans la base de données

            // Calcul de la moyenne des notes du produit
            $ratings = $entityManager->getRepository(Rating::class)->findBy(['produit' => $produit]);
            $totalRating = 0;
            $ratingCount = count($ratings);

            // Si le produit a des évaluations
            if ($ratingCount > 0) {
                foreach ($ratings as $r) {
                    $totalRating += $r->getNote(); // Ajoute la note à la somme
                }
                $averageRating = $totalRating / $ratingCount; // Calcul de la moyenne
            } else {
                $averageRating = 0; // Aucun rating, donc moyenne = 0
            }

            // Mettre à jour la note moyenne du produit
            $produit->setAverageRating($averageRating); // Utilisation du setter
            $entityManager->persist($produit);
            $entityManager->flush();

            // Rediriger après la soumission du formulaire
            return $this->redirectToRoute('produit_show_patient', ['id' => $produit->getId()]);
        }

        // Renvoyer la vue avec les variables 'produit' et 'form'
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(), // Passer le formulaire à la vue
        ]);
    }

    #[Route('/produits/recherche', name: 'produit_recherche')]


    public function search(Request $request, EntityManagerInterface $entityManager, ProduitRepository $produitRepository): Response
    {
        // Récupère la query du formulaire de recherche
        $query = $request->query->get('query');

        dump($query); // Affiche la valeur de la recherche dans la barre de débogage pour vérifier

        if (!$query) {
            $produits = []; // Si aucune recherche, pas de produits à afficher
        } else {
            // Si une recherche a été effectuée, on utilise le repository pour récupérer les produits correspondants
            $produits = $produitRepository->findBySearchQuery($query);
        }

        // On renvoie la réponse avec les produits dans la vue
        return $this->render('produit/index_user.html.twig', [
            'produits' => $produits,
        ]);
    }

}
