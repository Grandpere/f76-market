<?php

namespace App\Repository;

use App\Entity\WeaponMajor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WeaponMajor|null find($id, $lockMode = null, $lockVersion = null)
 * @method WeaponMajor|null findOneBy(array $criteria, array $orderBy = null)
 * @method WeaponMajor[]    findAll()
 * @method WeaponMajor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeaponMajorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WeaponMajor::class);
    }

    // /**
    //  * @return WeaponMajor[] Returns an array of WeaponMajor objects
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
    public function findOneBySomeField($value): ?WeaponMajor
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
