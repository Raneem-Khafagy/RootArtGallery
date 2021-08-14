<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavsController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


//PASSING "category" var with the route
Route::get('category/{category}', [HomeController::class, 'category'])->name('category');
//PASSING "ArtPiecies" var with the route
Route::get('/art-piece/{art_piece}', [HomeController::class, 'art_piece'])->name('art-piece');
//PASSING "add and remove from favourites" var with the route
Route::post('/art-piece/{art_piece}/favs', [FavsController::class, 'store'])->name('art-piece.fav');
Route::delete('/art-piece/{art_piece}/unfav', [FavsController::class, 'destroy'])->name('art-piece.unfav');
Route::get('/favourites', [FavsController::class, 'index'])->name('favourites');
Route::post('/favourites', [FavsController::class, 'index'])->name('favourites');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
