<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

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

Route::get('/teams', [TeamController::class, 'team'])->name('teams');
Route::get('team/create', [TeamController::class, 'create'])->name('teams');
Route::post('team/create', [TeamController::class, 'store'])->name('teams');
Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
Route::put('/teams/{team}/update', [TeamController::class, 'update'])->name('teams.update');
Route::delete('/teams/{team}/delete', [TeamController::class, 'delete'])->name('teams.delete');

Route::get('/players', [PlayerController::class, 'player'])->name('players');
Route::get('player/create', [PlayerController::class, 'create'])->name('players');
// Route::post('team/create', [TeamController::class, 'store'])->name('teams');

Route::get('/heroes', [HeroController::class, 'hero'])->name('heroes');
Route::get('hero/create', [HeroController::class, 'create'])->name('heroes');
// Route::post('team/create', [TeamController::class, 'store'])->name('teams');

