<?php

namespace App\Http\Controllers;

use App\Addresses;
use App\Municipios;
use App\User;
use Cookie;
use App\Order;
use App\ShoppingCart;

//use App\Services\PayPalService;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function paypalPayment($orderId)
    {
        $client = new Client([
            'base_uri' => 'https://api-m.sandbox.paypal.com'
        ]);
        return 6;
    }

    public function index()
    {
        if ( Auth::guest() ){
            return redirect()->route('login');
        }else{
            $shopping_cart = ShoppingCart::find(session('shopping_cart_id'));
            if( $shopping_cart->shopping_cart_details == '[]' ){
                return redirect()->route('pages.cart');
            }else{
                $order = Order::where('user_id', '=', auth()->user()->id)->where('paymentstatus', '=', 'PENDING')->get();
                if( $order == '[]' )
                {
                    $order = Order::create([
                        'paymentstatus' => 'PENDING',
                        'orderstatus' => 'CREATED',
                        'user_id' => auth()->user()->id,
                        'addresses_id' => null,
                    ]);
                }else{
                    $order = Order::find($order[0]['id']);
                    if( $order->addresses_id != null ){
                        $addressesorder = Addresses::find($order->addresses_id);
                        if( $addressesorder->selectedMunicipio != null ){
                            $municipios = Municipios::where('estado_id', '=', $addressesorder->selectedEstado)->get();
                        }
                    }else{
                        $addressesorder = '';
                        $municipios = null;
                    }
                    $addressess = Addresses::where('user_id', '=', auth()->user()->id)->get();
                }
                return view('pages.checkout', compact('shopping_cart', 'order', 'addressess', 'addressesorder', 'municipios'));
            }
        }
    }

    public function saveDirection(Request $request)
    {
        if ( Auth::guest() ){
            return redirect()->route('login');
        }
        $this->validate($request, [
            'name' => 'required',
            'last_name' => 'required',
            'identity_card' => 'required|numeric',
            'phone_number' => 'required|numeric',
            'address' => 'required',
            'numero' => 'required',
            'selectedEstado' => 'required|numeric',
            'selectedMunicipio' => 'required|numeric',
            'payment' => 'required',
        ]);

        $order = Order::find($request->get('order_id'));
        if( $order->addresses_id == null ) {
            $addresses = Addresses::create([
                'user_id' => auth()->user()->id,
                'name' => $request->get('name'),
                'second_name' => $request->get('second_name'),
                'last_name' => $request->get('last_name'),
                'identity_card' => $request->get('identity_card'),
                'phone_number' => $request->get('phone_number'),
                'address' => $request->get('address'),
                'numero' => $request->get('numero'),
                'apto' => $request->get('apto'),
                'entre_calle' => $request->get('entre_calle'),
                'reparto' => $request->get('reparto'),
                'selectedEstado' => $request->get('selectedEstado'),
                'selectedMunicipio' => $request->get('selectedMunicipio'),
                'status' => 1,
            ]);
            $order->update([
                'addresses_id' => $addresses->id,
            ]);

            dd(4);
        }else {

            $addresses = Addresses::find($order->addresses_id);
            $addresses->update([
                'user_id' => auth()->user()->id,
                'name' => $request->get('name'),
                'second_name' => $request->get('second_name'),
                'last_name' => $request->get('last_name'),
                'identity_card' => $request->get('identity_card'),
                'phone_number' => $request->get('phone_number'),
                'address' => $request->get('address'),
                'numero' => $request->get('numero'),
                'apto' => $request->get('apto'),
                'entre_calle' => $request->get('entre_calle'),
                'reparto' => $request->get('reparto'),
                'selectedEstado' => $request->get('selectedEstado'),
                'selectedMunicipio' => $request->get('selectedMunicipio'),
                'status' => 1,
            ]);
            $addresses->save();
        }
        $shopping_cart = ShoppingCart::find(session('shopping_cart_id'));
        $payment = $request->payment ;
        return view('pages.checkout-payment', compact('order','addresses', 'payment', 'shopping_cart'));

        //return $request ;
    }

    public function resolveService()
    {
       // $name = strtolower($this->paymentPlatforms->firstWhere('id', $paymentPlatformId)->name);

        $service = config("services.paypal.class");
        //dd(resolve($service));
        if ($service) {
            return resolve($service);
        }

        //throw new Exception('The selected payment platform is not in the configuration');
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


