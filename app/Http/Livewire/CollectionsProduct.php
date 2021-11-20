<?php

namespace App\Http\Livewire;

use App\Product;
use App\Category;

use Livewire\Component;

class CollectionsProduct extends Component
{
    public $categorys;
    public $products;
    public $idP;

    public function render()
    {
        sleep(1);
        return view('livewire.collections-product');
    }

    public function collectionsCategory($idP)
    {
        $this->products = Product::where('condition', '=', '0')->where('categorie_id', '=', $idP)->get();
    }
}
