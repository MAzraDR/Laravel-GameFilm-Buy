<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/games', [GameController::class,'index'])->name('games.index');
Route::get('/games/{id}', [GameController::class,'show'])->name('games.show');
Route::post('/games', [GameController::class,'store'])->name('games.store');
Route::put('/games/{id}', [GameController::class,'update'])->name('games.update');
Route::delete('/games/{id}', [GameController::class,'destroy'])->name('games.destroy');

Route::get('/peminjaman', [PeminjamanController::class,'index'])->name('peminjaman.index');
Route::get('/peminjaman/{id}', [PeminjamanController::class,'show'])->name('peminjaman.show');
Route::post('/peminjaman', [PeminjamanController::class,'store'])->name('peminjaman.store');
Route::put('/peminjaman/{id}', [PeminjamanController::class,'update'])->name('peminjaman.update');
Route::delete('/peminjaman/{id}', [PeminjamanController::class,'destroy'])->name('peminjaman.destroy');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
