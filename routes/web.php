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
Route::get('/nuova-pagina', [PageController::class, 'nuovaPagina'])->name('nuova-pagina');



