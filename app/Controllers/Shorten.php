<?php

namespace App\Controllers;



class Shorten extends BaseController
{

    protected $client;

    public function __construct()
    {
        $this->client = \Config\Services::curlrequest();
    }

    public function index()
    {
        return view('pages/shorten');
    }

    public function getShortenUrl()
    {
        $data['url'] = $this->client->get('https://is.gd/create.php?format=simple&url='.$this->request->getGet('url'))->getBody();
        return view('pages/shorten', $data);
    }
}
