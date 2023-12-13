<?php

use App\Http\Controllers\GameController;
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

Route::get('/games', [GameController::class,'indexserver'])->name('gamesserver.index');
Route::get('/games/{id}', [GameController::class,'show'])->name('gamesserver.show');
Route::get('/games/{id}/edit', [GameController::class,'edit'])->name('gamesserver.edit');

Route::post('/games', [GameController::class,'store'])->name('gamesserver.store');
Route::put('/games/{id}', [GameController::class,'update'])->name('gamesserver.update');
Route::delete('/games/{id}', [GameController::class,'destroy'])->name('gamesserver.destroy');
