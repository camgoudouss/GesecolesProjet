<?php

namespace App\Repository;

use App\Entity\Fparamappli;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Fparamappli|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fparamappli|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fparamappli[]    findAll()
 * @method Fparamappli[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FparamappliRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fparamappli::class);
    }

    // /**
    //  * @return Fparamappli[] Returns an array of Fparamappli objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fparamappli
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
