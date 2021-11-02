<?php

namespace App\Http\Controllers;

use App\Addresses;
use App\Municipios;
use App\User;
use Cookie;
use App\Order;
use App\ShoppingCart;

use Illuminate\Support\Facades\Session;

use Carbon\Carbon;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    private $client;
    private $clientId;
    private $secret;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api-m.sandbox.paypal.com'
        ]);
        $this->clientId = env('PAYPAL_CLIENT_ID');
        $this->secret = env('PAYPAL_SECRET');
    }

    private function getAccessToken()
    {
        $response = $this->client->request('POST', '/v1/oauth2/token', [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => 'grant_type=client_credentials',
                'auth' => [
                    $this->clientId, $this->secret, 'basic'
                ]
            ]
        );
        $data = json_decode($response->getBody(), true);
        return $data['access_token'];
    }

    public function paypalPayment($orderId, Request $request)
    {
        $accessToken = $this->getAccessToken();
        $requestUrl = "/v2/checkout/orders/$orderId/capture";
        $response = $this->client->request('POST', $requestUrl, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer $accessToken"
            ]
        ]);
        //return (string) ($response->getBody());
        $data = json_decode($response->getBody(), true);
        if ($data['status'] === 'COMPLETED')
        {
            // Obtener el paymentId y el monto pagado, de $data
            $payPalPaymentId = $data['purchase_units'][0]['payments']['captures'][0]['id'];
            $currency_code = $data['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'];
            $amount = $data['purchase_units'][0]['payments']['captures'][0]['amount']['value'];
            $paypal_fee = $data['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['paypal_fee']['value'];

            // actualizar orden del usuario
            $orderID = $request->input('orderID');
            $order = Order::findOrFail($orderID);
            $order->update([
                'paymentstatus' => 'PAID',
                'orderstatus' => 'SHIPMENT',
                'transaction_id' => $payPalPaymentId,
                'currency_code' => $currency_code,
                'amount_total' => $amount,
                'amount_fi' => $paypal_fee,
                'order_date' => Carbon::parse(date('m/d/Y G:i:s')),
            ]);
            $order->save();

            $shopping_cart = ShoppingCart::find($order->shopping_cart_id);
            $shopping_cart->update([
                'status' => 'FINISHED',
            ]);
            $shopping_cart->save();

            //guardar los detallles del carrito a la hora del pago
                //$shopping_cart->shopping_cart_details
            //save shooping cart details

            //crear un carrito nuevo para este usuario, y actualizar la cookie y la session
            $shopping_cart = ShoppingCart::create([
                'status' => 'PENDING',
                'user_id' => auth()->user()->id,
            ]);
            Session::forget('shopping_cart_id') ;
            $shopping_cart_id = Session::get('shopping_cart_id');
            Session::put('shopping_cart_id', $shopping_cart->id);
            Cookie::queue('shopping_cart_id', $shopping_cart->id, time() + (10 * 365 * 24 * 60 * 60));

            return $data ;

//
//            // Registrar un pago exitoso en la BD
//            $payment = $this->registerSuccessfulPayment($solution, $amount, $payPalPaymentId);
//
//            // Dar una respuesta de error si el pago no se pudo registrar
//            if (!$payment) {
//                return $this->responseFailure();
//            }
//
//            Dar una respuesta de exito si
//            return [
//                'success' => true,
//                'url' => $solution->getResultsLink(),
//                'payment_id' => $payment->id,
//                'amount' => $amount
//            ];
        } else return 1 ;
    }

    public function index()
    {
      //  dd(Carbon::parse(date('m/d/Y G:i:s')) );
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
                        'shopping_cart_id' => session('shopping_cart_id'),
                        'addresses_id' => null,
                        'transaction_id' => null,
                        'currency_code' => null,
                        'amount_total' => 0,
                        'amount_fi' => 0,
                    ]);
                    //$addressesorder = '';
                    $municipios = null;
                }else{
                    $order = Order::find($order[0]['id']);
                   // if( $order->addresses_id != null ){
                        //$addressesorder = Addresses::find($order->addresses_id);
                        if( $order->selectedMunicipio != null ){
                            $municipios = Municipios::where('estado_id', '=', $order->selectedEstado)->get();
                        //}
                    }else{
                        //$addressesorder = '';
                        $municipios = null;
                    }
                }
               // $addressess = Addresses::where('user_id', '=', auth()->user()->id)->get(); , 'addressess'
                //$addressesorder = '';
                return view('pages.checkout', compact('shopping_cart', 'order', 'municipios'));
            }
        }
    }

    public function saveDirection(Request $request)
    {
        //return $request ;
        if ( Auth::guest() ){
            return redirect()->route('login');
        }
        $this->validate($request, [
            'name' => 'required',
            'last_name' => 'required',
            'identity_card' => 'required|numeric|digits:11',
            'phone_number' => 'required|numeric',
            'address' => 'required',
            'numero' => 'required',
            'selectedEstado' => 'required|numeric',
            'selectedMunicipio' => 'required|numeric',
            'payment' => 'required',
        ]);

       // if ( $request->get('selectedEstado1') != '' ) $estado = $request->get('selectedEstado1') ; else $estado = $request->get('selectedEstado') ;

        $order = Order::find($request->get('order_id'));
        $order->update([
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
                'payment_method' => $request->get('payment'),
        ]);
        $order->save();

        $shopping_cart = ShoppingCart::find(session('shopping_cart_id'));
        $payment = $request->payment ;

        if ( $request->get('payment') == 'paypal' )
            return view('pages.checkout-payment', compact('order', 'payment', 'shopping_cart'));

//        if( $order->addresses_id == null ) {
//            $addresses = Addresses::create([
//                'user_id' => auth()->user()->id,
//                'name' => $request->get('name'),
//                'second_name' => $request->get('second_name'),
//                'last_name' => $request->get('last_name'),
//                'identity_card' => $request->get('identity_card'),
//                'phone_number' => $request->get('phone_number'),
//                'address' => $request->get('address'),
//                'numero' => $request->get('numero'),
//                'apto' => $request->get('apto'),
//                'entre_calle' => $request->get('entre_calle'),
//                'reparto' => $request->get('reparto'),
//                'selectedEstado' => $request->get('selectedEstado'),
//                'selectedMunicipio' => $request->get('selectedMunicipio'),
//                'status' => 1,
//            ]);
//            $order->update([
//                'addresses_id' => $addresses->id,
//            ]);
//        }else {
//            $addresses = Addresses::find($order->addresses_id);
//            $addresses->update([
//                'user_id' => auth()->user()->id,
//                'name' => $request->get('name'),
//                'second_name' => $request->get('second_name'),
//                'last_name' => $request->get('last_name'),
//                'identity_card' => $request->get('identity_card'),
//                'phone_number' => $request->get('phone_number'),
//                'address' => $request->get('address'),
//                'numero' => $request->get('numero'),
//                'apto' => $request->get('apto'),
//                'entre_calle' => $request->get('entre_calle'),
//                'reparto' => $request->get('reparto'),
//                'selectedEstado' => $request->get('selectedEstado'),
//                'selectedMunicipio' => $request->get('selectedMunicipio'),
//                'status' => 1,
//            ]);
//            $addresses->save();
//        } ,'addresses'
    }

    public function resolveService()
    {
        $service = config("services.paypal.class");
        if ($service) {
            return resolve($service);
        }
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


