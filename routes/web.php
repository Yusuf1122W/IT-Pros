<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TournamentController;
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
    return view('home');
})->name('homepage.index');


Route::get('/users', [PlayerController::class, 'index'])->name('users.index');
Route::get('/users/create', [PlayerController::class, 'create'])->name('users.create');
Route::post('/users/create', [PlayerController::class, 'store'])->name('users.store');
Route::get('/users/edit/{user}', [PlayerController::class, 'edit'])->name('users.edit');
Route::post('/users/edit/{user}', [PlayerController::class, 'update'])->name('users.update');
Route::delete('/users/delete/{user}', [PlayerController::class, 'destroy'])->name('users.destroy');

Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournaments.index');
Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create');
Route::post('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.store');
Route::get('/tournaments/edit/{user}', [TournamentController::class, 'edit'])->name('tournaments.edit');
Route::post('/tournaments/edit/{user}', [TournamentController::class, 'update'])->name('tournaments.update');
Route::delete('/tournaments/delete/{user}', [TournamentController::class, 'destroy'])->name('tournaments.destroy');

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::post('/teams/store', [TeamController::class, 'store'])->name('teams.store');
Route::get('/teams/edit/{team}', [TeamController::class, 'edit'])->name('teams.edit');
Route::post('/teams/edit/{team}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('/teams/delete/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
