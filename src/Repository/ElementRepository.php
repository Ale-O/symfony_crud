<?php

namespace App\Repository;

use App\Entity\Element;
use App\Entity\Tag;
use App\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Persistence\ManagerRegistry;
use function Symfony\Component\String\u;

class ElementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Element::class);
    }

    public function findLatest(int $page = 1, Tag $tag = null): Paginator
    {
        $qb = $this->createQueryBuilder('p')
            ->addSelect('a', 't')
            ->innerJoin('p.author', 'a')
            ->leftJoin('p.tags', 't')
            ->where('p.publishedAt <= :now')
            ->orderBy('p.publishedAt', 'DESC')
            ->setParameter('now', new \DateTime())
        ;

        if (null !== $tag) {
            $qb->andWhere(':tag MEMBER OF p.tags')
                ->setParameter('tag', $tag);
        }

        return (new Paginator($qb))->paginate($page);
    }

    public function findByTags(int $page = 1, Collection $tags = null, Tag $tag = null): Paginator
    {
        $qb = $this->createQueryBuilder('p')
            ->addSelect('a', 't')
            ->innerJoin('p.author', 'a')
            ->leftJoin('p.tags', 't')
            ->where('p.publishedAt <= :now')
            ->orderBy('p.publishedAt', 'DESC')
            ->setParameter('now', new \DateTime())
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
    public function findByTagsAndSubelements(int $page = 1, Collection $subelements = null, Collection $tags = null, Tag $tag = null): Paginator
    {
        $qb = $this->createQueryBuilder('p')
            ->addSelect('a', 't', 's')
            ->innerJoin('p.author', 'a')
            ->leftJoin('p.tags', 't')
            ->leftJoin('p.subelements', 's')
            ->where('p.publishedAt <= :now')
            ->orderBy('p.publishedAt', 'DESC')
            ->setParameter('now', new \DateTime())
        ;

        if (null !== $subelements && null !== $tags && null !== $tag) {
            $qb->andWhere(':subelements MEMBER OF p.subelements OR :tags MEMBER OF p.tags OR :tag MEMBER OF p.tags')
                ->setParameter('subelements', $subelements)
                ->setParameter('tags', $tags)
                ->setParameter('tag', $tag);
        } elseif (null !== $subelements && null !== $tags && null === $tag) {
            $qb->andWhere(':subelements MEMBER OF p.subelements OR :tags MEMBER OF p.tags')
                ->setParameter('subelements', $subelements)
                ->setParameter('tags', $tags);
        } elseif (null !== $subelements && null === $tags && null !== $tag) {
            $qb->andWhere(':subelements MEMBER OF p.subelements OR :tag MEMBER OF p.tags')
                ->setParameter('subelements', $subelements)
                ->setParameter('tag', $tag);
        } elseif (null === $subelements && null !== $tags && null !== $tag) {
            $qb->andWhere(':tags MEMBER OF p.tags OR :tag MEMBER OF p.tags')
                ->setParameter('tags', $tags)
                ->setParameter('tag', $tag);
        } elseif (null === $subelements && null !== $tags && null === $tag) {
            $qb->andWhere(':tags MEMBER OF p.tags')
                ->setParameter('tags', $tags);
        } elseif (null === $subelements && null === $tags && null !== $tag) {
            $qb->andWhere(':tag MEMBER OF p.tags')
                ->setParameter('tag', $tag);
        } elseif (null !== $subelements && null === $tags && null === $tag) {
            $qb->andWhere(':subelements MEMBER OF p.subelements')
                ->setParameter('subelements', $subelements);
        }

        return (new Paginator($qb))->paginate($page);
    }

    /**
     * @return Element[]
     */
    public function findBySearchQuery(string $query, int $limit = Paginator::PAGE_SIZE): array
    {
        $searchTerms = $this->extractSearchTerms($query);

        if (0 === \count($searchTerms)) {
            return [];
        }

        $queryBuilder = $this->createQueryBuilder('p');

        foreach ($searchTerms as $key => $term) {
            $queryBuilder
                ->orWhere('p.title LIKE :t_'.$key)
                ->setParameter('t_'.$key, '%'.$term.'%')
            ;
        }

        return $queryBuilder
            ->orderBy('p.publishedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    private function extractSearchTerms(string $searchQuery): array
    {
        $searchQuery = u($searchQuery)->replaceMatches('/[[:space:]]+/', ' ')->trim();
        $terms = array_unique($searchQuery->split(' '));

        return array_filter($terms, function ($term) {
            return 2 <= $term->length();
        });
    }
}
