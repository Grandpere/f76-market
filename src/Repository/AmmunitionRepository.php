<?php

namespace App\Repository;

use App\Entity\Ammunition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ammunition|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ammunition|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ammunition[]    findAll()
 * @method Ammunition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AmmunitionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ammunition::class);
    }

    // /**
    //  * @return Ammunition[] Returns an array of Ammunition objects
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
    public function findOneBySomeField($value): ?Ammunition
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
