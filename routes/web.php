<?php

use Illuminate\Support\Facades\Route;

//    Route::get('/', function () {
//        return view('welcome');
//    });

    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
    Auth::routes();

    Route::get('/', 'HomeController@index')->name('welcome');
    Route::get('search', 'HomeController@search')->name('search');

    Route::get('collectionsProduct/{category}', 'HomeController@collectionsProduct')->name('collections');
    Route::get('collections', 'HomeController@collectionsAll')->name('collectionsall');
    Route::get('product/{category}/{product}', 'HomeController@productdetails')->name('productdetails');

    Route::get('about', 'HomeController@about')->name('pages.about');
    Route::get('terms-and-conditions', 'HomeController@termsandconditions')->name('pages.terms-and-conditions');
    Route::get('refunds', 'HomeController@refunds')->name('pages.refunds');

    //Rutas del carrito de compras
    Route::resource('shopping_cart_detail', 'ShoppingCartDetailController')
        ->only(['update', 'destroy'])->names('shopping_cart_details');
    Route::get('cart', 'CartController@cart')->name('pages.cart');

    //rotas checkout
    Route::get('checkout', 'CheckoutController@index')->name('pages.checkout');

    Route::post('add_to_shopping_cart/{product}/store', 'ShoppingCartDetailController@store')->name('shopping_cart_details.store');
    Route::get('add_a_product_to_shopping_cart/{product}/store', 'ShoppingCartDetailController@store_a_product')->name('store_a_product.store');


    //Route::resource('products', 'ProductsController', ['as' => 'admin']);
    // Route::get('/admin', 'HomeController@admin')->name('admin');
