<?php

namespace App\Repository;

use App\Entity\InterPret;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InterPret|null find($id, $lockMode = null, $lockVersion = null)
 * @method InterPret|null findOneBy(array $criteria, array $orderBy = null)
 * @method InterPret[]    findAll()
 * @method InterPret[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterPretRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InterPret::class);
    }

    // /**
    //  * @return InterPret[] Returns an array of InterPret objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InterPret
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
