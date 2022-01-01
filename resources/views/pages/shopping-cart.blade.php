
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
{{--<br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br><br>wqw<br>--}}
    <section class="product-area shop-sidebar shop section">
        @livewire('carts.carts', ['shoppingcartdetails' => $shoppingcartdetails, 'shopping_cart' => $shopping_cart])
    </section>
@stop
