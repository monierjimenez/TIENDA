<?php

namespace App\Http\Controllers\admin;

use App\Brand;
use App\Modelp;
use App\Product;
use App\Category;
use App\Colore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index()
    {
        if ( !in_array('PUPV', explode(".", auth()->user()->permissions)) )
            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');

        $products = Product::all();
    	return view('admin.products.index', compact('products'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['sku' => 'required|unique:products,sku']);

        $product = Product::create([
            'name' => '',
            'url' => Str::slug($request->get('sku')),
            'cost_price' => '0',
            'sale_price_before' => '0',
            'sale_price' => '0',
            'shipping_price' => '0',
            'bulk_weight' => '0',
            'color' => '',
            'stock' => '0',
            'description' => '',
            'brand' => '',
            'model' => '',
            'features' => '',
            'payment_cuba' => '',
            'sku' => $request->get('sku'),
        ]);

        return redirect()->route('admin.products.edit', $product);
    }

//    public function show(User $user)
//    {
//        //$foto = $user->photos;
//        if ( !in_array('PUV', explode(".", auth()->user()->permissions)) )
//            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');
//
//        return view('admin.users.show', compact('user'));
//    }
//
    public function edit(Product $product)
    {
        if ( !in_array('PUPE', explode(".", auth()->user()->permissions)) )
            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');

        $categorys = Category::all();
        $colores = Colore::all();
        $brands = Brand::all();
        $models = Modelp::all();
        return view('admin.products.edit', compact('product','categorys', 'colores', 'brands', 'models'));
    }

    public function update(Request $request, Product $product)
    {
        //return $request ;
        $this->validate($request, [
            'sku' => 'required',
            'name' => 'required',
            'categorie_id' => 'required',
            //'email' => ['required', Rule::unique('users')->ignore($user->id)],
        ]);

            $product->categorie_id = Category::find($cat = $request->input('categorie_id'))
            ? $cat
            : Category::create([
                'name' => $cat
            ])->id;

            if ( $request->input('colore_id') != null )
            {
                $colore = '';
                $cant = count($request->input('colore_id'));
                $cont = 1 ;
                $pp = null;
                foreach ($request->input('colore_id') as $colores ){
                    $colore = Colore::find($colores) ? $colores
                        : Colore::create(['name' => $colores])->id;

                    if( $cant > $cont )
                        $pp = $colore.'.'.$pp;
                    else
                        $pp = $pp.$colore;
                    $cont++;
                }
                $product->colore_id = $pp;
            }

            if ( $request->input('brand') != null )
            {
                $product->brand = Brand::find($cat = $request->input('brand'))
                    ? $cat
                    : Brand::create(['name' => $cat])->id;
            } else $product->brand = '' ;

            if ( $request->input('model') != null )
            {
                $product->model = Modelp::find($cat = $request->input('model')) ? $cat
                    : Modelp::create([
                        'name' => $cat,
                        'brand_id' => $product->brand
                    ])->id;
            } else $product->model = '' ;

            $product->update([
            'sku' => strtoupper(str_replace(" ", "-", $request->sku)),
            'name' => $request->input('name'),
            ]);
        $product->save();

        //$product->update($data) ;

       // generaRecords('User updated', 'User ' .$user->name. ', updated successfully, for '. auth()->user()->name .'.');
        //return back()->with('flash', 'User has been updated successfully.');
        return redirect()->route('admin.products.edit', $product)->with('flash', 'Product has been updated successfully.');
    }
//
//    public function destroy(User $user)
//    {
//        $user->delete();
//        generaRecords('User removed', 'User has been successfully removed, for '. auth()->user()->name .'.');
//        return redirect()->route('admin.users.index')->with('flash', 'User has been successfully removed.');
//    }
}
