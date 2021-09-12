<?php

namespace App\Http\Livewire\Specs;

use App\Featurespec;
use App\Spec;
use Livewire\Component;

use Livewire\WithFileUploads;

class Features extends Component
{
    use WithFileUploads;

    public $reference;
    public $spec;
    public $name;
    public $idspec;
    public $cost_price;
    public $sale_price_before;
    public $sale_price;
    public $bulk_weight;
    public $condition;
    public $photo;
    public $stock;

    public function mount($spec)
    {
        $this->idspec = $spec->id;
        $this->reference = $spec->reference;
        $this->name = $spec->name;
        $this->cost_price = $spec->cost_price;
        $this->sale_price_before = $spec->sale_price_before;
        $this->sale_price = $spec->sale_price;
        $this->bulk_weight = $spec->bulk_weight;
        $this->condition = $spec->condition;
        $this->image = $spec->image;
        $this->stock = $spec->stock;
    }

    public function render()
    {
        return view('livewire.admin.specs.features');
    }

    //, [
    //            'featurespecs' => Featurespec::where('id_specs', '=', $this->idspec)->get()
    //        ]
    public function addFeatures()
    {
        $spec = Spec::find($this->idspec);
        $this->validate(
            [
                'reference' => 'required',
                'name' => 'required|unique:specs,name,'.$spec->id,
                'cost_price' => 'required|numeric',
                'sale_price_before' => 'required|numeric',
                'sale_price' => 'required|numeric',
                'bulk_weight' => 'required',
                //'photo' => 'image|max:1024',
            ]//$this->validate($request, ['codigo_producto' => 'required|unique:articulos,codigo_producto,'.$chip->id]);
        );

        //dd($this->photo);
        if( $this->photo != '' ){
            if (  $spec->image != '' )
                unlink(public_path().'/images/'.$spec->image);
            $url = $this->photo->store('specs');
            $spec->update([
                'image' => $url,
            ]);
        }
        $spec->update([
            'name' => $this->name,
            'reference' => $this->reference,
            'cost_price' => $this->cost_price,
            'sale_price_before' => $this->sale_price_before,
            'sale_price' => $this->sale_price,
            'bulk_weight' => $this->bulk_weight,
            'condition' => $this->condition,
        ]);
        $spec->save();
        session()->flash('flash', 'Spec save successfully');
    }

    public function delete($id)
    {
       if ( Featurespec::find($id) != '' ){
           Featurespec::find($id)->delete();
           session()->flash('flash', 'successfully removed');
       }else session()->flash('flasherror', 'Could not delete, contact developers');
    }
}
