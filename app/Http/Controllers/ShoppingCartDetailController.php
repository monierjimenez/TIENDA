<?php

namespace App\Http\Controllers;

use App\Spec;
use App\Product;
use App\ShoppingCart;
use App\ShoppingCartDetail;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class ShoppingCartDetailController extends Controller
{
//    public function index()
//    {
//        //
//    }

//    public function create()
//    {
//        //
//    }

    public function store(Request $request, Product $product)
    {
        $save = '0';
        if( $product->sale_price_before != 0 )
            $save = $product->sale_price_before - $product->sale_price ;

        $shopping_cart = ShoppingCart::get_the_session_shopping_cart();

        if( $product->spec != '[]' && $product->colore_id != null ){
            $spec = Spec::find($request->modelo);
            $shopping_cart->shopping_cart_details()->create([
                'product_id' => $product->id,
                'quantity' => $request->quant['1'],
                'price' => $spec->sale_price,
                'save' => $save,
                'modelo' => $request->modelo,
                'color' => $request->color,
            ]);
        }elseif( $product->spec != '[]' && $product->colore_id == null ){
            $spec = Spec::find($request->modelo);
            $shopping_cart->shopping_cart_details()->create([
                'product_id' => $product->id,
                'quantity' => $request->quant['1'],
                'price' => $spec->sale_price,
                'save' => $save,
                'modelo' => $request->modelo,
                'color' => '0',
            ]);
        }elseif( $product->spec == '[]' && $product->colore_id != null ){
            $spec = Spec::find($request->modelo);
            $shopping_cart->shopping_cart_details()->create([
                'product_id' => $product->id,
                'quantity' => $request->quant['1'],
                'price' => $product->sale_price,
                'save' => $save,
                'modelo' => '0',
                'color' => $request->color,
            ]);
        }else{
            //$product_shopping_cart = ShoppingCartDetail::where('product_id', '=', '00')->get();
            $product_shopping_cart = ShoppingCartDetail::where( 'product_id', '=', $product->id)->where('shopping_cart_id', '=', $shopping_cart->id)->get();
            $product_shopping_cart = ShoppingCartDetail::find($product_shopping_cart[0]['id']);
            if ( $product_shopping_cart == '[]' )
            {
                $shopping_cart->shopping_cart_details()->create([
                    'product_id' => $product->id,
                    'quantity' => $request->quant['1'],
                    'price' => $product->sale_price,
                    'save' => $save,
                    'modelo' => '0',
                    'color' => '0',
                ]);
            }else{
                //return $product_shopping_cart[0]['quantity'].'u';
                //$product_shopping_cart->update([
                $product_shopping_cart->update([
                    'quantity' => $product_shopping_cart->quantity+$request->quant['1'],
                    'price' => $product->sale_price,
                    'save' => $product_shopping_cart->save+$save,
                ]);
                //$product_shopping_cart->save();
            }

        }
        return back();
    }

    public function store_a_product(Request $request, Product $product)
    {
        $shopping_cart = ShoppingCart::get_the_session_shopping_cart();
        $save = '0';
        if( $product->sale_price_before != 0 )
            $save = $product->sale_price_before - $product->sale_price ;

        $product_shopping_cart = ShoppingCartDetail::where( 'product_id', '=', $product->id)->where('shopping_cart_id', '=', $shopping_cart->id)->get();
        $product_shopping_cart = ShoppingCartDetail::find($product_shopping_cart[0]['id']);
        if ( $product_shopping_cart == '[]' ) {
            $shopping_cart->shopping_cart_details()->create([
                'product_id' => $product->id,
                'quantity' => '1',
                'price' => $product->sale_price,
                'save' => $save,
                'modelo' => '0',
                'color' => '0',
            ]);
        }else{
            $product_shopping_cart->update([
                'quantity' => $product_shopping_cart->quantity+1,
                'price' => $product->sale_price,
                'save' => $product_shopping_cart->save+$save,
            ]);
        }
        return back();
    }

//    public function show(ShoppingCartDetail $shoppingCartDetail)
//    {
//        //
//    }
//
//    public function edit(ShoppingCartDetail $shoppingCartDetail)
//    {
//        //
//    }

    public function update(Request $request, ShoppingCartDetail $shoppingCartDetail)
    {
        //
    }

    public function destroy(ShoppingCartDetail $shoppingCartDetail)
    {
        //
    }
}
