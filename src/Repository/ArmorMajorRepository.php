<?php

namespace App\Repository;

use App\Entity\ArmorMajor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArmorMajor|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArmorMajor|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArmorMajor[]    findAll()
 * @method ArmorMajor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArmorMajorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArmorMajor::class);
    }

    // /**
    //  * @return ArmorMajor[] Returns an array of ArmorMajor objects
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
    public function findOneBySomeField($value): ?ArmorMajor
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
