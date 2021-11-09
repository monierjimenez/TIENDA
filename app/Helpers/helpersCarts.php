<?php
   // use App\Order;
    //use App\Modelp;
    use App\ShoppingCart;
    use App\OrderDetails;

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;

    //function for save details product whats in on purchase
    function shoppingCartDetails($shopping_cart, $idOrder){

        foreach ( $shopping_cart->shopping_cart_details as $shopping_cart_details ){
            //dd($shopping_cart_details->product->spec);
            if ( $shopping_cart_details->product->spec == '[]'){
                if ( $shopping_cart_details->modelo != null )
                    $modelo_product =  $shopping_cart_details->modelp->name ;
                else {
                    $modelo_product = 0 ;
                }

                if ($shopping_cart_details->product->sale_price_before != 0)
                    $save_price = ($shopping_cart_details->product->sale_price_before - $shopping_cart_details->product->sale_price)*$shopping_cart_details->quantity;
                else
                    $save_price = 0;

                $profit_sale = ($shopping_cart_details->product->sale_price-$shopping_cart_details->product->cost_price)*$shopping_cart_details->quantity ;
            }
           else{
               $modelo_product = $shopping_cart_details->spec->name;

               if ($shopping_cart_details->spec->sale_price_before != 0)
                   $save_price = ($shopping_cart_details->spec->sale_price_before - $shopping_cart_details->spec->sale_price)*$shopping_cart_details->quantity;
               else
                   $save_price = 0;

               $profit_sale = ($shopping_cart_details->spec->sale_price-$shopping_cart_details->spec->cost_price)*$shopping_cart_details->quantity ;
           }

           if ( $shopping_cart_details->save != 0 )
               $sale_price_product = $shopping_cart_details->price+$shopping_cart_details->save ;
           else
               $sale_price_product = 0 ;

           if ( $shopping_cart_details->color != 0 ) $color = $shopping_cart_details->colore->name; else $color = 0;

           $orderDetails = OrderDetails::create([
               'order_id' => $idOrder,
               'product_id' => $shopping_cart_details->product_id,
               'name_product' => $shopping_cart_details->product->name,
               'category_product' => $shopping_cart_details->product->categorie->name,
               'cant_product' => $shopping_cart_details->quantity,
               'price_product' => $shopping_cart_details->price,
               'sale_price_product' => $sale_price_product,
               'save_product' => $save_price,
               'profit_sale' => $profit_sale,
               'model_product' => $modelo_product,
               'color_product' => $color,
               'sku_product' => $shopping_cart_details->product->sku,
               'brand_product' => $shopping_cart_details->product->brand != 0 ? $shopping_cart_details->product->brands[0]['name'] : 0,
           ]);
        }
        //return true;
    }

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
            if( $shopping_cart->user_id != null ){
                Session::forget('shopping_cart_id') ;
                $session_name = 'shopping_cart_id';
                $shopping_cart_id = Session::get($session_name);
                $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
                Session::put($session_name, $shopping_cart->id);
                Cookie::queue('shopping_cart_id', $shopping_cart->id, time() + (10 * 365 * 24 * 60 * 60));
            }else{
                if (!Cookie::get('shopping_cart_id'))
                    Cookie::queue('shopping_cart_id', $shopping_cart->id, time() + (10 * 365 * 24 * 60 * 60));
            }
        }
        return $shopping_cart ;
    }
