<?php

namespace App\Repository;

use App\Entity\Supplements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Supplements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Supplements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Supplements[]    findAll()
 * @method Supplements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SupplementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Supplements::class);
    }

    // /**
    //  * @return Supplements[] Returns an array of Supplements objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Supplements
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
