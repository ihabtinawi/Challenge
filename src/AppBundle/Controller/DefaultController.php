<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Answer;
use AppBundle\Entity\Question;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function newAction(Request $request)
    {
        /**
         * @var EntityManager $entityManager
         */
        $entityManager = $this->getDoctrine()->getManager();
        // creates a task and gives it some dummy data for this example
        $questionsRepository = $this->getDoctrine()
            ->getRepository(Question::class);

        $questions = $questionsRepository->findMiniAnswers();
        if (empty($questions)) {
            return $this->render('empty.html.twig');
        }
        
        $answer = new Answer();

        $form = $this->createFormBuilder($answer)
            ->add('question', EntityType::class, array(
                'class' => 'AppBundle:Question',
                'choices' => $questions,
                'preferred_choices' => $pickedQuestion = [$questions[array_rand($questions)]],
            ))
            ->add('answer', TextType::class, array(
                'label' => 'Please give an answer here: ',
                'required' => true,
                'attr' => ['class' => 'input-styling'],
            ))
            ->add('mood', IntegerType::class, array(
                'label' => 'Describe your mood from 1 to 100: ',
                'required' => true,
                'attr' => ['class' => 'input-styling'],
            ))
            ->add('save', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData();
            $answer->setCreatedAt(new \DateTime('now'));

            $entityManager->persist($answer);
            $entityManager->flush();

            $relatedQuestion = $questionsRepository->find($answer->getQuestion()->getId());
            $relatedQuestion->addAnswers($answer);

            $entityManager->persist($relatedQuestion);
            $entityManager->flush();

            return $this->redirectToRoute('show_answers', ['id' => $answer->getQuestion()->getId()]);
        }

        return $this->render('question.html.twig', [
            'form' => $form->createView(),
            'question' => $pickedQuestion[0]
        ]);
    }

    /**
     * @Route("/show_answers/{id}", name="show_answers")
     */
    public function showAnswers($id)
    {

        $question = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findOneBy(['id' => $id])
        ;

        $answers = $this->getDoctrine()
            ->getRepository(Answer::class)
            ->findBy(['question' => $id])
        ;
        return $this->render('answers.html.twig', [
            'question' => $question,
            'answers' => $answers
        ]);
    }

    /**
     * @Route("/statistics", name="statistics")
     */
    public function getStatistics()
    {
        $statisticsService = $this->container->get('app.statistics.week');
        $statistics = $statisticsService->getMoodAverage();
        return $this->render('statistics.html.twig', [
            'statistics' => $statistics
        ]);
    }
}
