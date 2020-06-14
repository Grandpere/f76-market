<?php

namespace App\Repository;

use App\Entity\Chem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chem|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chem|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chem[]    findAll()
 * @method Chem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chem::class);
    }

    // /**
    //  * @return Chem[] Returns an array of Chem objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Chem
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
