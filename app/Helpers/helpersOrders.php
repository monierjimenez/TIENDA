<?php
    use App\ShoppingCart;
    use App\DetailsOrderClient;

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;


    function giveMeOrders($order, $value){
        $cant = DetailsOrderClient::select('cant')->where('type', $value)->where('order_id', $order)->get();
        if( $cant != '[]' )
            return $cant[0]['cant'];
        else  return '0';
    }
