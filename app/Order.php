<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    protected $dates = ['order_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estados::class, 'selectedEstado');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipios::class, 'selectedMunicipio');
    }

    public function shopping_cart()
    {
        return $this->belongsTo(ShoppingCart::class, 'shopping_cart_id');
    }

    public function order_detail()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function getResultslLink()
    {
        return route('pages.myorder') ;
    }

    public function quantity_of_order(){
        $priceTotal = 0 ;
        foreach ( $this->order_detail as $orderdetail ){
            if ( $orderdetail->spec == null ){
                if( $orderdetail->sale_price_product != 0 )
                    $priceTotal += $orderdetail->sale_price_product*$orderdetail->cant_product;
                else
                    $priceTotal += $orderdetail->price_product*$orderdetail->cant_product;
            }else{
                if( $orderdetail->spec->sale_price_before != 0 )
                    $priceTotal += $orderdetail->spec->sale_price_before*$orderdetail->cant_product;
                else
                    $priceTotal += $orderdetail->spec->sale_price*$orderdetail->cant_product;
            }
        }
        return $priceTotal;
    }

    public function total_save_mony_order()
    {
        $total_save_mony = 0;
        foreach ($this->order_detail as $key => $orderdetail) {
            $total_save_mony += $orderdetail->save_product;
        }
        return $total_save_mony;
    }

    public function total_price_products(){
        $total = 0 ;
        foreach ( $this->order_detail as $key => $order_detail ){
            $total += $order_detail->price_product * $order_detail->cant_product ;
        }
        return $total;
    }

    public function total_profit_order(){
        $profit_sale = 0 ;

        foreach ( $this->order_detail as $orderdetail ){

            if ( $orderdetail->spec == null ){
                $profit_sale += ($orderdetail->price_product-$orderdetail->product->cost_price)*$orderdetail->cant_product ;
            }else{
                //dd($orderdetail->spec->cost_price);
                $profit_sale += ($orderdetail->price_product-$orderdetail->spec->cost_price)*$orderdetail->cant_product ;
            }
        }
        return $profit_sale;
    }
    public static function quantity_of_orders(){
        return $this->sum('amount_total');
    }
}
