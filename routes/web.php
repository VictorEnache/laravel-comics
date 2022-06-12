<?php

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

Route::get('/comics', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('comics', compact('fumetti', 'links'));
})->name('comics');

Route::get('/characters', function () {
    
    $links = (config('db.links'));
    return view('characters', compact( 'links'));
})->name('characters');

Route::get('/movies', function () {
    
    $links = (config('db.links'));
    return view('movies', compact( 'links'));
})->name('movies');

Route::get('/tv', function () {
    
    $links = (config('db.links'));
    return view('tv', compact( 'links'));
})->name('tv');

Route::get('/games', function () {
    
    $links = (config('db.links'));
    return view('games', compact( 'links'));
})->name('games');

Route::get('/collectibles', function () {
    
    $links = (config('db.links'));
    return view('collectibles', compact( 'links'));
})->name('collectibles');

Route::get('/videos', function () {
    
    $links = (config('db.links'));
    return view('videos', compact( 'links'));
})->name('videos');

Route::get('/fans', function () {
    
    $links = (config('db.links'));
    return view('fans', compact( 'links'));
})->name('fans');

Route::get('/news', function () {
    
    $links = (config('db.links'));
    return view('news', compact( 'links'));
})->name('news');

Route::get('/shop', function () {
    
    $links = (config('db.links'));
    return view('shop', compact( 'links'));
})->name('shop');

Route::get('/', function () {
    
    $links = (config('db.links'));
    return view('home', compact( 'links'));
})->name('home');
