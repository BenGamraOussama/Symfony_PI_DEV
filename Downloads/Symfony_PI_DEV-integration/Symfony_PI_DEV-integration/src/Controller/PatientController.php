<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Patient;
use App\Entity\Produit;
use App\Repository\PatientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/patient')]
final class PatientController extends AbstractController
{
    // Affichage de tous les produits dans l'interface utilisateur avec pagination et filtre par prix
    #[Route('/produit_patient', name: 'produit_index_patient', methods: ['GET'])]
    #[IsGranted('PUBLIC_ACCESS')]
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {
        // Récupérer les valeurs de prix minimum et maximum depuis la requête GET
        $prixMin = $request->query->get('prix_min');
        $prixMax = $request->query->get('prix_max');

        // Créer la requête de base pour les produits
        $queryBuilder = $entityManager->getRepository(Produit::class)->createQueryBuilder('p');

        // Appliquer les filtres si les valeurs sont présentes
        if ($prixMin) {
            $queryBuilder->andWhere('p.prix >= :prixMin')
                ->setParameter('prixMin', $prixMin);
        }

        if ($prixMax) {
            $queryBuilder->andWhere('p.prix <= :prixMax')
                ->setParameter('prixMax', $prixMax);
        }

        // Récupérer les produits filtrés avec pagination
        $query = $queryBuilder->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // Page actuelle
            2 // Nombre d'éléments par page
        );

        // Assurez-vous que la variable 'produits' est définie ici
        $produits = $pagination->getItems(); // Récupérer les produits de la pagination

        // Renvoyer la vue avec les variables correctes
        return $this->render('produit/index_patient.html.twig', [
            'pagination' => $pagination,
            'produits' => $produits, // Passer la variable 'produits' dans la vue
            'prixMin' => $prixMin, // Passer la valeur du filtre prix min
            'prixMax' => $prixMax, // Passer la valeur du filtre prix max
        ]);
    }

    // Affichage d'un produit spécifique
    #[Route('/produit/{id}', name: 'produit_show_patient')]
    public function showProduit(Produit $produit): Response
    {
        // Retourne la vue avec le produit récupéré
        return $this->render('produit/show.html.twig', [
            'produit' => $produit, // Envoie l'objet produit à la vue
        ]);
    }
    #[Route('/recherche', name: 'produit_recherche')]
    public function recherche(Request $request, EntityManagerInterface $em): Response
    {
        // Récupérer le terme de recherche
        $nomRecherche = $request->query->get('nom');

        // Créer une requête pour chercher des produits dont le nom contient le terme de recherche
        $produits = $em->getRepository(Produit::class)->createQueryBuilder('p')
            ->where('p.nom LIKE :nom')
            ->setParameter('nom', '%'.$nomRecherche.'%')
            ->getQuery()
            ->getResult();

        // Retourner la vue avec les produits trouvés
        return $this->render('produit/recherche.html.twig', [
            'produits' => $produits,
            'nomRecherche' => $nomRecherche,
        ]);
    }

}
