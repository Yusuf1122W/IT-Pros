<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
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

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::post('/teams/create', [TeamController::class, 'store'])->name('teams.store');
Route::get('/teams/edit/{team}', [TeamController::class, 'edit'])->name('teams.edit');
Route::post('/teams/edit/{team}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('/teams/delete/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
