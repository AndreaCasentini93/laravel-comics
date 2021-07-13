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

    $cards = config('comics');

    $blue_menu_links = [
        [
            "image" => '/img/buy-comics-digital-comics.png',
            "text" => "Digital Comics",
            "url" => "/"
        ],
        [
            "image" => '/img/buy-comics-merchandise.png',
            "text" => "DC Merchandise",
            "url" => "/"
        ],
        [
            "image" => '/img/buy-comics-shop-locator.png',
            "text" => "Subscription",
            "url" => "/"
        ],
        [
            "image" => '/img/buy-comics-subscriptions.png',
            "text" => "Comic Shop Locator",
            "url" => "/"
        ],
        [
            "image" => '/img/buy-dc-power-visa.svg',
            "text" => "DC Power Visa",
            "url" => "/"
        ]
    ];

    $header_menu = [
        [
            "text" => "Characters",
            "url" => "/",
            "active" => false,
            "scroll" => false
        ],
        [
            "text" => "Comics",
            "url" => "/",
            "active" => true,
            "scroll" => false
        ],
        [
            "text" => "Movies",
            "url" => "/",
            "active" => false,
            "scroll" => false
        ],
        [
            "text" => "TV",
            "url" => "/",
            "active" => false,
            "scroll" => false
        ],
        [
            "text" => "Games",
            "url" => "/",
            "active" => false,
            "scroll" => false
        ],
        [
            "text" => "Collectibles",
            "url" => "/",
            "active" => false,
            "scroll" => false
        ],
        [
            "text" => "Videos",
            "url" => "/",
            "active" => false,
            "scroll" => false
        ],
        [
            "text" => "Fans",
            "url" => "/",
            "active" => false,
            "scroll" => false
        ],
        [
            "text" => "News",
            "url" => "/",
            "active" => false,
            "scroll" => false
        ],
        [
            "text" => "Shop",
            "url" => "/",
            "active" => false,
            "scroll" => true
        ]
    ];

    return view('comics', [
        "cards" => $cards,
        "blue_menu_links" => $blue_menu_links,
        "header_menu" => $header_menu
    ]);
});
