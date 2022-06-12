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
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('characters', compact('fumetti', 'links'));
})->name('characters');

Route::get('/movies', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('movies', compact('fumetti', 'links'));
})->name('movies');

Route::get('/tv', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('tv', compact('fumetti', 'links'));
})->name('tv');

Route::get('/games', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('games', compact('fumetti', 'links'));
})->name('games');

Route::get('/collectibles', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('collectibles', compact('fumetti', 'links'));
})->name('collectibles');

Route::get('/videos', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('videos', compact('fumetti', 'links'));
})->name('videos');

Route::get('/fans', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('fans', compact('fumetti', 'links'));
})->name('fans');

Route::get('/news', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('news', compact('fumetti', 'links'));
})->name('news');

Route::get('/shop', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('shop', compact('fumetti', 'links'));
})->name('shop');

Route::get('/', function () {
    $fumetti = (config('db.fumetti'));
    $links = (config('db.links'));
    return view('home', compact('fumetti', 'links'));
})->name('home');
