
@extends('layouts.layouts')

@section('meta-title', 'Checkout')
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
                        <a href="{{ route('pages.cart') }}"> <i class="fa fa-opencart"></i> {{ __('My cart') }}</a>
                        <span> > {{ __('Pago') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Start Checkout -->
{{--    'addressesorder' => $addressesorder,--}}
    <section class="shop checkout section">
        @livewire('checkout.select-dynamic', ['shopping_cart' => $shopping_cart, 'order' => $order, 'municipios' => $municipios])
    </section>
    <!--/ End Checkout -->
@stop
