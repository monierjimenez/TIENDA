
@extends('layouts.layouts')

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"> <i class="fa fa-home"></i> {{ __('Home') }}</a>
                        <span> > {{ __('My cart') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="shopping-cart section" style="width: 100%;">
                    <div class="container">
                        @if ( count($shoppingcartdetails) != 0 )
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-12">
                                <!-- Shopping Summery -->
                                <table class="table shopping-summery">
                                    <thead>
                                    <tr class="main-hading">
                                        <th>{{ __('Product') }}</th>
                                        <th></th>
{{--                                        <th class="text-center">PRICE</th>--}}
                                        <th class="text-center">QUANTITY</th>
                                        <th class="text-center">TOTAL</th>
                                        <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $shoppingcartdetails as $shoppingcartdetail )
                                        <tr>
                                            <td class="image" data-title="{{ __('Product') }}">
{{--                                                {{$product}}--}}
{{--                                                <img src="/images/{{primeraPhotoProduct($product)}} alt="#">--}}
                                                <img class="default-img" src="/images/{{primeraPhotoProduct($shoppingcartdetail->product)}}" alt="#">
                                            </td>
                                            <td class="product-des" data-title="Description">
                                                <p class="product-name">
{{--                                                    @if( $shoppingcartdetail->modelo != 0 )--}}
{{--                                                    <a href="{{ route('productdetails', array($shoppingcartdetail->product->categorie->url, $shoppingcartdetail->product)) }}?id={{ $shoppingcartdetail->spec->id }}">--}}
{{--                                                    @else--}}
                                                        <a href="{{ route('productdetails', array($shoppingcartdetail->product->categorie->url, $shoppingcartdetail->product)) }}">
{{--                                                    @endif--}}
                                                        {{ $shoppingcartdetail->product->name }}
                                                    </a>
                                                </p>
                                                <p class="product-des">
                                                    @if( $shoppingcartdetail->modelo != 0 )
                                                        <span>
{{--                                                            {{ dd($shoppingcartdetail->product->shopping_cart_detail) }}--}}
                                                            ${{ $shoppingcartdetail->spec->sale_price }}
                                                            @if( $shoppingcartdetail->spec->sale_price_before != 0 )
                                                                <span style="text-decoration: line-through;">
                                                                    ${{ $shoppingcartdetail->spec->sale_price_before }}
                                                                </span>
                                                            @endif
                                                        </span>
                                                    @else
                                                        <span>
                                                            ${{ $shoppingcartdetail->product->sale_price }}
                                                            @if( $shoppingcartdetail->product->sale_price_before != 0 )
                                                                <span style="text-decoration: line-through;">
                                                                    ${{ $shoppingcartdetail->product->sale_price_before }}
                                                                </span>
                                                            @endif
                                                        </span>
                                                    @endif
                                                </p>
                                            </td>
                                            {{--  <td class="price" data-title="Price"><span>$110.00 </span></td>--}}
                                            <td class="qty" data-title="Qty"><!-- Input Order -->
                                                <div class="input-group">
                                                    <div class="button minus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="minus" data-field="quant[1]">
                                                            <i class="ti-minus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="{{ $shoppingcartdetail->quantity }}">
                                                    <div class="button plus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/ End Input Order -->
                                            </td>
                                            <td class="total-amount" data-title="Total"><span>${{ $shoppingcartdetail->quantity*$shoppingcartdetail->price }}</span></td>
                                            <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!--/ End Shopping Summery -->
                            </div>

                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="total-amount">
                                <div class="right">
                                    <ul>
                                        <li>{{ __('Cart Total') }}<span>${{ $shopping_cart->total_price_products() }}</span></li>
                                        <li>{{ __('Shipment') }}<span>0</span></li>
{{--                                        @if ( $shoppingcartdetail->product->sale_price_before != null )--}}
                                        <li>{{ __('You Save') }}
                                            <span>
                                                    ${{ $shopping_cart->total_save_mony() }}
                                            </span>
                                        </li>
{{--                                        @endif--}}
{{--                                        <li class="last">You Pay<span>$310.00</span></li>--}}
                                    </ul>
                                    <div class="button5">
                                        <a href="#" class="btn">Checkout</a>
                                        <a href="#" class="btn">Continue shopping</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        @else
                            <p style="text-align: center">
                                Tu carrito esta vacío
                                <br>
                                <img src="/images/cart-empty.png" class="img">
                                <br>
                                Comprar nuestros productos
                            </p>
                        @endif
                    </div>
                </div>
                <!--/ End Shopping Cart -->
            </div>
        </div>
    </section>
@stop
