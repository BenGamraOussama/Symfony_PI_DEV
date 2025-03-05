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




    public function advancedSearch(?string $title, ?string $content, ?string $categoryName): array
    {
        // Build a QueryBuilder for the Article entity
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.category', 'c')
            ->addSelect('c');

        // If 'title' is provided, add a LIKE condition
        if ($title) {
            $qb->andWhere('a.title LIKE :title')
               ->setParameter('title', '%'.$title.'%');
        }

        // If 'content' is provided, add a LIKE condition
        if ($content) {
            $qb->andWhere('a.content LIKE :content')
               ->setParameter('content', '%'.$content.'%');
        }

        // If 'categoryName' is provided, match category name
        if ($categoryName) {
            $qb->andWhere('c.name LIKE :catName')
               ->setParameter('catName', '%'.$categoryName.'%');
        }

        return $qb->getQuery()->getResult();
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
