<?php

namespace App\Http\Controllers;

use App\Spec;
use App\Product;
use App\ShoppingCart;
use App\ShoppingCartDetail;
use Illuminate\Http\Request;

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
        //return $request->quant['1'];
       // return $request ;
        if( $product->spec != '[]' && $product->colore_id != null ){
            $spec = Spec::find($request->modelo);
            $shopping_cart = ShoppingCart::get_the_session_shopping_cart();
            $shopping_cart->shopping_cart_details()->create([
                'product_id' => $product->id,
                'quantity' => $request->quant['1'],
                'price' => $spec->sale_price,
                'modelo' => $request->modelo,
                'color' => $request->color,
            ]);
        }elseif( $product->spec != '[]' && $product->colore_id == null ){
            $spec = Spec::find($request->modelo);
            $shopping_cart = ShoppingCart::get_the_session_shopping_cart();
            $shopping_cart->shopping_cart_details()->create([
                'product_id' => $product->id,
                'quantity' => $request->quant['1'],
                'price' => $spec->sale_price,
                'modelo' => $request->modelo,
                'color' => '0',
            ]);
        }elseif( $product->spec == '[]' && $product->colore_id != null ){
            $spec = Spec::find($request->modelo);
            $shopping_cart = ShoppingCart::get_the_session_shopping_cart();
            $shopping_cart->shopping_cart_details()->create([
                'product_id' => $product->id,
                'quantity' => $request->quant['1'],
                'price' => $spec->sale_price,
                'modelo' => '0',
                'color' => $request->color,
            ]);
        }else{
            $shopping_cart = ShoppingCart::get_the_session_shopping_cart();
            $shopping_cart->shopping_cart_details()->create([
                'product_id' => $product->id,
                'quantity' => $request->quant['1'],
                'price' => $product->sale_price,
                'modelo' => '0',
                'color' => '0',
            ]);
        }
        return back();
    }

    public function store_a_product(Request $request, Product $product)
    {
        $shopping_cart = ShoppingCart::get_the_session_shopping_cart();
        $shopping_cart->shopping_cart_details()->create([
            'product_id' => $product->id,
            'quantity' => '1',
            'price' => $product->sale_price,
            'modelo' => '0',
            'color' => '0',
        ]);
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
