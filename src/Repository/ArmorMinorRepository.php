<?php

namespace App\Repository;

use App\Entity\ArmorMinor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArmorMinor|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArmorMinor|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArmorMinor[]    findAll()
 * @method ArmorMinor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArmorMinorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArmorMinor::class);
    }

    // /**
    //  * @return ArmorMinor[] Returns an array of ArmorMinor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ArmorMinor
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
