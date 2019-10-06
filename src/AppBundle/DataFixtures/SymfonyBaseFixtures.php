<?php


namespace AppBundle\DataFixtures;

use AppBundle\Entity\Answer;
use AppBundle\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SymfonyBaseFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i< 101; $i++) {
            $question = new Question();
            $question->setQuestion('question no.' . $i);
            $manager->persist($question);
            $numberOfAnswers =  rand(0, 15);
            for ($j = 0; $j < $numberOfAnswers; $j++) {
                $answer = new Answer();
                $answer->setQuestion($question);
                $answer->setAnswer('Answer no '. $j .' for question ' . $question->getQuestion());
                $answer->setCreatedAt(new \DateTime('now'.'-1 year'.'+'.$j.'day'));
                $answer->setMood(rand(0, 100));
                $manager->persist($answer);
            }
        }
        $manager->flush();
    }
}
