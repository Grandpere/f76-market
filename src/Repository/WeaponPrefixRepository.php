<?php

namespace App\Repository;

use App\Entity\WeaponPrefix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WeaponPrefix|null find($id, $lockMode = null, $lockVersion = null)
 * @method WeaponPrefix|null findOneBy(array $criteria, array $orderBy = null)
 * @method WeaponPrefix[]    findAll()
 * @method WeaponPrefix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeaponPrefixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WeaponPrefix::class);
    }

    // /**
    //  * @return WeaponPrefix[] Returns an array of WeaponPrefix objects
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
    public function findOneBySomeField($value): ?WeaponPrefix
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
