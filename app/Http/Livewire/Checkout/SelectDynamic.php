<?php

namespace App\Http\Livewire\Checkout;
use Livewire\Component;

use App\Estados;
use App\Municipios;

class SelectDynamic extends Component
{
    public $name ;
    public $shopping_cart;
    public $order;
    public $addressesorder ;
    public $selectedEstado  ;
    public $selectedMunicipio = null ;
    public $municipios = null;

    public function mount()
    {
        if ( $this->order->selectedEstado != '' ){
            $this->selectedEstado = $this->order->selectedEstado;
            $this->selectedMunicipio = $this->order->selectedMunicipio;
        }else{
            $this->selectedEstado = $this->selectedEstado;
            $this->selectedMunicipio = $this->selectedMunicipio;
        }
    }

    public function render()
    {
        return view('livewire.checkout.select-dynamic', [
            'estados' => Estados::all()
        ]);
    }

    public function updatedselectedEstado($estado_id)
    {
        $this->selectedEstado = $estado_id;
        $this->municipios = Municipios::where('estado_id', '=', $estado_id)->get();
    }
}
