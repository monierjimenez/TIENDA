<?php

    namespace App\Http\ViewComposers;

    use Cookie;

    use App\ShoppingCart;
    use App\ShoppingCartDetail;
    use Illuminate\View\View;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;

    class CartShopping
    {
        public function compose(View $view)
        { //dd(session('shopping_cart_id'));
            if ( Auth::guest() ){
                $shopping_cart = shoppingCartGuest();
                //dd($shopping_cart->shopping_cart_details);
            }else{
                $shopping_cart = ShoppingCart::where('user_id', '=', auth()->user()->id)->where('status', '=', 'PENDING')->get();
                if ( $shopping_cart == '[]' ) {
                    $shopping_cart = ShoppingCart::find(Session::get('shopping_cart_id'));
                    if( $shopping_cart->shopping_cart_details == [] ){
                        $shopping_cart->update([
                            'user_id' => auth()->user()->id,
                        ]);
                    }else{
                        $shopping_cart->update([
                            'status' => 'PENDING',
                            'user_id' => auth()->user()->id,
                        ]);
                    }
                }else {
                    $shopping_cart = ShoppingCart::find($shopping_cart[0]['id']);
                  // dd($shopping_cart."-".session('shopping_cart_id'));
                    if ( $shopping_cart->id != session('shopping_cart_id') ){
                        $shopping_cart_no_user = ShoppingCart::find(Session::get('shopping_cart_id'));
                        if( $shopping_cart_no_user->shopping_cart_details != [] ){
                            foreach ( $shopping_cart_no_user->shopping_cart_details as $shopping_cart_details ){
                                if( productCartIS($shopping_cart->id, $shopping_cart_details->product_id) != false ){
                                    $shoppingCartDetail = ShoppingCartDetail::find(productCartIS($shopping_cart->id, $shopping_cart_details->product_id));
                                    $shoppingCartDetail->update([
                                        'quantity' => $shopping_cart_details->quantity + $shoppingCartDetail->quantity,
                                    ]);
                                    $shopping_cart_details->delete();
                                }else{
                                    $shopping_cart_details->update([
                                        'shopping_cart_id' => $shopping_cart->id,
                                    ]);
                                }
                            }
                        }
                        Session::forget('shopping_cart_id') ;
                        $shopping_cart_id = Session::get('shopping_cart_id');
                        Session::put('shopping_cart_id', $shopping_cart->id);
                        Cookie::queue('shopping_cart_id', $shopping_cart->id, time() + (10 * 365 * 24 * 60 * 60));

                        $shopping_cart_no_user->delete();
                    }else{
                       // dd(Cookie::get('shopping_cart_id'));
                        if (!Cookie::get('shopping_cart_id'))
                            Cookie::queue('shopping_cart_id', $shopping_cart->id, time() + (10 * 365 * 24 * 60 * 60));
                    }
                }
            }
            $view->with(['shopping_cart' => $shopping_cart]);
        }
    }
