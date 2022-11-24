<?php

namespace App\Controller;

class QuizController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        return $this->twig->render('Home/quiz.html.twig');
    }
}
