<?php

namespace App\Repository;

use App\Entity\Couter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Couter|null find($id, $lockMode = null, $lockVersion = null)
 * @method Couter|null findOneBy(array $criteria, array $orderBy = null)
 * @method Couter[]    findAll()
 * @method Couter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Couter::class);
    }

    // /**
    //  * @return Couter[] Returns an array of Couter objects
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
    public function findOneBySomeField($value): ?Couter
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
