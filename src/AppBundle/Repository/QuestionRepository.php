<?php

namespace AppBundle\Repository;

/**
 * QuestionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuestionRepository extends \Doctrine\ORM\EntityRepository
{
    public function findMiniAnswers()
    {
        $qb = $this->createQueryBuilder('q')
            ->leftJoin('q.answers', 'a')
            ->select('COUNT(a.id) as answers_count')
            ->groupBy('q.id')
            ->getQuery();

        $result = $qb->getResult();
        $returnedResult = [];
        if (!empty($result)) {
            $minResult = min($result);
            $returnedResult = $this->getTheLessAnswers($minResult['answers_count']);
        }
        return $returnedResult;
    }

    public function getTheLessAnswers($minResult)
    {
        return $this->createQueryBuilder('q')
            ->leftJoin('q.answers', 'a')
            ->having('count(a.id) = :minResult')
            ->groupBy('q.id')
            ->setParameter('minResult', $minResult)
            ->andWhere('a.createdAt < :beforeoneyear OR a.createdAt IS NULL')
            ->setParameter('beforeoneyear', (new \DateTime())->modify('-1 year'))
            ->getQuery()
            ->getResult()
        ;
    }
}
