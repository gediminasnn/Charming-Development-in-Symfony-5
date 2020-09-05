<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Test');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            '1',
            '2',
            '3',
        ];

        return $this->render('questions/show.html.twig', [
            'question' => ucwords(str_replace('-',' ',$slug)),
            'answers' => $answers
        ]);
    }

}