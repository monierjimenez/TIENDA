<?php

namespace App\Http\Controllers;

//use App\Category;
use App\Product;
use App\ShoppingCartDetail;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct()
    {
      //  $this->middleware('auth');
    }


    public function cart()
    {
//        $products = Product::where('id', '=', session('shopping_cart_id'))get();
//        $products = ShoppingCartDetail::with("product", "product.spec")
//            ->where('shopping_cart_id', '=', session('shopping_cart_id'))
//            ->get() ;

        $shoppingcartdetails = ShoppingCartDetail::where('shopping_cart_id', '=', session('shopping_cart_id'))
            ->get() ;
        $nam = '';
//        foreach ( $products->product as $product )
//        {
//            $nam = $name."-".$product->name ;
//        }
        //return $products ;
        return view('pages.shopping-cart', compact('shoppingcartdetails'));
    }

//    public function collectionsProduct(Category $category)
//    {
//        $products = Product::where('categorie_id', '=', $category->id)->get();
//        $categorys = Category::where('condition', '=', '0')->get();
//        //return redirect()->route('collections', $product);
//        return view('pages.collectionsProduct', compact('categorys','products', 'category'));
//    }
//
//    public function productdetails($categorie, Product $product)
//    {
//        $products = Product::where('id', '!=', $product->id)->inRandomOrder()->limit(10)->get();
//        return view('pages.product-details', compact('product','products'));
//    }
//
//    public function collectionsAll(Category $category)
//    {
//        $categorys = Category::where('condition', '=', '0')->get();
//        return view('pages.collectionsAll', compact('categorys'));
//    }
//
//    //Pages informativas
//    public function about(){
//        return view('pages.about');
//    }
//    public function termsandconditions(){
//        return view('pages.terms-and-conditions');
//    }
//    public function refunds(){
//        return view('pages.refunds');
//    }
//
//    public function search(Request $request){
//      //  if ( $request->search ) return 1 ; else return 2;
//      //  return $request ;
//        if ( $request->category == 0 ) {
//            if ( $request->search != null)
//                $products = Product::where('name', 'LIKE', '%' . $request->search . '%')->limit(25)->get();
//            else
//                $products = '[]';
//        }else
//            $products = Product::where('categorie_id', 'LIKE', '%'.$request->category.'%')->where('name', 'LIKE', '%'.$request->search.'%')->limit(25)->get();
//       // return $products;
//        return view('pages.productSearch', compact('products'));
//    }
}
