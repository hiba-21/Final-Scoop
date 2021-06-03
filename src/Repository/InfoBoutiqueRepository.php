<?php

namespace App\Repository;

use App\Entity\InfoBoutique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InfoBoutique|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfoBoutique|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfoBoutique[]    findAll()
 * @method InfoBoutique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoBoutiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfoBoutique::class);
    }

    // /**
    //  * @return InfoBoutique[] Returns an array of InfoBoutique objects
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
    public function findOneBySomeField($value): ?InfoBoutique
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
