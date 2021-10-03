<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = [
        'status', 'user_id', 'order_date',
    ];

    public function shopping_cart_details()
    {
        return $this->hasMany(ShoppingCartDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function findOrCreateBySessionId($shopping_cart_id)
    {
       if ( $shopping_cart_id ){
           return ShoppingCart::find($shopping_cart_id);
       }else{
           $shopping_cart = ShoppingCart::create();
           return $shopping_cart;
       }
    }

    public function quantity_of_products(){
        return $this->shopping_cart_details->sum('quantity');
    }

    public function total_price_products(){
        $total = 0 ;
        foreach ( $this->shopping_cart_details as $key => $shopping_cart_details ){
            $total += $shopping_cart_details->price * $shopping_cart_details->quantity ;

        }
        return $total;
    }

//    public function total_save_mony(){
//        $total = 0 ;
//        foreach ( $this->shopping_cart_details as $key => $shopping_cart_details ){
//                $total += $shopping_cart_details->save*$shopping_cart_details->quantity ;
//        }
//        return $total;
//    }

    public static function get_the_session_shopping_cart(){
        return ShoppingCart::findOrCreateBySessionId(session('shopping_cart_id'));
    }
}
