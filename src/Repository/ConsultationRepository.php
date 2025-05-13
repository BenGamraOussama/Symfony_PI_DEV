<?php

namespace App\Repository;

use App\Entity\Consultation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ConsultationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Consultation::class);
    }

 
   
    //    /**
    //     * @return Consultation[] Returns an array of Consultation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Consultation
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function findWithPatient(int $id): ?Consultation
    {
    return $this->createQueryBuilder('c')
    ->leftJoin('c.patient', 'p')
    ->addSelect('p')
    ->where('c.id = :id')
    ->setParameter('id', $id)
    ->getQuery()
    ->getOneOrNullResult();
    }


    public function findAllWithPsychiatre(): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.psychiatre', 'p')
            ->addSelect('p')
            ->getQuery()
            ->getResult();
    }
    
}
