<?php

namespace App\Repository;

use App\Entity\SubelementFields;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SubelementFields|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubelementFields|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubelementFields[]    findAll()
 * @method SubelementFields[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubelementFieldsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubelementFields::class);
    }

    // /**
    //  * @return SubelementFields[] Returns an array of SubelementFields objects
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
    public function findOneBySomeField($value): ?SubelementFields
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
