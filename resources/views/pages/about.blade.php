
@extends('layouts.layouts')

@section('meta-title', 'Nosotros | ' . config('app.name'))
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
                        <span> > About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
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
                </div>
            </div>
        </div>
    </section>
@stop
