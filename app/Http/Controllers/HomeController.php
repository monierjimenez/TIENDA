<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Colore;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorys = Category::where('condition', '=', '0')->get();
        $products = Product::where('condition', '=', '0')->inRandomOrder()->limit(15)->get();
        return view('welcome', compact('categorys', 'products'));
    }

    public function collectionsProduct(Category $category)
    {
        $products = Product::where('categorie_id', '=', $category->id)->get();
        $categorys = Category::where('condition', '=', '0')->get();
        //return redirect()->route('collections', $product);
        return view('pages.collectionsProduct', compact('categorys','products', 'category'));
    }

    public function productdetails($categorie, Product $product)
    {
        $products = Product::where('id', '$=', $product->id)->inRandomOrder()->limit(1)->get();


        return view('pages.product-details', compact('product','products'));
    }
}
