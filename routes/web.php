<?php

use App\Http\Controllers\AgeController;
use App\Http\Controllers\NomController;
use App\Http\Controllers\PrenomController;
use App\Http\Controllers\Tab;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/', [NomController::class,'index'])->name('nomz');

Route::get('/prenom', [PrenomController::class,'prenom'])->name('prenomz');

Route::get('/age', [AgeController::class,'age'])->name('agez');

Route::get('/tableau', [Tab::class,'tableau']);



