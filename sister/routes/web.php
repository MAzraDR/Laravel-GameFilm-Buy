<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PeminjamanfilmController;
use App\Http\Controllers\PeminjamangameController;
use App\Http\Controllers\UserController;
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

Route::get('/register', [AuthController::class,'register'])->name('auth.register');
Route::get('/login', [AuthController::class,'login'])->name('auth.login');
Route::post('/auth/prosesregister', [AuthController::class,'prosesregister'])->name('auth.prosesregister');
Route::post('/auth/proseslogin', [AuthController::class,'proseslogin'])->name('auth.proseslogin');

Route::middleware(['auth:sanctum'])->group(function () {

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/filmsadmin', [FilmController::class,'index'])->name('adminfilm.index');
        Route::get('/gamesadmin', [GameController::class,'index'])->name('admingame.index');
    
        Route::get('users', [UserController::class, 'index'])->name('users.index');          // Get all users
        Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');      // Get a specific user
        Route::post('/users', [UserController::class, 'store'])->name('users.store');          // Create a new user
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');    // Update a user
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy'); // Delete a user
    });

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    // Route::get('/films', [FilmController::class,'index'])->name('films');
    
    // Films
    Route::get('/films', [FilmController::class,'home'])->name('film.home');
    Route::get('/pinjamfilm/{id}', [PeminjamanfilmController::class,'create'])->name('pinjamfilm.create');
    Route::post('/pinjamfilm', [PeminjamanfilmController::class,'store'])->name('pinjamfilm.store');
    
    // Games
    Route::get('/games', [GameController::class,'home'])->name('game.home');
    Route::get('/pinjamgame/{id}', [PeminjamangameController::class,'create'])->name('pinjamgame.create');
    Route::post('/pinjamgame', [PeminjamangameController::class,'store'])->name('pinjamgame.store');
    
    
  
   
});