<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
//use Cookie;

use Illuminate\Http\Request;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //if( request()->path() != 'login' )
       //     Cookie::queue('bakcURL', request()->path(), time() + (10 * 365 * 24 * 60 * 60));
        View::composer(['layouts.header'], 'App\Http\ViewComposers\CategoryList');
    }
}
