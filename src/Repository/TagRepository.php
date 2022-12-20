<?php

namespace App\Repository;

use App\Entity\Tag;
use App\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tag::class);
    }

    public function findOrderByName(int $page = 1): Paginator
    {
        $qb = $this->createQueryBuilder('p')
            ->orderBy('p.name', 'ASC')
        ;

        return (new Paginator($qb))->paginate($page);
    }
}
