<?php

namespace App\Controller;

class ChineController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        return $this->twig->render('chine/chine.html.twig');
    }
}
