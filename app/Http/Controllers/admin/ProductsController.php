<?php

namespace App\Http\Controllers\admin;

use App\Brand;
use App\Modelp;
use App\Product;
use App\Category;
use App\Colore;
use App\Finance;
use App\Spec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
   public function index()
    {
        if (!in_array('PUPV', explode(".", auth()->user()->permissions)))
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
            'categorie_id' => '',
            'colore_id' => '',
            'cost_price' => '0',
            'sale_price_before' => '0',
            'sale_price' => '0',
            'shipping_price' => '0',
            'bulk_weight' => '0',
            'number_packages' => '0',
            'stock' => '0',
            'description' => '',
            'brand' => '',
            'model' => '',
            'features' => '',
            'payment_cuba' => '',
            'sku' => $request->get('sku'),
            'seotitle' => '',
            'seodescription' => '',
            'seokeywords' => '',
            'condition' => '0',
            'products_id' => '',
        ]);
        generaRecords('Product created', 'Product has been created successfully, for '. auth()->user()->name .'.');
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
        $colores = Colore::where('condition','=', '0')->get();
        $brands = Brand::all();
        $models = Modelp::all();
        $productsall = Product::where('id', '!=', $product->id)->where('condition', '=', '0')->get();
       // return $products ;
        return view('admin.products.edit', compact('product', 'productsall', 'categorys', 'colores', 'brands', 'models'));
    }

    public function update(Request $request, Product $product)
    {
        //return $request ;
        $this->validate($request, [
            'sku' => 'required',
            'name' => 'required',
            'categorie_id' => 'required',
            'number_packages' => 'numeric',
            'seotitle' => 'required',
            'seodescription' => 'required',
            'seokeywords' => 'required',
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
            } else $product->colore_id = null;

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
            'name' => $request->input('name'),
            'cost_price' => $request->input('cost_price'),
            'sale_price_before' => $request->input('sale_price_before'),
            'sale_price' => $request->input('sale_price'),
            'shipping_price' => $request->input('shipping_price'),
            'bulk_weight' => $request->input('bulk_weight'),
            'number_packages' => $request->input('number_packages'),
            'description' => $request->input('description'),
            'features' => $request->input('features'),
            'payment_cuba' => $request->input('payment_cuba'),
            'condition' => $request->input('condition'),
            'sku' => strtoupper(str_replace(" ", "-", $request->sku)),
            'seotitle' => $request->input('seotitle'),
            'seodescription' => $request->input('seodescription'),
            'seokeywords' => $request->input('seokeywords'),
            ]);
        $product->save();

        generaRecords('Produt update', 'Product updated successfully, for '. auth()->user()->name .'.');
        return redirect()->route('admin.products.edit', $product)->with('flash', 'Product has been updated successfully.');
    }

    public function productcombo(Request $request)
    {
        $product = Product::find($request->input('product_id')) ;

        if ( $request->input('products_id') != null )
        {
            $cantiad = cantProductoCombo($product->products_id) ;
            $colore = '';
            $cant = count($request->input('products_id'));
            $cont = 1 ;
            $pp = null;
            foreach ($request->input('products_id') as $colores ){
                if( $cant > $cont )
                    $pp = $colores.'.'.$pp;
                else
                    $pp = $pp.$colores;
                $cont++;
            }
            $product->products_id = $pp;
            //return dd(cantProductoCombo($product->products_id) ) ;
            if( $cantiad > $cant ) {
                $flash = 'flash';
                $mensage = 'Product delete to the combo.';
            }else {
                $flash = 'flash';
                $mensage = 'Product successfully added to the combo.';
            }
        }else {
            if ( $product->products_id != '' ){
                $flash = 'flash';
                $mensage = 'Products delete to the combo.';
            }else{
                $flash = 'flasherror';
                $mensage = 'You have not added products to this combo.';
            }
            $product->products_id = '';
        }
        $product->save();
        generaRecords('Produt add', 'Product successfully added to the combo, for '. auth()->user()->name .'.');
        return redirect()->route('admin.products.edit', $product)->with($flash, $mensage);
    }

    public function productStock(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric',
            'cost_price' => 'required',
        ]);

        $product = Product::find($request->input('productstock_id')) ;
        $product->stock = $request->input('amount')+$product->stock;
        $product->save();

        $finance = Finance::find(1);
        $finance->update([
            'gastos' => $finance->gastos + ($request->input('cost_price')*$request->input('amount')),
        ]);

        generaRecords('Produt Stock', 'Product successfully increased by '.$request->input('amount').', at cost '.$request->input('cost_price').', for '. auth()->user()->name .'.');
        return redirect()->route('admin.products.edit', $product)->with('flash', 'Product successfully increased');


        // $product = Finance::find($request->input('product_id')) ;
//        $equiposasociado = Finance::create([
//            'gastos' => '0',
//            'ventas' => '0',
//            'ganancia' => '0',
//        ]);
    }

    public function productStockVariante(Request $request)
    {
       // return $request;
        $this->validate($request, [
            'amount' => 'required|numeric',
            'cost_price' => 'required',
        ]);

        $spec = Spec::find($request->input('productvariantestock_id')) ;
        $spec->stock = $request->input('amount')+$spec->stock;
        $spec->save();

        $finance = Finance::find(1);
        $finance->update([
            'gastos' => $finance->gastos + ($request->input('cost_price')*$request->input('amount')),
        ]);

        generaRecords('Spec Stock', 'Spec successfully increased by '.$request->input('amount').', at cost '.$request->input('cost_price').', for '. auth()->user()->name .'.');
        return redirect()->route('admin.specs.edit', $spec)->with('flash', 'Spec successfully increased');
    }

//    public function updateProductCombo(Request $request, Product $product)
//    {
//        // return $request ;
//        $this->validate($request, [
//            'sku' => 'required',
//            'name' => 'required',
//            'categorie_id' => 'required',
//            //'email' => ['required', Rule::unique('users')->ignore($user->id)],
//        ]);
//
//        if ( $request->input('colore_id') != null )
//        {
//            $colore = '';
//            $cant = count($request->input('colore_id'));
//            $cont = 1 ;
//            $pp = null;
//            foreach ($request->input('colore_id') as $colores ){
//                $colore = Colore::find($colores) ? $colores
//                    : Colore::create(['name' => $colores])->id;
//
//                if( $cant > $cont )
//                    $pp = $colore.'.'.$pp;
//                else
//                    $pp = $pp.$colore;
//                $cont++;
//            }
//            $product->colore_id = $pp;
//        }
//
//        $product->update([
//            'sku' => strtoupper(str_replace(" ", "-", $request->sku)),
//            'condition' => $request->input('condition'),
//        ]);
//        $product->save();
//
//        //$product->update($data) ;
//
//        // generaRecords('User updated', 'User ' .$user->name. ', updated successfully, for '. auth()->user()->name .'.');
//        //return back()->with('flash', 'User has been updated successfully.');
//        return redirect()->route('admin.products.edit', $product)->with('flash', 'Product has been updated successfully.');
//    }
//
//    public function destroy(User $user)
//    {
//        $user->delete();
//        generaRecords('User removed', 'User has been successfully removed, for '. auth()->user()->name .'.');
//        return redirect()->route('admin.users.index')->with('flash', 'User has been successfully removed.');
//    }
}
