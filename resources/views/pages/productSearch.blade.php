
@extends('layouts.layouts')

@section('meta-title', 'Busqueda de productos')
@section('meta-description', 'descripcion')
@section('meta-keywords', 'productos, medicina, alimentos, envios')

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> {{ __('Home') }}</a> >
                        <span>{{ __('Search') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <section class="product-area shop-sidebar shop section">
        <div class="container">

            @if($products == "[]") 0 @else {{ count($products) }} @endif  {{ __('results') }}
            <div class="collections" wire:loading.class="invisible" >
                {{--                    row--}}
                @if($products != '[]')
                    @foreach( $products as $product )
                        <div class="collection-items" >
                            {{--                                col-lg-4 col-md-6 col-12--}}
                            <div class="single-product" >
                                <div class="product-img">
                                    <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}">
                                        <img class="default-img" src="/images/{{primeraPhotoProduct($product)}}" alt="#">
                                        {{--
                                                                                    {{--                                            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
                                        <span class="price-dec">10% Off</span>
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            {{--                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#">--}}
                                            {{--                                                    <i class=" ti-eye" style="margin-right: 6px;"></i><span>Quick Shop</span>--}}
                                            {{--                                                </a>--}}
                                            {{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
                                            {{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
                                        </div>
                                        <div class="product-action-2">
                                            @include('layouts.menu_cart_or_option')
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{ route('productdetails', array($product->categorie->url, $product)) }}">{{ $product->name }}</a></h3>
                                    <div class="product-price">
                                        @if( $product->sale_price_before != '' )
                                            <span>${{ $product->sale_price }}</span>
                                            <span class="old">${{ $product->sale_price_before }}</span>
                                        @else
                                            <span>${{ $product->sale_price }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    No ahi productos que concuerden con su busqueda...
                    <div class="single-product">
{{--                        <br>--}}
                        <img src="/images/cart-empty.png" class="img-responsive">
                    </div>
                @endif
            </div>
        </div>
    </section>


@stop
