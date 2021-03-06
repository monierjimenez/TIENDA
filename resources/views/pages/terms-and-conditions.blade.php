
@extends('layouts.layouts')

@section('meta-title', 'Terminos y condiciones | ' . config('app.name'))
@section('meta-description', 'Compra online a Cuba desde cualquier lugar. Envio aereo 100% garantizado. Entrega en su domicilio en todas las provincias y municipios.')
@section('meta-keywords', 'compras, cuba, envio, alimentos')

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> {{ __('Home') }}</a>
                        <span> > Terms and Conditions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
{{--                <div class="col-lg-3 col-md-4 col-12">--}}
{{--                    <div class="shop-sidebar">--}}
{{--                        <!-- Single Widget -->--}}
{{--                        <div class="single-widget category" style="margin-bottom: 30px;">--}}
{{--                            <h3 class="title">Categories</h3>--}}
{{--                            <ul class="categor-list">--}}
{{--                                @foreach($categorys as $category)--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ route('collections', $category) }}">--}}
{{--                                            <i class="fa  fa-angle-double-right"></i> {{ $category->name }}--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!--/ End Single Widget -->--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-12 col-md-12 col-12">

{{--                    <div class="row">--}}
{{--                            <div class="col-lg-4 col-md-6 col-12">--}}
                                <div class="single-product">
                                    <div class="product-content">
                                        <h4 style="text-align: center">Nosotros</h4>
                                        <div class="product-price">
                                                <p class="style-p">
                                                    TuEnvioMiami es una tienda online l??der en envios a Cuba. Subsidiaria de ApacargoExpress; compa????a que posee el liderazgo absoluto en env??os hacia Cuba con m??s de 11 a??os de experiencia.
                                                </p>
                                            <br>
                                                <p class="style-p">
                                                    Puedes visitarnos en cualquiera de nuestras agencias en el ??rea de Miami, Orlando y West Palm Beach . Vis??tanos
                                                </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-product">
                                    <div class="product-content">
                                        <h4 style="text-align: center">Env??o hacia Cuba</h4>
                                        <div class="product-price">
                                            <p class="style-p">
                                                Somos conscientes del valor de su env??o, por eso manipulamos la carga con profesionalidad desde la recepci??n hasta la entrega. Utilizamos un sistema de embalaje personalizado y muy seguro, acompa??ado de inspecciones durante todos los procesos.
                                            </p>
                                        </div>
                                    </div>
                                </div>
{{--                            </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@stop
