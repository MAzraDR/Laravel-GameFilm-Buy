<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeminjamanController extends Controller
{
    public function index() {
        $peminjaman = Peminjaman::all();
        if ($peminjaman->count() > 0) {
            return response()->json(
                [
                    'status' => 200,
                    'peminjaman' => $peminjaman
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'status' => 400,
                    'peminjaman' => 'No Record Found'
                ],
                400
            );
        }
    }

    public function show($id)
    {
        $peminjaman = Peminjaman::find($id);

        if ($peminjaman) {
            return response()->json([
                'status' => 200,
                'Peminjaman' => $peminjaman
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Peminjaman Not Found'
            ], 404);
        }
    }

    public function store(Request $request) {
        $payload = $request->only("email", "game_id", "borrowed_at", "due_date", "status");
        $validate = Validator::make($payload, [
            'email' => 'required',
            'game_id' => 'required',
            'borrowed_at' => 'required',
            'due_date' => 'required',
            'status' => 'required', 
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status_code' => 404,
                "message" => $validate->errors(),
            ]);
        }

        $peminjaman = Peminjaman::create($payload);

        return response()->json([
            "status_code" => 200,
            "message" => "success",
            "peminjaman" => $peminjaman,            
        ]);
    }

    public function update(Request $request, $id) {
        $peminjaman = Peminjaman::find($id);

        if (!$peminjaman) {
            return response()->json(['message' => 'Peminjaman not found'], 404);
        }

        $request->validate([
            'email' => 'string', // Ganti 'string' menjadi 'integer' jika email seharusnya berupa integer
            'game_id' => 'integer', // Ganti 'string' menjadi 'integer' jika game_id seharusnya berupa integer
            'borrowed_at' => 'date', // Ganti 'string' menjadi 'date' jika borrowed_at seharusnya berupa tanggal
            'due_date' => 'date', // Ganti 'string' menjadi 'date' jika due_date seharusnya berupa tanggal
            'status' => 'string', // Tetapkan tipe data string untuk status
        ]);
        

        // Update only the provided fields
        $peminjaman->update([
            'email' => $request->input('email', $peminjaman->email),
            'game_id' => $request->input('game_id', $peminjaman->game_id),
            'borrowed_at' => $request->input('borrowed_at', $peminjaman->borrowed_at),
            'due_date' => $request->input('due_date', $peminjaman->due_date),
            'status' => $request->input('status', $peminjaman->status),           
        ]);

        return response()->json(['peminjaman' => $peminjaman], 200);
    }

    public function destroy($id) {
        $peminjaman = Peminjaman::find($id);

        if (!$peminjaman) {
            return response()->json(['message' => 'Peminjaman not found'], 404);
        }

        $peminjaman->delete();

        return response()->json(['message' => 'Peminjaman deleted'], 200);
    }

}
