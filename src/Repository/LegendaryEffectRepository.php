<?php

namespace App\Repository;

use App\Entity\LegendaryEffect;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LegendaryEffect|null find($id, $lockMode = null, $lockVersion = null)
 * @method LegendaryEffect|null findOneBy(array $criteria, array $orderBy = null)
 * @method LegendaryEffect[]    findAll()
 * @method LegendaryEffect[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegendaryEffectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegendaryEffect::class);
    }

    // /**
    //  * @return LegendaryEffect[] Returns an array of LegendaryEffect objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LegendaryEffect
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * return LegendaryEffect[] filter by category (PREFIX, MAJOR, MINOR) & type (WEAPON, ARMOR)
     * examples : all prefix legendary for weapon / all major legendary for armor / etc...
     * @param $category
     * @param $type
     * @return mixed
     */
    public function findAllByCategoryAndType($category, $type)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.category = :category')
            ->andWhere('l.type = :type')
            ->setParameter('category', $category)
            ->setParameter('type', $type)
            ->getQuery()
            ->getResult()
        ;
    }
}
