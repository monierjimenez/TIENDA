<?php

namespace App\Http\Livewire\Carts;

use App\ShoppingCart;
use App\ShoppingCartDetail;
//use App\Spec;

use Livewire\Component;

class Carts extends Component
{
    public $shoppingcartdetails;
    public $shopping_cart;
    public $total_price_products;
    public $total_save_mony;

    public function mount($shoppingcartdetails)
    {
        $this->shoppingcartdetails = $shoppingcartdetails;
        $this->total_price_products = 0;
        $this->total_save_mony = 0;
    }

    public function render()
    {
        if ( session('shopping_cart_id') ) {
            $this->shoppingcartdetails = ShoppingCartDetail::where('shopping_cart_id', '=', session('shopping_cart_id'))->get();
        }
        $this->total_save_mony = $this->total_save_mony();
        $this->total_price_products = $this->total_price_products();
        return view('livewire.carts.carts');
    }

    public function total_save_mony()
    {
        $this->total_save_mony = 0;
        foreach ($this->shoppingcartdetails as $key => $this->shopping_cart_details) {
            $this->total_save_mony += $this->shopping_cart_details->save * $this->shopping_cart_details->quantity;
        }
        return $this->total_save_mony;
    }

    public function total_price_products(){
        $this->total_price_products = 0 ;
        foreach ( $this->shoppingcartdetails as $key => $this->shopping_cart_details ){
            $this->total_price_products += $this->shopping_cart_details->price * $this->shopping_cart_details->quantity ;
        }
        return $this->total_price_products;
    }

    public function delete($id)
    {
        if (ShoppingCartDetail::find($id) != '') {
            ShoppingCartDetail::find($id)->delete();
            session()->flash('flash', 'successfully removed');
        } else {
            session()->flash('flasherror', 'Could not delete, contact developers');
        }
        session()->flash('flash', 'successfully removed');

        $this->emit('CartsDetails');
    }
}
