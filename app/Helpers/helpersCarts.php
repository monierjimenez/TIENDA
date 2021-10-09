<?php
    //use App\User;
    //use App\Record;
    //use App\Product;
    //use App\Colore;
    //use App\Spec;
    //use Cookie;

    use App\ShoppingCart;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;

    function productCartIS($id, $idProduct){
        $idDetailsProduct = false ;
        $shopping_cart = ShoppingCart::find($id);
        foreach ( $shopping_cart->shopping_cart_details as $shopping_cart_details ){
            if ( $shopping_cart_details->product_id == $idProduct ){
                $idDetailsProduct = $shopping_cart_details->id;
                break;
            }
        }
        return $idDetailsProduct;
    }

    function shoppingCartGuest(){
        if (!session()->has('shopping_cart_id')) {
            if (Cookie::get('shopping_cart_id')) {
                $session_name = 'shopping_cart_id';
                $shopping_cart_id = Session::get($session_name);
                $shopping_cart = ShoppingCart::findOrCreateBySessionId(Cookie::get('shopping_cart_id'));
                Session::put($session_name, $shopping_cart->id);
                // $view->with('shopping_cart', $shopping_cart);
            } else {
                $session_name = 'shopping_cart_id';
                $shopping_cart_id = Session::get($session_name);
                $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
                Session::put($session_name, $shopping_cart->id);
                // $view->with('shopping_cart', $shopping_cart);
                Cookie::queue('shopping_cart_id', $shopping_cart->id, time() + (10 * 365 * 24 * 60 * 60));
            }
        } else {
            $shopping_cart = ShoppingCart::find(session('shopping_cart_id'));
            if (!Cookie::get('shopping_cart_id'))
                Cookie::queue('shopping_cart_id', $shopping_cart->id, time() + (10 * 365 * 24 * 60 * 60));
        }
        return $shopping_cart ;
    }
