<?php

use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();
  //  Route::get('login1', 'HomeController@index')->name('login1');
    Route::get('welcome', 'HomeController@index')->name('welcome');

// Route::get('/admin', 'HomeController@admin')->name('admin');


