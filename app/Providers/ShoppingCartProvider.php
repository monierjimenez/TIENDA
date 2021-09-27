<?php

namespace App\Providers;

use App\ShoppingCart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class ShoppingCartProvider extends ServiceProvider
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
        View::composer(['layouts.header'], 'App\Http\ViewComposers\CartShopping');

//        view()->composer("*", function ($view){
//            //dd($shopping_cart_id);
//            if ( !session()->has('shopping_cart_id') ){
//                //dd(0);
//                $session_name = 'shopping_cart_id';
//                $shopping_cart_id = Session::get($session_name);
//                $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
//                Session::put($session_name, $shopping_cart->id);
//                $view->with('shopping_cart', $shopping_cart);
//            }else {
//               // $session_name = 'shopping_cart_id';
//              //  $shopping_cart_id = Session::get($session_name);
//                $shopping_cart = session('shopping_cart_id');
//               // Session::put($session_name, $shopping_cart->id);
//                $view->with('shopping_cart', $shopping_cart);
//            }

//            $session_name = 'shopping_cart_id';
//            if ( !session()->has('shopping_cart_id') )
//           {
//               $shopping_cart_id = Session::get($session_name);
//               //dd($shopping_cart_id);
//               $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
//               //dd($shopping_cart) ;
//               Session::put($session_name, $shopping_cart->id);
//               $view->with('shopping_cart', $shopping_cart);
//           }
//        });
    }
}
