<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('questions/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug)
    {
        $answers = [
            '1',
            '2',
            '3',
        ];

        dump($slug, $this);

        return $this->render('questions/show.html.twig', [
            'question' => ucwords(str_replace('-',' ',$slug)),
            'answers' => $answers
        ]);
    }

}