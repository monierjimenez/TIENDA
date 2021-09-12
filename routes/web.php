<?php

use Illuminate\Support\Facades\Route;

//    Route::get('/', function () {
//        return view('welcome');
//    });

    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

    Auth::routes();
  //  Route::get('login1', 'HomeController@index')->name('login1');
  //  Route::get('welcome', 'HomeController@index')->name('welcome');

    Route::get('/', 'HomeController@index')->name('welcome');

// Route::get('/admin', 'HomeController@admin')->name('admin');

//Auth::routes();

Route::get('collectionsProduct/{category}', 'HomeController@collectionsProduct')->name('collections');
Route::get('product/{category}/{product}', 'HomeController@productdetails')->name('productdetails');

Route::get('about', 'HomeController@about')->name('pages.about');
Route::get('terms-and-conditions', 'HomeController@termsandconditions')->name('pages.terms-and-conditions');
Route::get('refunds', 'HomeController@refunds')->name('pages.refunds');

