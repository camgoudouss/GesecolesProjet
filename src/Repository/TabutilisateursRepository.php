<?php

namespace App\Repository;

use App\Entity\Tabutilisateurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Tabutilisateurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tabutilisateurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tabutilisateurs[]    findAll()
 * @method Tabutilisateurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabutilisateursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tabutilisateurs::class);
    }

    // /**
    //  * @return Tabutilisateurs[] Returns an array of Tabutilisateurs objects
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
    public function findOneBySomeField($value): ?Tabutilisateurs
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
