<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    protected $fillable = ['title', 'genre', 'year', 'rating', 'sinopsis', 'image_url'];

    public function index() {
        $games = Game::all();
        if ($games->count() > 0) {
            return response()->json(
                [
                    'status' => 200,
                    'games' => $games
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'status' => 400,
                    'games' => 'No Record Found'
                ],
                400
            );
        }
    }
    public function indexserver(Request $request) {
        $games = Game::all();
        if ($request->is('api/*')) {
            // Jika permintaan dari API, kirimkan sebagai JSON
            return response()->json($games);
        } else {
            // Jika permintaan biasa, tampilkan sebagai tampilan HTML
            return view('index', compact('games'));
        }
    }    
        
    public function show($id)
    {
        $game = Game::find($id);

        if ($game) {
            return response()->json([
                'status' => 200,
                'game' => $game
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Game Not Found'
            ], 404);
        }
    }

    public function store(Request $request) {
        $payload = $request->only($this->fillable);
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

        $game = Game::create($payload);

        return redirect(route('gamesserver.index'));
    }

    public function edit($id)
     {
         $game = Game::find($id);
         return view('edit', compact('game'));
     }

    public function update(Request $request, $id) {
        $game = Game::find($id);

        if (!$game) {
            return response()->json(['message' => 'Game not found'], 404);
        }

        $request->validate([
            'title' => 'string',
            'genre' => 'string',
            'year' => 'string',
            'rating' => 'string',
            'image_url' => 'string',
        ]);

        // Update only the provided fields
        $game->update($request->only($this->fillable));

        return redirect(route('gamesserver.index'));
    }

    public function destroy($id) {
        $game = Game::find($id);

        if (!$game) {
            return response()->json(['message' => 'Game not found'], 404);
        }

        $game->delete();

        return redirect(route('gamesserver.index'));
    }
}
