<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255, unique=true)
     */
    private $question;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Answer", mappedBy="question")
     */
    private $answers;

    public function __construct()
    {
        $this->answers = new ArrayCollection();
    }


    public function __toString()
    {
        return (string) $this->getQuestion();
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $question
     *
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @return Collection| Answer[]
     */
    public function getAnswers(): Collection
    {
        return $this->answers;
    }

    /**
     * @param Answer $answer
     * @return Question
     */
    public function addAnswers(Answer $answer): self
    {
        if (!$this->answers->contains($answer)) {
            $this->answers[] = $answer;
            $answer->setQuestion($this);
        }

        return $this;
    }
}
