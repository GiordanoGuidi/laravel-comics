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

//Rotta Home
Route::get('/', function () {
    $links = [
        ['text' => 'characters', 'url' => '#', 'current' => 0],
        ['text' => 'comics', 'url' => '#', 'current' => 0],
        ['text' => 'movies', 'url' => '#', 'current' => 0],
        ['text' => 'tv', 'url' => '#', 'current' => 0],
        ['text' => 'games', 'url' => '#', 'current' => 0],
        ['text' => 'collectibles', 'url' => '#', 'current' => 0],
        ['text' => 'videos', 'url' => '#', 'current' => 0],
        ['text' => 'fans', 'url' => '#', 'current' => 0],
        ['text' => 'news', 'url' => '#', 'current' => 0],
        ['text' => 'shop', 'url' => '#', 'current' => 0],
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

//Rotta Comics Details
Route::get('comics/{index}', function ($index) {
    $links = [
        ['text' => 'characters', 'url' => '#', 'current' => 0],
        ['text' => 'comics', 'url' => '#', 'current' => 0],
        ['text' => 'movies', 'url' => '#', 'current' => 0],
        ['text' => 'tv', 'url' => '#', 'current' => 0],
        ['text' => 'games', 'url' => '#', 'current' => 0],
        ['text' => 'collectibles', 'url' => '#', 'current' => 0],
        ['text' => 'videos', 'url' => '#', 'current' => 0],
        ['text' => 'fans', 'url' => '#', 'current' => 0],
        ['text' => 'news', 'url' => '#', 'current' => 0],
        ['text' => 'shop', 'url' => '#', 'current' => 0],
    ];
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

    $comics = config('comics');
    if (!is_numeric($index) || $index < 0 || $index >= count($comics)) {
        abort(404);
    }

    return view('products.comics', compact('links', 'footerBuyLinks', 'upperFooterLinks'), ['comic' => $comics[$index]]);
})->name('comics');

//Rotta Characters
Route::get('/characters', function () {
    $links = [
        ['text' => 'characters', 'url' => '#', 'current' => 0],
        ['text' => 'comics', 'url' => '#', 'current' => 0],
        ['text' => 'movies', 'url' => '#', 'current' => 0],
        ['text' => 'tv', 'url' => '#', 'current' => 0],
        ['text' => 'games', 'url' => '#', 'current' => 0],
        ['text' => 'collectibles', 'url' => '#', 'current' => 0],
        ['text' => 'videos', 'url' => '#', 'current' => 0],
        ['text' => 'fans', 'url' => '#', 'current' => 0],
        ['text' => 'news', 'url' => '#', 'current' => 0],
        ['text' => 'shop', 'url' => '#', 'current' => 0],
    ];
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
    return view('characters', compact('links', 'footerBuyLinks', 'upperFooterLinks'));
})->name('characters');
