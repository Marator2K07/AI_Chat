<?php

namespace App\Services;

use GuzzleHttp\Client;

class APIService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function sendRequest($url, $data)
    {
        // Отправка запроса к API
        $response = $this->client->post($url, [
            'json' => $data
        ]);

       

       return $response->getBody()->getContents();
    }
}
