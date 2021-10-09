<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
//use App\Colore;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        if ( Auth::guest() ){
            return redirect()->route('login');
        }else{
            dd('hello world');
        }
        return view('welcome');
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
