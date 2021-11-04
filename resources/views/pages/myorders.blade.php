
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
                        <span> > {{ __('My cart') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <section class="product-area shop-sidebar shop section">
{{--        {{ $orders }}--}}
        <div class="container">
            <div class="row shopping-cart">
                <div class="col-lg-12 col-12">
                    <div class="checkout-form">
                        <h5> Mis Pedidos ({{ $cant }})</h5>
                        <br>
                        <div class="box-body table-responsive no-padding">
                            <table class="table shopping-summery">
                                <thead>
                                <tr class="main-hading">
                                    <th>{{ __('Número') }}</th>
                                    <th class="text-center">{{ __('Cantidad') }}</th>
                                    <th class="text-center">Fecha</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <th data-title="{{ __('Número') }}">#{{ $order->id }}</th>
                                            <td class="text-center" data-title="Cantidad">{{ $order->shopping_cart->quantity_of_products() }}</td>
                                            <td class="text-center" data-title="Fecha">{{ $order->order_date->format('M d, Y, G:i:s') }}</td>
                                            <td class="text-center" data-title="Total">${{ $order->amount_total }}</td>
                                            <td class="text-center" data-title="Option">Option</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {!! $orders->links() !!}
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>
@stop
