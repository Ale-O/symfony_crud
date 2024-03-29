<?php

namespace App\Repository;

use App\Entity\NumberFields;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NumberFields|null find($id, $lockMode = null, $lockVersion = null)
 * @method NumberFields|null findOneBy(array $criteria, array $orderBy = null)
 * @method NumberFields[]    findAll()
 * @method NumberFields[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NumberFieldsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NumberFields::class);
    }

    // /**
    //  * @return NumberFields[] Returns an array of NumberFields objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NumberFields
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
