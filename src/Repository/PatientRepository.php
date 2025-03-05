<?php

namespace App\Repository;

use App\Entity\Patient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Patient>
 */
class PatientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Patient::class);
    }
    public function findBySearchQuery(string $query)
    {
        return $this->createQueryBuilder('p')
            ->where('p.nom LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Patient[] Returns an array of Patient objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Patient
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function countMalePatients(): int
    {
        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->Where('u.gener = :gener')
            ->setParameter('gener', 'male')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countFemalePatients(): int
    {
        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->Where('u.gener = :gener')
            ->setParameter('gener', 'female')
            ->getQuery()
            ->getSingleScalarResult();
    }
}
