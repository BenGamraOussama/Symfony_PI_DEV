<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    // Ajoute ici tes méthodes personnalisées de requêtes si nécessaire.

// src/Repository/ProduitRepository.php

public function findBySearchQuery($query)
{
    $qb = $this->createQueryBuilder('p')
        ->where('p.nom LIKE :query OR p.description LIKE :query')
        ->setParameter('query', '%' . $query . '%');

    return $qb->getQuery()->getResult();
}
}
