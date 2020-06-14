<?php

namespace App\Repository;

use App\Entity\Misc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Misc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Misc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Misc[]    findAll()
 * @method Misc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MiscRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Misc::class);
    }

    // /**
    //  * @return Misc[] Returns an array of Misc objects
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
    public function findOneBySomeField($value): ?Misc
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
