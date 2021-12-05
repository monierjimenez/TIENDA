
@extends('layouts.layouts')

@section('meta-title', 'Carrito de compras')
@section('meta-description', 'Compra online a Cuba desde cualquier lugar. Envio aereo 100% garantizado. Entrega en su domicilio en todas las provincias y municipios.')
@section('meta-keywords', 'Carrito, compras, cuba, envio, alimentos')

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"> <i class="fa fa-home"></i> {{ __('Home') }}</a>
                        <span> > {{ __('Order') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <section class="shop checkout section">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-12">
                <div class="order-details">
                    <div class="single-widget">
                        <h2>
                            {{ __('Order') }} #{{ $order->id }}
                            <a href="{{ route('pages.myorder') }}"> <span class="pull-right"><i class="fa fa-backward"></i> Mis pedidos</span></a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shopping-cart section" style="width: 100%;background: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <table class="table shopping-summery">
                        <thead>
                        <tr class="main-hading">
                            <th class="pull-left">Producto</th>
                            <th></th>
                            <th class="text-center">{{ __('Cantidad') }}</th>
                            <th class="text-center">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--                                    -{{$order->order_detail}}---}}
                        @foreach($order->order_detail as $orderdetails)
                            <tr>
                                <td class="text-center" data-title="Producto" >
                                    <a href="{{ route('productdetails', array($orderdetails->product->categorie->url, $orderdetails->product)) }}">
                                        <img class="default-img img-responsive" src="/images/{{primeraPhotoProduct($orderdetails->product)}}" alt="#">
                                    </a>
                                </th>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name" style="margin-bottom: 0px;margin-top: 0px;">
                                        <a href="{{ route('productdetails', array($orderdetails->product->categorie->url, $orderdetails->product)) }}">
                                           {{ $orderdetails->product->name }}
                                        </a>
                                    </p>
                                    <p class="product-des" style="margin-bottom: 0px;margin-top: 0px;">
                                        @if( $orderdetails->product->spec != '[]' )
                                            <span>
                                                ${{ $orderdetails->spec->sale_price }}
                                                @if( $orderdetails->spec->sale_price_before != 0 )
                                                    <span style="text-decoration: line-through;">
                                                        ${{ $orderdetails->spec->sale_price_before }}
                                                    </span>
                                                @endif
                                            </span>
                                        @else
                                            <span>
                                                ${{ $orderdetails->product->sale_price }}
                                                @if( $orderdetails->product->sale_price_before != 0 )
                                                    <span style="text-decoration: line-through;">
                                                        ${{ $orderdetails->product->sale_price_before }}
                                                    </span>
                                                @endif
                                            </span>
                                        @endif
                                    </p>
                                    @if( $orderdetails->color_product != '0' )
                                        {{ __('Color') }}: {{ $orderdetails->color_product }}
                                    @endif
                                    <p style="margin-bottom: 0px;margin-top: 0px;">
                                        @if( $orderdetails->product->spec != '[]' )
                                            {{ __('Model') }}: {{ $orderdetails->spec->name }}
                                        @else
                                            {{ __('Model') }}: {{ $orderdetails->modelp->name }}
                                        @endif
                                    </p>
                                </td>
                                <td class="text-center" data-title="Cantidad">{{ ($orderdetails->cant_product) }}</td>
                                {{--                                            <td class="text-center" data-title="Fecha">{{ $order->order_date->format('M d, Y, G:i:s') }}</td>--}}
                                <td class="text-center" data-title="Total">
                                    @if( $orderdetails->product->spec != '[]' )
                                        ${{ $orderdetails->spec->sale_price*$orderdetails->cant_product }}
                                    @else
                                        ${{ $orderdetails->price_product*$orderdetails->cant_product }}
                                    @endif
{{--                                    ${{ $orderdetails->price_product*$orderdetails->cant_product }}--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="order-details">
                        <div class="single-widget">
                            <h2 style="padding: 0px 30px;padding-bottom: 0px;">
                                Subtotal <span class="pull-right">${{ $order->quantity_of_order() }}</span>
                            </h2>
                            <br>
                            <h2 style="padding: 0px 30px;padding-bottom: 0px;">
                                Envío <span class="pull-right">Gratis</span>
                            </h2>
                            <br>
                            <h2 style="padding: 0px 30px;padding-bottom: 0px;">
                                Descuentos <span class="pull-right">${{ $order->total_save_mony_order() }}</span>
                            </h2>
                            <br>
                            <h2 style="padding: 0px 30px;padding-bottom: 0px;">
                                Total <span class="pull-right">${{ $order->total_price_products() }}</span>
                            </h2>
                            <br>
                            <h2 style="padding: 0px 30px;padding-bottom: 0px;">
                                Impuestos <span class="pull-right">$0.00</span>
                            </h2>
                            <br>
                            <h2 style="padding: 0px 30px;padding-bottom: 0px;">
                                Total + Impuestos <span class="pull-right">${{ $order->total_price_products() }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="order-details">
                        <div class="single-widget">
                            <h2 style="padding: 0px 30px;padding-bottom: 0px;">
                                Dirección de facturación
                            </h2>
                            <br>
                            <div style="padding: 0px 30px;padding-bottom: 0px;color: #333333;font-size: 16px;">
                                {{ $order->user->name }} {{ $order->user->last_name }}, Telf: {{ $order->user->phone }}
                                <br><br>
                                {{ $order->address }}  {{ $order->numero }} @if ( $order->apto != null ) , {{ $order->apto }} @endif
                                <br>
                                @if ( $order->reparto != null ) {{ $order->reparto }}<br> @endif
                                {{ $order->municipio->name }}
                                <br>
                                {{ $order->estado->name }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="order-details">
                        <div class="single-widget">
                            <h2 style="padding: 0px 30px;padding-bottom: 0px;">
                                Dirección de envío
                            </h2>
                            <br>
                            <div style="padding: 0px 30px;padding-bottom: 0px;color: #333333;font-size: 16px;">
                                {{ $order->name }} {{ $order->last_name }}, Telf: {{ $order->phone_number }}
                                <br><br>
                                {{ $order->address }}  {{ $order->numero }} @if ( $order->apto != null ) , {{ $order->apto }} @endif
                                <br>
                                @if ( $order->reparto != null ) {{ $order->reparto }}<br> @endif
                                {{ $order->municipio->name }}
                                <br>
                                {{ $order->estado->name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
