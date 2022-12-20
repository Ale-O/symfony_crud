<?php

namespace App\Repository;

use App\Entity\Element;
use App\Entity\Subelement;
use App\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class SubelementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subelement::class);
    }

    public function findLatest(int $page = 1, Element $element): Paginator
    {
        $qb = $this->createQueryBuilder('p')
            ->where('p.element = :element')
            ->orderBy('p.publishedAt', 'DESC')
            ->setParameter('element', $element)
        ;

        return (new Paginator($qb))->paginate($page);
    }
}
