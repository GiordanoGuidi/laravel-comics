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
        ['id' => 2, 'text' => 'dc merfchandise', 'src' => 'buy-comics-merchandise.png'],
        ['id' => 3, 'text' => 'subscription', 'src' => 'buy-comics-subscriptions.png'],
        ['id' => 4, 'text' => 'comic shop locator', 'src' => 'buy-comics-shop-locator.png'],
        ['id' => 5, 'text' => 'dc power visa', 'src' => 'buy-dc-power-visa.svg'],

    ];
    $upperFooterLinks = [
        [
            'title' => 'dc comics',
            'links' => [
                ['url' => '#', 'text' => 'Characters'],
                ['url' => '#', 'text' => 'Comics'],
                ['url' => '#', 'text' => 'Movies'],
                ['url' => '#', 'text' => 'TV'],
                ['url' => '#', 'text' => 'Games'],
                ['url' => '#', 'text' => 'Videos'],
                ['url' => '#', 'text' => 'News'],
            ]
        ],

        [
            'title' => 'shop',
            'links' => [
                ['url' => '#', 'text' => 'Shop DC'],
                ['url' => '#', 'text' => 'Shop DC Collection'],

            ]
        ],

        [
            'title' => 'dc',
            'links' => [
                ['url' => '#', 'text' => 'Terms Of Use'],
                ['url' => '#', 'text' => 'Privacy policy(New)'],
                ['url' => '#', 'text' => 'Advertising'],
                ['url' => '#', 'text' => 'Jobs'],
                ['url' => '#', 'text' => 'Subscription'],
                ['url' => '#', 'text' => 'Talent Workshop'],
                ['url' => '#', 'text' => 'CPSC Certificates'],
                ['url' => '#', 'text' => 'Ratings'],
                ['url' => '#', 'text' => 'Shop Help'],
                ['url' => '#', 'text' => 'Contact Us'],


            ]
        ],

        [
            'title' => 'dc',
            'links' => [
                ['url' => '#', 'text' => 'DC'],
                ['url' => '#', 'text' => 'MAD Magazine'],
                ['url' => '#', 'text' => 'DC Kids'],
                ['url' => '#', 'text' => 'DC Universe'],
                ['url' => '#', 'text' => 'DC Power Visa'],
            ]
        ],

    ];
    return view('home', compact('links', 'comics', 'footerBuyLinks', 'upperFooterLinks'));
})->name('home');
