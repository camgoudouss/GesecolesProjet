<?php

namespace App\Repository;

use App\Entity\Tabusermodule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Tabusermodule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tabusermodule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tabusermodule[]    findAll()
 * @method Tabusermodule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabusermoduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tabusermodule::class);
    }

    // /**
    //  * @return Tabusermodule[] Returns an array of Tabusermodule objects
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
    public function findOneBySomeField($value): ?Tabusermodule
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
