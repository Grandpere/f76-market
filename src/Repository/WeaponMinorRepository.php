<?php

namespace App\Repository;

use App\Entity\WeaponMinor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WeaponMinor|null find($id, $lockMode = null, $lockVersion = null)
 * @method WeaponMinor|null findOneBy(array $criteria, array $orderBy = null)
 * @method WeaponMinor[]    findAll()
 * @method WeaponMinor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeaponMinorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WeaponMinor::class);
    }

    // /**
    //  * @return WeaponMinor[] Returns an array of WeaponMinor objects
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
    public function findOneBySomeField($value): ?WeaponMinor
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
