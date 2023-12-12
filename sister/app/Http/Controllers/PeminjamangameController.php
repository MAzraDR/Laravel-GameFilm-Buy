<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PeminjamangameController extends Controller
{
    public function index()
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8081',
            'timeout' => 5
        ]);

        $response = $client->request('GET', '/api/peminjaman');
        $body = $response->getBody();
        $data_body = json_decode($body, true);

        return view('peminjamanfilms.index', ['data_body' => $data_body]);
    }

    public function show($id)
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8081',
            'timeout' => 5
        ]);

        $response = $client->request('GET', '/api/peminjaman/' . $id);
        $body = $response->getBody();
        $data_body = json_decode($body, true);

        return view('peminjamanfilms.show', ['data_body' => $data_body]);
    }

    public function create($id)
    {
        return view('Pages.pinjamgame', ['game_id' => $id]);        
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8081',
            'timeout' => 5
        ]);

        $response = $client->request('POST', '/api/peminjaman', [
            'json' => [
                'email' => $request->input('email'),
                'game_id' => $request->input('game_id'),
                'borrowed_at' => $request->input('borrowed_at'),
                'due_date' => $request->input('due_date'),
                'status' => 'Pending',

                // 'email' => $_POST['email'],
                // 'film_id' => $_POST['film_id'],
                // 'borrowed_at' => $_POST['borrowed_at'],
                // 'due_date' => $_POST['due_date'],
                // 'status' => $_POST['status'],
            ]
        ]);

        $body = $response->getBody();
        return redirect(route('game.home'));
    }

    public function edit($id)
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8081',
            'timeout' => 5
        ]);

        $response = $client->request('GET', '/api/peminjaman/' . $id);
        $body = $response->getBody();
        $data_body = json_decode($body, true);

        return view('peminjamanfilms.edit', ['data_body' => $data_body]);
    }

    public function update(Request $request, $id)
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8081',
            'timeout' => 5
        ]);

        $response = $client->request('PUT', '/api/peminjaman/' . $id, [
            'json' => [
                'email' => $request->input('email'),
                'film_id' => $request->input('film_id'),
                'borrowed_at' => $request->input('borrowed_at'),
                'due_date' => $request->input('due_date'),
                'status' => 'Pending',
            ]
        ]);

        $body = $response->getBody();
    }

    public function destroy($id)
    {
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8081',
            'timeout' => 5
        ]);

        $response = $client->request('DELETE', '/api/peminjaman/' . $id);
        $body = $response->getBody();
    }
}
