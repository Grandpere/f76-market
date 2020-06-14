<?php

namespace App\Repository;

use App\Entity\Outfit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Outfit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Outfit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Outfit[]    findAll()
 * @method Outfit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OutfitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Outfit::class);
    }

    // /**
    //  * @return Outfit[] Returns an array of Outfit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Outfit
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
