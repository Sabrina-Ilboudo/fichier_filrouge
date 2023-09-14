<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/pagnes', [App\Http\Controllers\HomeController::class, 'pagnes'])->name('pagnes');



Auth::routes();
Route::get('/sacs', [App\Http\Controllers\HomeController::class, 'sacs'])->name('sacs');



Auth::routes();
Route::get('/chaussure', [App\Http\Controllers\HomeController::class, 'chaussure'])->name('chaussure');



Auth::routes();
Route::get('/ensemble', [App\Http\Controllers\HomeController::class, 'ensemble'])->name('ensemble');



Auth::routes();
Route::get('/ensemble1', [App\Http\Controllers\HomeController::class, 'ensemble1'])->name('ensemble1');




Auth::routes();
Route::get('/ensemble2', [App\Http\Controllers\HomeController::class, 'ensemble2'])->name('ensemble2');



Auth::routes();
Route::get('/ensemble3', [App\Http\Controllers\HomeController::class, 'ensemble3'])->name('ensemble3');



Auth::routes();
Route::get('/ensemble4', [App\Http\Controllers\HomeController::class, 'ensemble4'])->name('ensemble4');



Auth::routes();
Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contacts');



Auth::routes();
Route::get('/boutique', [App\Http\Controllers\HomeController::class, 'boutique'])->name('boutique');



Auth::routes();
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');

