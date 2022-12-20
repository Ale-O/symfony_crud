<?php

namespace App\Repository;

use App\Entity\DateFields;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DateFields|null find($id, $lockMode = null, $lockVersion = null)
 * @method DateFields|null findOneBy(array $criteria, array $orderBy = null)
 * @method DateFields[]    findAll()
 * @method DateFields[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DateFieldsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DateFields::class);
    }

    // /**
    //  * @return DateFields[] Returns an array of DateFields objects
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
    public function findOneBySomeField($value): ?DateFields
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
