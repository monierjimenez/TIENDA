<?php
use Illuminate\Support\Facades\Route;
//    Route::get('/', function () {
//        return view('welcome');
//    });

    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
    Auth::routes();

    Route::get('/', 'HomeController@index')->name('welcome');
    Route::get('search', 'HomeController@search')->name('search');
    //route collection and category
    Route::get('collectionsProduct/{category}', 'HomeController@collectionsProduct')->name('collections');
    Route::get('collections', 'HomeController@collectionsAll')->name('collectionsall');
    Route::get('product/{category}/{product}', 'HomeController@productdetails')->name('productdetails');
    //pages static site
    Route::get('about', 'HomeController@about')->name('pages.about');
    Route::get('terms-and-conditions', 'HomeController@termsandconditions')->name('pages.terms-and-conditions');
    Route::get('refunds', 'HomeController@refunds')->name('pages.refunds');

    //rutas ordenes
    Route::get('myorders', 'OrderController@index')->name('pages.myorder');
    Route::get('myorders/{order}', 'OrderController@show')->name('pages.myorder.details');

    //Rutas del carrito de compras
    Route::resource('shopping_cart_detail', 'ShoppingCartDetailController')
        ->only(['update', 'destroy'])->names('shopping_cart_details');
    Route::get('cart', 'CartController@cart')->name('pages.cart');
    Route::post('add_to_shopping_cart/{product}/store', 'ShoppingCartDetailController@store')->name('shopping_cart_details.store');
    Route::get('add_a_product_to_shopping_cart/{product}/store', 'ShoppingCartDetailController@store_a_product')->name('store_a_product.store');
    //rutas checkout
    Route::get('checkout', 'CheckoutController@index')->name('pages.checkout');
    Route::post('checkout', 'CheckoutController@saveDirection')->name('pages.checkout.direction');

    //pagos paypal
    Route::get('paypal/process/{orderId}', 'CheckoutController@paypalPayment')->name('paypalPayment');

    //Route::get('paypal/process/{orderId}', 'CheckoutController@paypalPayment')->name('paypalPayment');
    //Route::resource('products', 'ProductsController', ['as' => 'admin']);
    // Route::get('/admin', 'HomeController@admin')->name('admin');
