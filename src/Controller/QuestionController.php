<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twig, Request $request)
    {
//        Su php bin/console debug:autowiring twig
//        suradome Environment service ir panaudojome

//        $html = $twig->render('questions/homepage.html.twig');
//        sugrazinti tokia pacia reiksme
//        return new Response($html);

//        kaip cia \/
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