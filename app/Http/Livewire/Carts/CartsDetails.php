<?php

namespace App\Http\Livewire\Carts;

use App\ShoppingCart;
use App\ShoppingCartDetail;

use Livewire\Component;

class CartsDetails extends Component
{
    public $categorysList;
    public $total_price_products;
    public $shoppingcartdetails;
    public $quantity_of_products;

    protected $listeners = [
        'CartsDetails'
    ];

    public function render()
    {
        if ( session('shopping_cart_id') ) {
            $this->shoppingcartdetails = ShoppingCartDetail::where('shopping_cart_id', '=', session('shopping_cart_id'))->get();
        }
        $this->total_price_products = $this->total_price_products();
        $this->quantity_of_products = $this->quantity_of_products();
        return view('livewire.carts.carts-details');
    }

    public function CartsDetails()
    {
        $this->render();
    }

    public function total_price_products()
    {
        $this->total_price_products = 0;
        foreach ($this->shoppingcartdetails as $key => $this->shopping_cart_details) {
            $this->total_price_products += $this->shopping_cart_details->price * $this->shopping_cart_details->quantity;
        }
        return $this->total_price_products;
    }

    public function quantity_of_products(){
        //dd($this->shoppingcartdetails->sum('quantity'));
        return $this->shoppingcartdetails->sum('quantity');
    }
}
