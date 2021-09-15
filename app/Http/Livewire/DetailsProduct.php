<?php

namespace App\Http\Livewire;

use App\Spec;
use Livewire\Component;

class DetailsProduct extends Component
{
    public $product;
    public $id_product;
    public $modelo ;
    public $modeloactalizado;
    //public $specss ;

    public function mount($product)
    {
        $this->id_product = $product->id;
        $this->modelo = $this->dameSpesc($this->id_product);
    }

    public function render()
    {
        $this->modeloactalizado = Spec::find($this->modelo);
        return view('livewire.details-product');
    }

    public function dameSpesc(){
        $esp = Spec::where('product_id', '=', $this->id_product)->min('sale_price', 'id');
        $esp1 = Spec::where('sale_price', '=', $esp)->where('product_id', '=', $this->id_product)->get();
        foreach ( $esp1 as $item) {
            return $item->id;
        }
        //return $esp1 ;
    }

}
