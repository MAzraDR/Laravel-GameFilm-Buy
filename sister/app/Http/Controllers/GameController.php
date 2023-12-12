<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GameController extends Controller
{
    public function home()
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8081',
            'timeout' => 5
        ]);

        $response = $client->request('GET', '/api/games');
        $body = $response->getBody();
        $data_body = json_decode($body, true);

        return view('Pages.game', ['data_body' => $data_body]);
    }

    public function index()
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8081',
            'timeout' => 5
        ]);

        $response = $client->request('GET', '/api/games');
        $body = $response->getBody();
        $data_body = json_decode($body, true);

        return view('Pages.Admin.datagames', ['data_body' => $data_body]);
    }

    public function create()
    {
        return view('Pages.Admin.datagames');
    }

    public function store(Request $request)
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8081',
            'timeout' => 5
        ]);

        $response = $client->request('POST', '/api/games', [
            'json' => [
                'title' => $request->input('title'),
                'genre' => $request->input('genre'),
                'year' => $request->input('year'),
                'rating' => $request->input('rating'),
                'sinopsis' => $request->input('sinopsis'),
                'image_url' => $request->input('image_url'),
            ]
        ]);

        $body = $response->getBody();
    }
}
