<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function home()
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8080',
            'timeout' => 5
        ]);

        $response = $client->request('GET', '/api/films');
        $body = $response->getBody();
        $data_body = json_decode($body, true); // Gunakan true untuk mendapatkan array asosiatif

        return view('Pages.film', ['data_body' => $data_body]);
    }

    public function index()
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8080',
            'timeout' => 5
        ]);

        $response = $client->request('GET', '/api/films');
        $body = $response->getBody();
        $data_body = json_decode($body, true); // Gunakan true untuk mendapatkan array asosiatif

        return view('Pages.Admin.datafilms', ['data_body' => $data_body]);
    }

    public function create() {
        return view('Pages.Admin.datafilms');
    }

    public function store(Request $request) {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8080',
            'timeout' => 5
        ]);

        $response = $client->request('POST', '/api/films', [
            'json' => [
                'title' => $_POST['tile'],
                'genre' => $_POST['genre'],
                'year' => $_POST['year'],
                'rating' => $_POST['rating'],
                'sinopsis' => $_POST['sinopsis'],
                'image_url' => $_POST['image_url'],
            ]
        ]);
        $body = $response->getBody();
    }
}
