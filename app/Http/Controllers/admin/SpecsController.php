<?php

namespace App\Http\Controllers\admin;

use App\Product;
use App\Spec;
use App\Http\Requests\StoreRoleRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SpecsController extends Controller
{
    public function index()
    {
        if ( !in_array('PUSPV', explode(".", auth()->user()->permissions)) )
            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');

        $specs = Spec::where('condition', '=', '0')->get();
    	return view('admin.specs.index', compact('specs'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['reference' => 'required']); //|unique:specs,reference'
        $spec = Spec::create([
            'product_id' => $request->get('productspecs_id'),
            'reference' => $request->get('reference'),
            'name' => '',
            'cost_price' => '0',
            'sale_price_before' => '0',
            'sale_price' => '0',
            'bulk_weight' => '0',
            'number_packages' => '0',
            'url' => Str::slug($request->get('reference')),
            'condition' => '1',
            'stock' => '0',
        ]);
        generaRecords('Reference created', 'Reference has been created successfully, for '. auth()->user()->name .'.');
        return redirect()->route('admin.specs.edit', $spec);
    }

    public function edit(Spec $spec)
    {
        if ( !in_array('PUSPE', explode(".", auth()->user()->permissions)) )
            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');

//        if ( $spec->condition == 0 ){
            $product = Product::find($spec->product_id);
            return view('admin.specs.edit', compact('spec', 'product'));
//        }else {
//            $specs = Spec::where('condition', '=', '0')->get();
//            return redirect()->route('admin.specs.index', compact('specs'));
//            //return view('admin.specs.index', compact('specs'));
//        }
    }

    public function update(Request $request, Spec $spec)
    {
        $rules = [
            'reference' => 'required',
            'name' => 'required|unique:specs,name',
            'number_packages' => 'numeric'
        ];
        $data = $request->validate($rules);
        $spec->update($data) ;
        generaRecords('Reference updated', 'Reference successfully updated, for '. auth()->user()->name .'.');
        return redirect()->route('admin.specs.edit', $spec)->with('flash', 'Reference successfully updated.');
    }

    public function destroy(Spec $spec)
    {
        if ( !in_array('PUSPD', explode(".", auth()->user()->permissions)) )
            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');

        $spec->condition = '1';
        $spec->save();
        //$spec->delete();
        return redirect()->route('admin.specs.index')->with('flash', 'Reference has been successfully removed.');
    }

    public function addFeaturesSpecs(Request $request)
    {
        return $request;
//        if ( !in_array('PUSPD', explode(".", auth()->user()->permissions)) )
//            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');
//
//        $spec->condition = '1';
//        $spec->save();
//        //$spec->delete();
//        return redirect()->route('admin.specs.index')->with('flash', 'Reference has been successfully removed.');
    }
}
