<?php

namespace App\Controller;

class QuizController extends AbstractController
{
    /**
     * Display home page
     */
    public function index()
    {

        $result = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];


            if ($q1 == '1' && $q2 == '1' && $q3 == '1') {
                $result = "Norvège";
            } elseif ($q1 == '1' && $q2 == '1' && $q3 == '2') {
                $result = "Suède";
            } elseif ($q1 == '1' && $q2 == '1' && $q3 == '3') {
                $result = "Finlande";
            } elseif ($q1 == '1' && $q2 == '2' && $q3 == '1') {
                $result = "Russie";
            } elseif ($q1 == '1' && $q2 == '2' && $q3 == '2') {
                $result = "Suède";
            } elseif ($q1 == '1' && $q2 == '2' && $q3 == '3') {
                $result = "Finlande";
            } elseif ($q1 == '1' && $q2 == '3' && $q3 == '1') {
                $result = "Népal";
            } elseif ($q1 == '1' && $q2 == '3' && $q3 == '2') {
                $result = "Népal";
            } elseif ($q1 == '1' && $q2 == '3' && $q3 == '3') {
                $result = "Canada";
            } elseif ($q1 == '2' && $q2 == '1' && $q3 == '1') {
                $result = "Allemagne";
            } elseif ($q1 == '2' && $q2 == '1' && $q3 == '2') {
                $result = "Italie";
            } elseif ($q1 == '2' && $q2 == '1' && $q3 == '3') {
                $result = "Espagne";
            } elseif ($q1 == '2' && $q2 == '2' && $q3 == '1') {
                $result = "Hongrie";
            } elseif ($q1 == '2' && $q2 == '2' && $q3 == '2') {
                $result = "Maroc";
            } elseif ($q1 == '2' && $q2 == '2' && $q3 == '3') {
                $result = "Espagne";
            } elseif ($q1 == '2' && $q2 == '3' && $q3 == '1') {
                $result = "Japon";
            } elseif ($q1 == '2' && $q2 == '3' && $q3 == '2') {
                $result = "Japon";
            } elseif ($q1 == '2' && $q2 == '3' && $q3 == '3') {
                $result = "Australie";
            } elseif ($q1 == '3' && $q2 == '1' && $q3 == '1') {
                $result = "Espagne";
            } elseif ($q1 == '3' && $q2 == '1' && $q3 == '2') {
                $result = "Maroc";
            } elseif ($q1 == '3' && $q2 == '1' && $q3 == '3') {
                $result = "Portugal";
            } elseif ($q1 == '3' && $q2 == '2' && $q3 == '1') {
                $result = "Turquie";
            } elseif ($q1 == '3' && $q2 == '2' && $q3 == '2') {
                $result = "Maroc";
            } elseif ($q1 == '3' && $q2 == '2' && $q3 == '3') {
                $result = "Grèce";
            } elseif ($q1 == '3' && $q2 == '3' && $q3 == '1') {
                $result = "Pérou";
            } elseif ($q1 == '3' && $q2 == '3' && $q3 == '2') {
                $result = "Thailande";
            } elseif ($q1 == '3' && $q2 == '3' && $q3 == '3') {
                $result = "Indonésie";
            }
        }
        return $this->twig->render('Home/quiz.html.twig', [
            'result' => $result
        ]);
    }
}




/* Hiver, voisin, culture = Norvège
Hiver, voisin, cuisine = Suède
Hiver, voisin, extérieur = Finlande (Laponie)

Hiver, assez proche, culture = Russie
Hiver, assez proche, cuisine = Suède
Hiver, assez proche, farniente = Finlande

Hiver, loin, culture = Népal
Hiver, loin, cuisine = Népal
Hiver, loin, extérieur = Canada

Tempéré, voisin, culture = Allemagne
Tempéré, voisin, cuisine = Italie
Tempéré, voisin, extérieur = Espagne

Tempéré, assez proche, culture = Hongrie
Tempéré, assez proche, cuisine = Maroc
Tempéré, assez proche, farniente = Espagne

Tempéré, loin, culture = Japon
Tempéré, loin, cuisine = Japon
Tempéré, loin, extérieur = Australie

Chaud, voisin, culture = Espagne
Chaud, voisin, cuisine = Maroc
Chaud, voisin, extérieur = Portugal

Chaud, assez proche, culture = Turquie
Chaud, assez proche, cuisine = Maroc
Chaud, assez proche, farniente = Grèce

Chaud, loin, culture = Vietnam
Chaud, loin, cuisine = Thailande
Chaud, loin, extérieur = Indonésie */
