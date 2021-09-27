<?php

    namespace App\Http\ViewComposers;

    use Cookie;

    use App\ShoppingCart;
    use Illuminate\View\View;
    use Illuminate\Support\Facades\Session;

    class CartShopping
    {
        public function compose(View $view)
        {
            //dd(Cookie::get('shopping_cart_id'));
            //Cookie::queue('shopping_cart_id', '112', 60);
           // if( Cookie::get('shopping_cart_id') ) dd(1); else dd(2);

            if ( !session()->has('shopping_cart_id') ) {
                if( Cookie::get('shopping_cart_id') ){
                    $session_name = 'shopping_cart_id';
                    $shopping_cart_id = Session::get($session_name);
                    $shopping_cart = ShoppingCart::findOrCreateBySessionId(Cookie::get('shopping_cart_id'));
                    Session::put($session_name, $shopping_cart->id);
                    $view->with('shopping_cart', $shopping_cart);
                }else{
                    $session_name = 'shopping_cart_id';
                    $shopping_cart_id = Session::get($session_name);
                    $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
                    Session::put($session_name, $shopping_cart->id);
                    $view->with('shopping_cart', $shopping_cart);

                    Cookie::queue('shopping_cart_id', $shopping_cart->id, time() + (10 * 365 * 24 * 60 * 60));
                }
            } else { $shopping_cart = ShoppingCart::find(session('shopping_cart_id')); Cookie::queue('shopping_cart_id', $shopping_cart->id, time() + (10 * 365 * 24 * 60 * 60)); }

            $view->with(['shopping_cart' => $shopping_cart]);
        }
    }
