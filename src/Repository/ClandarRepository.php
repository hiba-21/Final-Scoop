<?php

namespace App\Repository;

use App\Entity\Clandar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Clandar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clandar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clandar[]    findAll()
 * @method Clandar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClandarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clandar::class);
    }

    // /**
    //  * @return Clandar[] Returns an array of Clandar objects
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
    public function findOneBySomeField($value): ?Clandar
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
