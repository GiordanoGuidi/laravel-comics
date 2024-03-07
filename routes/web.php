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

Route::get('/', function () {
    $links = [
        ['text' => 'Characters', 'url' => '#', 'current' => 0],
        ['text' => 'Comics', 'url' => '#', 'current' => 0],
        ['text' => 'Movies', 'url' => '#', 'current' => 0],
        ['text' => 'TV', 'url' => '#', 'current' => 0],
        ['text' => 'Games', 'url' => '#', 'current' => 0],
        ['text' => 'Collectibles', 'url' => '#', 'current' => 0],
        ['text' => 'Videos', 'url' => '#', 'current' => 0],
        ['text' => 'Fans', 'url' => '#', 'current' => 0],
        ['text' => 'News', 'url' => '#', 'current' => 0],
        ['text' => 'Shop', 'url' => '#', 'current' => 0],
    ];
    $comics = config('comics');
    $footerBuyLinks = [
        ['id' => 1, 'text' => 'digital comics', 'src' => 'buy-comics-digital-comics.png'],
        ['id' => 2, 'text' => 'dc merfchandise', 'src' => 'buy-comics-digital-comics.png'],
        ['id' => 3, 'text' => 'subscription', 'src' => 'buy-comics-digital-comics.png'],
        ['id' => 4, 'text' => 'comic shop locator', 'src' => 'buy-comics-digital-comics.png'],
        ['id' => 5, 'text' => 'dc power visa', 'src' => 'buy-comics-digital-comics.png'],

    ];
    return view('home', compact('links', 'comics', 'footerBuyLinks'));
})->name('home');
