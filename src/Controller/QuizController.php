<?php

namespace App\Controller;

use Symfony\Component\HttpClient\HttpClient;

class QuizController extends AbstractController
{
    public function index()
    {
        session_start();
        $result = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];     
            
            if ($q1 == '1' && $q2 == '1' && $q3 == '1') {
                $result = "Norway";
            } elseif ($q1 == '1' && $q2 == '1' && $q3 == '2') {
                $result = "Sweden";
            } elseif ($q1 == '1' && $q2 == '1' && $q3 == '3') {
                $result = "Finland";
            } elseif ($q1 == '1' && $q2 == '2' && $q3 == '1') {
                $result = "Russia";
            } elseif ($q1 == '1' && $q2 == '2' && $q3 == '2') {
                $result = "Sweden";
            } elseif ($q1 == '1' && $q2 == '2' && $q3 == '3') {
                $result = "Finland";
            } elseif ($q1 == '1' && $q2 == '3' && $q3 == '1') {
                $result = "Nepal";
            } elseif ($q1 == '1' && $q2 == '3' && $q3 == '2') {
                $result = "Nepal";
            } elseif ($q1 == '1' && $q2 == '3' && $q3 == '3') {
                $result = "Canada";
            } elseif ($q1 == '2' && $q2 == '1' && $q3 == '1') {
                $result = "Germany";
            } elseif ($q1 == '2' && $q2 == '1' && $q3 == '2') {
                $result = "Italy";
            } elseif ($q1 == '2' && $q2 == '1' && $q3 == '3') {
                $result = "Spain";
            } elseif ($q1 == '2' && $q2 == '2' && $q3 == '1') {
                $result = "Hungary";
            } elseif ($q1 == '2' && $q2 == '2' && $q3 == '2') {
                $result = "Morocco";
            } elseif ($q1 == '2' && $q2 == '2' && $q3 == '3') {
                $result = "Spain";
            } elseif ($q1 == '2' && $q2 == '3' && $q3 == '1') {
                $result = "Japan";
            } elseif ($q1 == '2' && $q2 == '3' && $q3 == '2') {
                $result = "Japan";
            } elseif ($q1 == '2' && $q2 == '3' && $q3 == '3') {
                $result = "Australia";
            } elseif ($q1 == '3' && $q2 == '1' && $q3 == '1') {
                $result = "Spain";
            } elseif ($q1 == '3' && $q2 == '1' && $q3 == '2') {
                $result = "Morocco";
            } elseif ($q1 == '3' && $q2 == '1' && $q3 == '3') {
                $result = "Portugal";
            } elseif ($q1 == '3' && $q2 == '2' && $q3 == '1') {
                $result = "Turkey";
            } elseif ($q1 == '3' && $q2 == '2' && $q3 == '2') {
                $result = "Morocco";
            } elseif ($q1 == '3' && $q2 == '2' && $q3 == '3') {
                $result = "Greece";
            } elseif ($q1 == '3' && $q2 == '3' && $q3 == '1') {
                $result = "Peru";
            } elseif ($q1 == '3' && $q2 == '3' && $q3 == '2') {
                $result = "Thailand";
            } elseif ($q1 == '3' && $q2 == '3' && $q3 == '3') {
                $result = "Indonesia";
            }
            $_SESSION['result'] = $result;
        }
        return $this->twig->render('Home/quiz.html.twig', [
            'result' => $result
        ]);
    }

    public function pays()
    {
        session_start();
        $result = $_SESSION['result'];

        $client = HttpClient::create();
        $response = $client->request('GET', 'https://restcountries.com/v3.1/name/' . $result);

        $country = $response->toArray()[0];

        return $this->twig->render('Home/result.html.twig', [
            'country' => $country
        ]);
    }
}

/* Hiver, voisin, culture = Norv??ge
Hiver, voisin, cuisine = Su??de
Hiver, voisin, ext??rieur = Finlande (Laponie)

Hiver, assez proche, culture = Russie
Hiver, assez proche, cuisine = Su??de
Hiver, assez proche, farniente = Finlande

Hiver, loin, culture = N??pal
Hiver, loin, cuisine = N??pal
Hiver, loin, ext??rieur = Canada

Temp??r??, voisin, culture = Allemagne
Temp??r??, voisin, cuisine = Italie
Temp??r??, voisin, ext??rieur = Espagne

Temp??r??, assez proche, culture = Hongrie
Temp??r??, assez proche, cuisine = Maroc
Temp??r??, assez proche, farniente = Espagne

Temp??r??, loin, culture = Japon
Temp??r??, loin, cuisine = Japon
Temp??r??, loin, ext??rieur = Australie

Chaud, voisin, culture = Espagne
Chaud, voisin, cuisine = Maroc
Chaud, voisin, ext??rieur = Portugal

Chaud, assez proche, culture = Turquie
Chaud, assez proche, cuisine = Maroc
Chaud, assez proche, farniente = Gr??ce

Chaud, loin, culture = Vietnam
Chaud, loin, cuisine = Thailande
Chaud, loin, ext??rieur = Indon??sie */
