<?php

use Illuminate\Support\Facades\Route;

//    Route::get('/', function () {
//        return view('welcome');
//    });

    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

    Auth::routes();

    Route::get('/', 'HomeController@index')->name('welcome');

    Route::get('collectionsProduct/{category}', 'HomeController@collectionsProduct')->name('collections');
    Route::get('product/{category}/{product}', 'HomeController@productdetails')->name('productdetails');

    Route::get('about', 'HomeController@about')->name('pages.about');
    Route::get('terms-and-conditions', 'HomeController@termsandconditions')->name('pages.terms-and-conditions');
    Route::get('refunds', 'HomeController@refunds')->name('pages.refunds');

// Route::get('/admin', 'HomeController@admin')->name('admin');
