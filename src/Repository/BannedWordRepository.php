<?php

namespace App\Repository;

use App\Entity\BannedWord;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class BannedWordRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BannedWord::class);
    }

    public function findAllWords(): array
    {
        return $this->createQueryBuilder('b')
            ->select('b.word')
            ->getQuery()
            ->getSingleColumnResult();
    }
}