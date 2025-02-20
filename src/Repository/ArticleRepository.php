<?php

namespace App\Repository;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    // /**
    //  * Find articles by a specific category.
    //  *
    //  * @param Category $category The category entity
    //  * @return Article[] Returns an array of Article objects
    //  */
    // public function findByCategory(Category $category): array
    // {
    //     return $this->createQueryBuilder('a')
    //         ->andWhere('a.category = :category')
    //         ->setParameter('category', $category)
    //         ->orderBy('a.id', 'ASC')
    //         ->getQuery()
    //         ->getResult();
    // }
    
//    public function findOneBySomeField($value): ?Article
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
