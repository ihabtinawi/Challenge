<?php


namespace AppBundle\Services;

use AppBundle\Entity\Answer;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

class StatisticsService
{
    /**
     * StatisticsService constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->repository = $em->getRepository(Answer::class);
    }

    /**
     * @return array
     */
    public function getMoodAverage()
    {
        $moodAverage = [];
        for ($weekday=1; $weekday <8; $weekday++) {
            $moodSum = 0;
            $statistics = $this->repository->findDayOfTheWeek($weekday);

            foreach ($statistics as $statistic) {
                $moodSum += $statistic->getMood();
            }
            $moodAverage[$weekday] = round($moodSum/count($statistics));
        }
        return $moodAverage;
    }
}
