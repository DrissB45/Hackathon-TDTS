<?php

namespace App\Controller;

class ResultsQuizzController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {   
        return $this->twig->render('Quizz/ResultsQuizz.html.twig');
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
