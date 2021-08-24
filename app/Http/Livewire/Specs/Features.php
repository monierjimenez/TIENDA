<?php

namespace App\Http\Livewire\Specs;

use App\Featurespec;
use Livewire\Component;

class Features extends Component
{
    public $spec;
    public $name;
    public $idspec;
    public $a;

    public function mount($spec)
    {
        $this->idspec = $spec->id;
        $this->a = 5;
    }

    public function render()
    {
        return view('livewire.specs.features', [
            'featurespecs' => Featurespec::where('id_specs', '=', $this->idspec)->get(), $this->a
        ]);
    }

    public function addFeatures()
    {
        $this->validate(
            ['name' => 'required'],
        );
        Featurespec::create([
                'name' => $this->name,
                'url' => $this->name,
                'id_specs' => $this->idspec,
                'condition' => '0'
            ]);
        $this->name = '';
        session()->flash('flash', 'hola');
    }

    public function delete($id)
    {
       if ( Featurespec::find($id) != '' ){
           Featurespec::find($id)->delete();
           session()->flash('flash', 'successfully removed');
       }else session()->flash('flasherror', 'Could not delete contact developers');
    }
}
