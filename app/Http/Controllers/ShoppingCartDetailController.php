<?php

namespace App\Http\Controllers;

use App\Spec;
use App\Product;
use App\ShoppingCart;
use App\ShoppingCartDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        //cuando tiene color y modelos
        if( $product->spec != '[]' && $product->colore_id != null ){
            //dd(444);
            $spec = Spec::find($request->modelo);
            $product_shopping_cart = ShoppingCartDetail::where( 'product_id', '=', $product->id)->where('shopping_cart_id', '=', $shopping_cart->id)
                ->where('modelo', '=', $request->modelo)->where('color', '=', $request->color)->get();

            if( $spec->sale_price_before != 0 )
                $save = $spec->sale_price_before - $spec->sale_price ;

            if ( $product_shopping_cart == '[]' ) {
                $shopping_cart->shopping_cart_details()->create([
                    'product_id' => $product->id,
                    'quantity' => $request->quant['1'],
                    'price' => $spec->sale_price,
                    'save' => $save,
                    'modelo' => $request->modelo,
                    'color' => $request->color,
                ]);
                //$this->statusCarts($shopping_cart);
            }else{
                $product_shopping_cart = ShoppingCartDetail::find($product_shopping_cart[0]['id']);
                $product_shopping_cart->update([
                    'quantity' => $product_shopping_cart->quantity+$request->quant['1'],
                ]);
            }
        }elseif( $product->spec != '[]' && $product->colore_id == null ){
            //cuando tiene modelo y no color
            $spec = Spec::find($request->modelo);
            $product_shopping_cart = ShoppingCartDetail::where( 'product_id', '=', $product->id)->where('shopping_cart_id', '=', $shopping_cart->id)
                ->where('modelo', '=', $request->modelo)->where('color', '=', '0')->get();

            if( $spec->sale_price_before != 0 )
                $save = $spec->sale_price_before - $spec->sale_price ;

            if ( $product_shopping_cart == '[]' ) {
                $shopping_cart->shopping_cart_details()->create([
                    'product_id' => $product->id,
                    'quantity' => $request->quant['1'],
                    'price' => $spec->sale_price,
                    'save' => $save,
                    'modelo' => $request->modelo,
                    'color' => '0',
                ]);
                //$this->statusCarts($shopping_cart);
            }else{
                $product_shopping_cart = ShoppingCartDetail::find($product_shopping_cart[0]['id']);
                $product_shopping_cart->update([
                    'quantity' => $product_shopping_cart->quantity+$request->quant['1'],
                ]);
            }
        }elseif( $product->spec == '[]' && $product->colore_id != null ){
            //cuando tiene color y no model
            $product_shopping_cart = ShoppingCartDetail::where( 'product_id', '=', $product->id)->where('shopping_cart_id', '=', $shopping_cart->id)
               ->where('color', '=', $request->color)->get();
            if( $product->sale_price_before != 0 )
                $save = $product->sale_price_before - $product->sale_price ;

            if ( $product_shopping_cart == '[]' ) {
                $shopping_cart->shopping_cart_details()->create([
                    'product_id' => $product->id,
                    'quantity' => $request->quant['1'],
                    'price' => $product->sale_price,
                    'save' => $save,
                    'modelo' => $product->model,
                    'color' => $request->color,
                ]);
                //$this->statusCarts($shopping_cart);
            }else{
                $product_shopping_cart = ShoppingCartDetail::find($product_shopping_cart[0]['id']);
                $product_shopping_cart->update([
                    'quantity' => $product_shopping_cart->quantity+$request->quant['1'],
                ]);
            }
        }else{
            //cuando es un producto normal sin modelo y sin color
            $product_shopping_cart = ShoppingCartDetail::where( 'product_id', '=', $product->id)->where('shopping_cart_id', '=', $shopping_cart->id)->get();
            if ( $product_shopping_cart == '[]' )
            {
                $shopping_cart->shopping_cart_details()->create([
                    'product_id' => $product->id,
                    'quantity' => $request->quant['1'],
                    'price' => $product->sale_price,
                    'save' => $save,
                    'modelo' => $product->model,
                    'color' => '0',
                ]);
                //$this->statusCarts($shopping_cart);
            }else{
                $product_shopping_cart = ShoppingCartDetail::find($product_shopping_cart[0]['id']);
                $product_shopping_cart->update([
                    'quantity' => $product_shopping_cart->quantity+$request->quant['1'],
                ]);
                //$product_shopping_cart->save();
            }
        }
        return back();
    }

    public function store_a_product(Request $request, Product $product)
    {
        //dd($product);
        $shopping_cart = ShoppingCart::get_the_session_shopping_cart();
        //dd($shopping_cart);
        $save = '0';
        if( $product->sale_price_before != 0 )
            $save = $product->sale_price_before - $product->sale_price ;

        $product_shopping_cart = ShoppingCartDetail::where( 'product_id', '=', $product->id)->where('shopping_cart_id', '=', $shopping_cart->id)->get();
        if ( $product_shopping_cart == '[]' ) {
            $shopping_cart->shopping_cart_details()->create([
                'product_id' => $product->id,
                'quantity' => '1',
                'price' => $product->sale_price,
                'save' => $save,
                'modelo' => $product->model,
                'color' => '0',
            ]);
            //$this->statusCarts($shopping_cart);
        }else{
            $product_shopping_cart = ShoppingCartDetail::find($product_shopping_cart[0]['id']);
            $product_shopping_cart->update([
                'quantity' => $product_shopping_cart->quantity+1,
                'price' => $product->sale_price,
                'save' => $product_shopping_cart->save+$save,
            ]);
        }
        return back();
    }

//    public function statusCarts($shopping_cart)
//    {
//        //if ( $shopping_cart->status )
//        if ( Auth::guest() && $shopping_cart->status == 'ACTIVE' ){
//            $shopping_cart->update([
//                'status' => 'PENDING',
//            ]);
//        }
//    }


//    guest
//        creo carrito
//        creo variable session
//        creo cookie
//        status ACTIVADO
//    user registrado
//        pongo id user a carrito
//        status PENDIENTE
//
//se fue el user y entro como guest se actualiza el carrito a

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
