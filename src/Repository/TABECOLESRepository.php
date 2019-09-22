<?php

namespace App\Repository;

use App\Entity\TABECOLES;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TABECOLES|null find($id, $lockMode = null, $lockVersion = null)
 * @method TABECOLES|null findOneBy(array $criteria, array $orderBy = null)
 * @method TABECOLES[]    findAll()
 * @method TABECOLES[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TABECOLESRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TABECOLES::class);
    }

    // /**
    //  * @return TABECOLES[] Returns an array of TABECOLES objects
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
    public function findOneBySomeField($value): ?TABECOLES
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
