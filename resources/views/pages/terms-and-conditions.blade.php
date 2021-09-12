
@extends('layouts.layouts')

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
                                                    TuEnvioMiami es una tienda online líder en envios a Cuba. Subsidiaria de ApacargoExpress; compañía que posee el liderazgo absoluto en envíos hacia Cuba con más de 11 años de experiencia.
                                                </p>
                                            <br>
                                                <p class="style-p">
                                                    Puedes visitarnos en cualquiera de nuestras agencias en el área de Miami, Orlando y West Palm Beach . Visítanos
                                                </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-product">
                                    <div class="product-content">
                                        <h4 style="text-align: center">Envío hacia Cuba</h4>
                                        <div class="product-price">
                                            <p class="style-p">
                                                Somos conscientes del valor de su envío, por eso manipulamos la carga con profesionalidad desde la recepción hasta la entrega. Utilizamos un sistema de embalaje personalizado y muy seguro, acompañado de inspecciones durante todos los procesos.
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
