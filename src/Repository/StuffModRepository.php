<?php

namespace App\Repository;

use App\Entity\StuffMod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StuffMod|null find($id, $lockMode = null, $lockVersion = null)
 * @method StuffMod|null findOneBy(array $criteria, array $orderBy = null)
 * @method StuffMod[]    findAll()
 * @method StuffMod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StuffModRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StuffMod::class);
    }

    // /**
    //  * @return Mod[] Returns an array of Mod objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mod
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
