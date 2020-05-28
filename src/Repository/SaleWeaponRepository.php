<?php

namespace App\Repository;

use App\Entity\SaleWeapon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SaleWeapon|null find($id, $lockMode = null, $lockVersion = null)
 * @method SaleWeapon|null findOneBy(array $criteria, array $orderBy = null)
 * @method SaleWeapon[]    findAll()
 * @method SaleWeapon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SaleWeaponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SaleWeapon::class);
    }

    // /**
    //  * @return SaleWeapon[] Returns an array of SaleWeapon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SaleWeapon
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
