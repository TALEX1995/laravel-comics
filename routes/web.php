<?php

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

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Comics page
Route::get('/comics', function () {
    $series = config('series');
    return view('comics', compact('series'));
})->name('comics');

// Serie detail
Route::get('/comics/{index}', function ($index) {
    $series = config('series');

    $serie = $series[$index];

    return view('series.serie', compact('serie'));
})->name('comics.detail');
