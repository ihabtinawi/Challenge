<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnswerRepository")
 */
class Answer
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
     * @ORM\Column(name="answer", type="string", length=255)
     */
    private $answer;

    /**
     * @var \DateTime
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Question", inversedBy="answers")
     */
    private $question;

    /**
     * @var int
     *
     * @ORM\Column(name="mood", type="integer")
     * @Assert\Range(
     *      min = 1,
     *      max = 100,
     *      minMessage = "You must be at least {{ limit }}  to enter",
     *      maxMessage = "You cannot set more than {{ limit }} to enter"
     * )
     */
    private $mood = 1;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $answer
     *
     * @return Answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return Question
     */
    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    /**
     * @param Question $question
     * @return Answer
     */
    public function setQuestion(Question $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * @return int
     */
    public function getMood(): ?int
    {
        return $this->mood;
    }

    /**
     * @param int $mood
     */
    public function setMood(int $mood): void
    {
        $this->mood = $mood;
    }
}
