<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/btp', [HomeController::class, 'btp'])->name('btp');
Route::get('/imprimerie', [HomeController::class, 'imprimerie'])->name('imprimerie');
Route::get('/gestion-immobiliere', [HomeController::class, 'gestionImmobiliere'])->name('gestion-immobiliere');
Route::get('/construction-metallique', [HomeController::class, 'constructionMetallique'])->name('construction-metallique');
Route::get('/entretien-nettoyage', [HomeController::class, 'entretienNettoyage'])->name('entretien-nettoyage');
