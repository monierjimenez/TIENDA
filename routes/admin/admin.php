<?php
use Illuminate\Support\Facades\Route;

//ROUTE THE ADMINISTRATOR
    // para acceder a la administracion
    Route::get('/', 'AdminController@index')->name('admin');
    //USER
    Route::resource('users', 'UsersController', ['as' => 'admin']);
    //ROLE
    Route::resource('roles', 'RolesController', ['as' => 'admin']);

    //PRODUCTS
    Route::resource('products', 'ProductsController', ['as' => 'admin']);
    Route::get('productsall', 'ProductsController@productcombo')->name('admin.productcombo');

    //movimientos
    Route::get('records-users', 'RecordController@index')->name('admin.records');
    //rutas datatables ajax
    Route::get('record/generales', 'RecordController@recordGeneral');

    //photo articulos
    Route::post('products/{product}/photos', 'PhotosController@store')->name('admin.products.photos.store');
    Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photos.destroy');

//Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'auth'],  function(){
//});

