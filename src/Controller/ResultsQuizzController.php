<?php

namespace App\Controller;
use Symfony\Component\HttpClient\HttpClient;

class ResultsQuizzController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {   
        session_start();
        $result = $_SESSION['result'];

        $client = HttpClient::create();
        $response = $client->request('GET', 'https://restcountries.com/v3.1/name/' . $result);
        $country = $response->toArray()[0];

        return $this->twig->render('Quizz/ResultsQuizz.html.twig', [
            'country' => $country,
            'result' => $result
        ]);
    }

    public function showImage()
    {
        $response = $this->client->request(
            'GET',
            'https://api.pexels.com/v1/search', [
                'headers' => [
                    'Authorization' => '563492ad6f91700001000001211c5af6ab7b4ca289e3375bced232e9',
                ],
                'query' => [
                    'query' => 'france',
                ]
            ]
                );
    ''($response->toArray()['photos'][0]['src']['medium']);




    }


}
