<?php

namespace App\Repository;

use App\Entity\VacanceFermeture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VacanceFermeture|null find($id, $lockMode = null, $lockVersion = null)
 * @method VacanceFermeture|null findOneBy(array $criteria, array $orderBy = null)
 * @method VacanceFermeture[]    findAll()
 * @method VacanceFermeture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VacanceFermetureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VacanceFermeture::class);
    }

    // /**
    //  * @return VacanceFermeture[] Returns an array of VacanceFermeture objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VacanceFermeture
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
