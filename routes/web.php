<?php

use Illuminate\Support\Facades\Route;
// dico al file web.php dove trovare la classe PageController
use App\Http\Controllers\PageController as PageController;
// dico al file web.php dove trovare la classe MovieController
use App\Http\Controllers\MovieController as MovieController;


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
//     return view('home');
// });


// rotta per la homepage
Route::get('/', [PageController::class, 'home'])->name('homepage');
// rotta per i contatti
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
// rotta per i movies
Route::get('/movies', [MovieController::class, 'index'])->name('movies');


