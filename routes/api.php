<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\HeroController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/team', function (Request $request) {
    return $request->team();
});

Route::middleware('auth:sanctum')->get('/player', function (Request $request) {
    return $request->player();
});

Route::middleware('auth:sanctum')->get('/hero', function (Request $request) {
    return $request->hero();
});

Route::get('/teams/{team}', [TeamController::class, 'view']);
Route::patch('/teams/{team}', [TeamController::class, 'update']);
Route::delete('/teams/{team}', [TeamController::class, 'destroy']);
Route::get('/teams', [TeamController::class, 'index']);
Route::post('/teams', [TeamController::class, 'store']);

Route::get('/players/{player}', [PlayerController::class, 'view']);
Route::patch('/players/{player}', [PlayerController::class, 'update']);
Route::delete('/players/{player}', [PlayerController::class, 'destroy']);
Route::get('/players', [PlayerController::class, 'index']);
Route::post('/players', [PlayerController::class, 'store']);

Route::get('/heroes/{hero}', [HeroController::class, 'view']);
Route::patch('/heroes/{hero}', [HeroController::class, 'update']);
Route::delete('/heroes/{hero}', [HeroController::class, 'destroy']);
Route::get('/heroes', [HeroController::class, 'index']);
Route::post('/heroes', [HeroController::class, 'store']);

