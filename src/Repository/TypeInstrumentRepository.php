<?php

namespace App\Repository;

use App\Entity\TypeInstrument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeInstrument|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeInstrument|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeInstrument[]    findAll()
 * @method TypeInstrument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeInstrumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeInstrument::class);
    }

    // /**
    //  * @return TypeInstrument[] Returns an array of TypeInstrument objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeInstrument
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
