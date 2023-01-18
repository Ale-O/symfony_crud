<?php

namespace App\Repository;

use App\Entity\Element;
use App\Entity\Subelement;
use App\Entity\Tag;
use App\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Persistence\ManagerRegistry;

class SubelementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subelement::class);
    }

    public function findLatest(int $page = 1, Element $element, Tag $tag = null): Paginator
    {
        $qb = $this->createQueryBuilder('p')
            ->where('p.element = :element')
            ->leftJoin('p.tags', 't')
            ->orderBy('p.publishedAt', 'DESC')
            ->setParameter('element', $element)
        ;

        if (null !== $tag) {
            $qb->andWhere(':tag MEMBER OF p.tags')
                ->setParameter('tag', $tag);
        }

        return (new Paginator($qb))->paginate($page);
    }

    public function findByTagsAndElement(int $page = 1, Element $element, Collection $tags = null, Tag $tag = null): Paginator
    {
        $qb = $this->createQueryBuilder('p')
            ->where('p.element = :element')
            ->leftJoin('p.tags', 't')
            ->orderBy('p.publishedAt', 'DESC')
            ->setParameter('element', $element)
        ;

        if (null !== $tags && null !== $tag) {
            $qb->andWhere(':tags MEMBER OF p.tags OR :tag MEMBER OF p.tags')
                ->setParameter('tags', $tags)
                ->setParameter('tag', $tag);
        } elseif (null !== $tags && null === $tag) {
            $qb->andWhere(':tags MEMBER OF p.tags')
                ->setParameter('tags', $tags);
        } elseif (null === $tags && null !== $tag) {
            $qb->andWhere(':tag MEMBER OF p.tags')
                ->setParameter('tag', $tag);
        }

        return (new Paginator($qb))->paginate($page);
    }

    // Project : display all elements who contains visibles subelements
    public function findByTags(int $page = 1, Collection $tags = null, Tag $tag = null): ArrayCollection
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.tags', 't')
            ->orderBy('p.publishedAt', 'DESC')
        ;

        if (null !== $tags && null !== $tag) {
            $qb->andWhere(':tags MEMBER OF p.tags OR :tag MEMBER OF p.tags')
                ->setParameter('tags', $tags)
                ->setParameter('tag', $tag);
        } elseif (null !== $tags && null === $tag) {
            $qb->andWhere(':tags MEMBER OF p.tags')
                ->setParameter('tags', $tags);
        } elseif (null === $tags && null !== $tag) {
            $qb->andWhere(':tag MEMBER OF p.tags')
                ->setParameter('tag', $tag);
        }

        return new ArrayCollection($qb->getQuery()->getResult());
    }
}
