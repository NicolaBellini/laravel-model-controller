<?php

// ho importato pagecontroller
use App\Http\Controllers\Guest\PageController;
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

// rotta con funzone index()
Route::get('/', [PageController::class, 'index'])->name('home');

// rotta con funzione nuovaPagina()
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/movies', [PageController::class, 'movies'])->name('movies');
Route::get('/movies_details/{id}', [PageController::class, 'movieDetail'])->name('moviesDetails');






