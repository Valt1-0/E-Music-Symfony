<?php

namespace App\Repository;

use App\Entity\ClasseInstrument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClasseInstrument|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClasseInstrument|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClasseInstrument[]    findAll()
 * @method ClasseInstrument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasseInstrumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClasseInstrument::class);
    }

    // /**
    //  * @return ClasseInstrument[] Returns an array of ClasseInstrument objects
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
    public function findOneBySomeField($value): ?ClasseInstrument
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
