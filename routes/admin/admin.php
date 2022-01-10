<?php
use Illuminate\Support\Facades\Route;

//ROUTE THE ADMINISTRATOR
    // para acceder a la administracion
    Route::get('/', 'AdminController@index')->name('admin');
    //USER
    Route::resource('users', 'UsersController', ['as' => 'admin']);
    //ROLE
    Route::resource('roles', 'RolesController', ['as' => 'admin']);

    //SLIDERS
    Route::resource('sliders', 'SlidersController', ['except' => ['show', 'create'], 'as' => 'admin']);
    Route::post('sliders/{slider}/photos', 'PhotosController@storeslider')->name('admin.sliders.photos.store');

    //PRODUCTS
    Route::resource('products', 'ProductsController', ['as' => 'admin']);
    Route::get('productsall', 'ProductsController@productcombo')->name('admin.productcombo');
    Route::get('productstock', 'ProductsController@productStock')->name('admin.productstock');
    Route::get('productstockvariante', 'ProductsController@productStockVariante')->name('admin.productstockvariante');

    //SPECS
    Route::resource('specs', 'SpecsController', ['as' => 'admin']);

    //movimientos
    Route::get('records-users', 'RecordController@index')->name('admin.records');
    //rutas datatables ajax
    Route::get('record/generales', 'RecordController@recordGeneral');

    //Orders
    //Route::get('orders', 'OrdersController@index')->name('orders');
    Route::resource('orders', 'OrdersController', ['except' => ['create'], 'as' => 'admin']);
    Route::get('order/generales', 'OrdersController@orderGeneral');

    Route::resource('forgottenorders', 'OrdersforgottenController', ['except' => ['create'], 'as' => 'admin']);
    Route::get('order/ordersforgotten', 'OrdersforgottenController@orderGeneral');

    //photo articulos
    Route::post('products/{product}/photos', 'PhotosController@store')->name('admin.products.photos.store');
    Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photos.destroy');

    //Colores
    Route::resource('colores', 'ColoresController', ['except' => ['show', 'create'], 'as' => 'admin']);
    Route::resource('categorias', 'CategoriasController', ['except' => ['show', 'create'], 'as' => 'admin']);

    //delivery
    Route::resource('states', 'EstadosController', ['except' => ['show', 'create'], 'as' => 'admin']);
    Route::resource('municipios', 'MunicipiosController', ['except' => ['show', 'create'], 'as' => 'admin']);

//Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'auth'],  function(){
//});

