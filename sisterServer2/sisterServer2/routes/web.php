<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/films', [FilmController::class,'indexserver'])->name('filmsserver.index');
Route::get('/films/{id}', [FilmController::class,'show'])->name('filmsserver.show');
Route::get('/films/{id}/edit', [FilmController::class,'edit'])->name('filmsserver.edit');

Route::post('/films', [FilmController::class,'store'])->name('filmsserver.store');
Route::put('/films/{id}', [FilmController::class,'update'])->name('filmsserver.update');
Route::delete('/films/{id}', [FilmController::class,'destroy'])->name('filmsserver.destroy');