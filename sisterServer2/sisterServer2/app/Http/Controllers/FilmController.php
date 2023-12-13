<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    public function index() {
        $films = Film::all();
        if ($films->count() > 0) {
            return response()->json(
                [
                    'status' => 200,
                    'films' => $films
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'status' => 400,
                    'films' => 'No Record Found'
                ],
                400
            );
        }
    }
    public function indexserver(Request $request) {
        $films = Film::all();
        if ($request->is('api/*')) {
            // Jika permintaan dari API, kirimkan sebagai JSON
            return response()->json($films);
        } else {
            // Jika permintaan biasa, tampilkan sebagai tampilan HTML
            return view('index', compact('films'));
        }
    }

    public function show($id)
    {
        $film = Film::find($id);

        if ($film) {
            return response()->json([
                'status' => 200,
                'film' => $film
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Film Not Found'
            ], 404);
        }
    }

    public function edit($id)
    {
        $film = Film::find($id);
        return view('edit', compact('film'));
    }


    public function store(Request $request) {
        $payload = $request->only("title", "genre", "year", "rating", "image_url");
        $validate = Validator::make($payload, [
            'title' => 'required',
            'genre' => 'required',
            'year' => 'required',
            'rating' => 'required',
            'image_url' => 'required', 
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status_code' => 404,
                "message" => $validate->errors(),
            ]);
        }

        $film = Film::create($payload);

    return redirect(route('filmsserver.index'));
    }

    public function update(Request $request, $id) {
        $film = Film::find($id);

        if (!$film) {
            return response()->json(['message' => 'Film not found'], 404);
        }

        $request->validate([
            'title' => 'string',
            'genre' => 'string',
            'year' => 'string',
            'rating' => 'string',
            'image_url' => 'string',
        ]);

        // Update only the provided fields
        $film->update([
            'title' => $request->input('title', $film->title),
            'genre' => $request->input('genre', $film->genre),
            'year' => $request->input('year', $film->year),
            'rating' => $request->input('rating', $film->rating),
            'image_url' => $request->input('image_url', $film->image_url),           
        ]);

        return redirect(route('filmsserver.index'));
    }

    public function destroy($id) {
        $film = Film::find($id);

        if (!$film) {
            return response()->json(['message' => 'Film not found'], 404);
        }

        $film->delete();

        return redirect(route('filmsserver.index'));
    }

}
