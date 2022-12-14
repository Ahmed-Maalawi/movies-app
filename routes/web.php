<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TvController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::view('/show', 'show');

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/Actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/Actors/pages/{page?}', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/Actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');

Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{tvShow}', [TvController::class, 'show'])->name('tv.show');
