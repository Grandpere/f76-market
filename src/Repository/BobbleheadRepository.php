<?php

namespace App\Repository;

use App\Entity\Bobblehead;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bobblehead|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bobblehead|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bobblehead[]    findAll()
 * @method Bobblehead[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BobbleheadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bobblehead::class);
    }

    // /**
    //  * @return Bobblehead[] Returns an array of Bobblehead objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bobblehead
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
