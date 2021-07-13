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

    $dc_comics_links = [
        [
            "text" => "Characters",
            "url" => "/"
        ],
        [
            "text" => "Comics",
            "url" => "/"
        ],
        [
            "text" => "Movies",
            "url" => "/"
        ],
        [
            "text" => "TV",
            "url" => "/"
        ],
        [
            "text" => "Games",
            "url" => "/"
        ],
        [
            "text" => "Videos",
            "url" => "/"
        ],
        [
            "text" => "News",
            "url" => "/"
        ]
    ];

    $shop_links = [
        [
            "text" => "Shop DC",
            "url" => "/"
        ],
        [
            "text" => "Shop DC Collectibles",
            "url" => "/"
        ]
    ];

    $dc_links = [
        [
            "text" => "Terms Of Use",
            "url" => "/"
        ],
        [
            "text" => "Privacy Policy (New)",
            "url" => "/"
        ],
        [
            "text" => "Ad Choice",
            "url" => "/"
        ],
        [
            "text" => "Advertising",
            "url" => "/"
        ],
        [
            "text" => "Jobs",
            "url" => "/"
        ],
        [
            "text" => "Subscriptions",
            "url" => "/"
        ],
        [
            "text" => "Talent Workshop",
            "url" => "/"
        ],
        [
            "text" => "CPSC Certificates",
            "url" => "/"
        ],
        [
            "text" => "Ratings",
            "url" => "/"
        ],
        [
            "text" => "Shop Help",
            "url" => "/"
        ],
        [
            "text" => "Contact Us",
            "url" => "/"
        ]
    ];

    $cities_links = [
        [
            "text" => "DC",
            "url" => "/"
        ],
        [
            "text" => "MAD Magazine",
            "url" => "/"
        ],
        [
            "text" => "DC Kids",
            "url" => "/"
        ],
        [
            "text" => "DC Universe",
            "url" => "/"
        ],
        [
            "text" => "DC Power Visa",
            "url" => "/"
        ]
    ];

    $socials = [
        [
            "name" => "Facebook",
            "image" => "/img/footer-facebook.png",
            "url" => "/"
        ],
        [
            "name" => "Twitter",
            "image" => "/img/footer-twitter.png",
            "url" => "/"
        ],
        [
            "name" => "Youtube",
            "image" => "/img/footer-youtube.png",
            "url" => "/"
        ],
        [
            "name" => "Pintares",
            "image" => "/img/footer-pinterest.png",
            "url" => "/"
        ],
        [
            "name" => "Periscope",
            "image" => "/img/footer-periscope.png",
            "url" => "/"
        ]
    ];

    return view('home', [
        "cards" => $cards,
        "blue_menu_links" => $blue_menu_links,
        "header_menu" => $header_menu,
        "dc_comics_links" => $dc_comics_links,
        "shop_links" => $shop_links,
        "dc_links" => $dc_links,
        "cities_links" => $cities_links,
        "socials" => $socials
    ]);
});

Route::get('/movies', function () {

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

    $dc_comics_links = [
        [
            "text" => "Characters",
            "url" => "/"
        ],
        [
            "text" => "Comics",
            "url" => "/"
        ],
        [
            "text" => "Movies",
            "url" => "/"
        ],
        [
            "text" => "TV",
            "url" => "/"
        ],
        [
            "text" => "Games",
            "url" => "/"
        ],
        [
            "text" => "Videos",
            "url" => "/"
        ],
        [
            "text" => "News",
            "url" => "/"
        ]
    ];

    $shop_links = [
        [
            "text" => "Shop DC",
            "url" => "/"
        ],
        [
            "text" => "Shop DC Collectibles",
            "url" => "/"
        ]
    ];

    $dc_links = [
        [
            "text" => "Terms Of Use",
            "url" => "/"
        ],
        [
            "text" => "Privacy Policy (New)",
            "url" => "/"
        ],
        [
            "text" => "Ad Choice",
            "url" => "/"
        ],
        [
            "text" => "Advertising",
            "url" => "/"
        ],
        [
            "text" => "Jobs",
            "url" => "/"
        ],
        [
            "text" => "Subscriptions",
            "url" => "/"
        ],
        [
            "text" => "Talent Workshop",
            "url" => "/"
        ],
        [
            "text" => "CPSC Certificates",
            "url" => "/"
        ],
        [
            "text" => "Ratings",
            "url" => "/"
        ],
        [
            "text" => "Shop Help",
            "url" => "/"
        ],
        [
            "text" => "Contact Us",
            "url" => "/"
        ]
    ];

    $cities_links = [
        [
            "text" => "DC",
            "url" => "/"
        ],
        [
            "text" => "MAD Magazine",
            "url" => "/"
        ],
        [
            "text" => "DC Kids",
            "url" => "/"
        ],
        [
            "text" => "DC Universe",
            "url" => "/"
        ],
        [
            "text" => "DC Power Visa",
            "url" => "/"
        ]
    ];

    $socials = [
        [
            "name" => "Facebook",
            "image" => "/img/footer-facebook.png",
            "url" => "/"
        ],
        [
            "name" => "Twitter",
            "image" => "/img/footer-twitter.png",
            "url" => "/"
        ],
        [
            "name" => "Youtube",
            "image" => "/img/footer-youtube.png",
            "url" => "/"
        ],
        [
            "name" => "Pintares",
            "image" => "/img/footer-pinterest.png",
            "url" => "/"
        ],
        [
            "name" => "Periscope",
            "image" => "/img/footer-periscope.png",
            "url" => "/"
        ]
    ];

    return view('movies', [
        "header_menu" => $header_menu,
        "dc_comics_links" => $dc_comics_links,
        "shop_links" => $shop_links,
        "dc_links" => $dc_links,
        "cities_links" => $cities_links,
        "socials" => $socials
    ]);
});

Route::get('/characters', function () {

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

    $dc_comics_links = [
        [
            "text" => "Characters",
            "url" => "/"
        ],
        [
            "text" => "Comics",
            "url" => "/"
        ],
        [
            "text" => "Movies",
            "url" => "/"
        ],
        [
            "text" => "TV",
            "url" => "/"
        ],
        [
            "text" => "Games",
            "url" => "/"
        ],
        [
            "text" => "Videos",
            "url" => "/"
        ],
        [
            "text" => "News",
            "url" => "/"
        ]
    ];

    $shop_links = [
        [
            "text" => "Shop DC",
            "url" => "/"
        ],
        [
            "text" => "Shop DC Collectibles",
            "url" => "/"
        ]
    ];

    $dc_links = [
        [
            "text" => "Terms Of Use",
            "url" => "/"
        ],
        [
            "text" => "Privacy Policy (New)",
            "url" => "/"
        ],
        [
            "text" => "Ad Choice",
            "url" => "/"
        ],
        [
            "text" => "Advertising",
            "url" => "/"
        ],
        [
            "text" => "Jobs",
            "url" => "/"
        ],
        [
            "text" => "Subscriptions",
            "url" => "/"
        ],
        [
            "text" => "Talent Workshop",
            "url" => "/"
        ],
        [
            "text" => "CPSC Certificates",
            "url" => "/"
        ],
        [
            "text" => "Ratings",
            "url" => "/"
        ],
        [
            "text" => "Shop Help",
            "url" => "/"
        ],
        [
            "text" => "Contact Us",
            "url" => "/"
        ]
    ];

    $cities_links = [
        [
            "text" => "DC",
            "url" => "/"
        ],
        [
            "text" => "MAD Magazine",
            "url" => "/"
        ],
        [
            "text" => "DC Kids",
            "url" => "/"
        ],
        [
            "text" => "DC Universe",
            "url" => "/"
        ],
        [
            "text" => "DC Power Visa",
            "url" => "/"
        ]
    ];

    $socials = [
        [
            "name" => "Facebook",
            "image" => "/img/footer-facebook.png",
            "url" => "/"
        ],
        [
            "name" => "Twitter",
            "image" => "/img/footer-twitter.png",
            "url" => "/"
        ],
        [
            "name" => "Youtube",
            "image" => "/img/footer-youtube.png",
            "url" => "/"
        ],
        [
            "name" => "Pintares",
            "image" => "/img/footer-pinterest.png",
            "url" => "/"
        ],
        [
            "name" => "Periscope",
            "image" => "/img/footer-periscope.png",
            "url" => "/"
        ]
    ];

    return view('characters', [
        "header_menu" => $header_menu,
        "dc_comics_links" => $dc_comics_links,
        "shop_links" => $shop_links,
        "dc_links" => $dc_links,
        "cities_links" => $cities_links,
        "socials" => $socials
    ]);
});

