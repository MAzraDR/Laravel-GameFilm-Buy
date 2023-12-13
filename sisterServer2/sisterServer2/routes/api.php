<?php

use App\Http\Controllers\FilmController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/films', [FilmController::class,'index'])->name('films.index');
Route::get('/idfilms/{id}', [FilmController::class,'show'])->name('films.show');
Route::post('/films', [FilmController::class,'store'])->name('films.store');
Route::put('/films/{id}', [FilmController::class,'update'])->name('films.update');
Route::delete('/films/{id}', [FilmController::class,'destroy'])->name('films.destroy');

Route::get('/peminjaman', [PeminjamanController::class,'index'])->name('peminjaman.index');
Route::get('/peminjaman/{id}', [PeminjamanController::class,'show'])->name('peminjaman.show');
Route::post('/peminjaman', [PeminjamanController::class,'store'])->name('peminjaman.store');
Route::put('/peminjaman/{id}', [PeminjamanController::class,'update'])->name('peminjaman.update');
Route::delete('/peminjaman/{id}', [PeminjamanController::class,'destroy'])->name('peminjaman.destroy');
