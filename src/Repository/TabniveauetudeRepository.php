<?php

namespace App\Repository;

use App\Entity\Tabniveauetude;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Tabniveauetude|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tabniveauetude|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tabniveauetude[]    findAll()
 * @method Tabniveauetude[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabniveauetudeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tabniveauetude::class);
    }

    // /**
    //  * @return Tabniveauetude[] Returns an array of Tabniveauetude objects
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
    public function findOneBySomeField($value): ?Tabniveauetude
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
