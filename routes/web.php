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

Route::get('/', function () {
    $data = [
        'title' => 'Home',
        'content' => 'This is the home page',
        'text' => 'This is the home page',
    ];
    
    return view('homepage', $data);
})->name('homepage');

Route::get('/characters', function () {
    return 'characters';
})->name('characters');



Route::get('/comics', function () {
    $comics = config('db.comics');
    // dd('comics', $comics);
    return view('comics', compact('comics'));
})->name('comics');



Route::get('/movies', function () {
    return 'movies page';
})->name('movies');

Route::get('/tv ', function () {
    return 'tv page';
})->name('tv');

Route::get('/games', function () {
    return 'games page';
})->name('games');

Route::get('/videos', function () {
    return 'videos';
})->name('videos');

Route::get('/collectibles', function () {
    return 'collectibles';
})->name('collectibles');

Route::get('/videos', function () {
    return 'videos';
})->name('videos');

Route::get('/fans', function () {
    return 'fans';
})->name('fans');

Route::get('/news', function () {
    return 'news';
})->name('news');

Route::get('/shop', function () {
    return 'shop';
})->name('shop');
