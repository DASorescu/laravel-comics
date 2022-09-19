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
    $comics = config('comics');
    return view('comics.index',['comics'=> $comics]);
})->name('comics.index');

Route::get('/videos', function () {
    return view('pages.videos');
})->name('videos');
    

Route::get('/characters', function () {
    return view('pages.characters');
})->name('characters');

Route::get('/games', function () {
    return view('pages.games');
})->name('games');

Route::get('/movies', function () {
    return view('pages.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('pages.tv');
})->name('tv');

Route::get('/colectibles', function () {
    return view('pages.colectibles');
})->name('colectibles');

Route::get('/fans', function () {
    return view('pages.fans');
})->name('fans');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');

Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');
// todo ...
Route::get('/comic/{id}', function ($id) {
    $comics = config('comics');

    if(!is_numeric($id) ||$id < 0 || $id >= count($comics)){
        abort(404);
    }
    $comic = $comics[$id];
    return view('comics.show',compact('comic'));
})->name('comics.show');
    
