@extends('layouts.layouts')

@section('meta-title', $product->seotitle)
@section('meta-description', $product->seodescription)
@section('meta-keywords', $product->seokeywords)

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> {{ __('Home') }}</a> >
                        <a href="{{ route('collectionsall') }}"> {{ __('Collections') }}</a> >
                        <a href="{{ route('collections', $product->categorie) }}">{{ $product->categorie->name }}</a> <span> >
                            {{ $product->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        @livewire('details-product', ['product' => $product])
    </div>

<hr class="hr-personality">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="quickview-content">
                    <h2>{{ __('You may also like') }}</h2><br>
                </div>
            </div>
        </div>
    </div>

    <div class="product-area most-popular section">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <h2>{{ __('Offers') }}</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider" style="margin-top: -75px;margin-bottom: 15px;">
                        <!-- Start Single Product -->
                        @foreach( $productsinter as $productsin )
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{ route('productdetails', array($productsin->categorie->url, $productsin)) }}">
                                        <img class="default-img" src="/images/{{primeraPhotoProduct($productsin)}}" alt="#">
                                        {{--<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
                                        {{--                                        new, out-of-stock --}}
                                        @if($product->sale_price_before != 0 )
                                            <span class="out-of-stock">Ahorras {{ $productsin->sale_price_before-$productsin->sale_price }}</span>
                                        @endif
                                    </a>
                                    <div class="button-head">
                                        {{--                                    <div class="product-action">--}}
                                        {{--                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
                                        {{--                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
                                        {{--                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
                                        {{--                                    </div>--}}
                                        <div class="product-action-2">
                                            @include('layouts.menu_cart_or_option_copy')
                                        </div>

                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <a href="{{ route('productdetails', array($productsin->categorie->url, $productsin)) }}">
                                            {{ $productsin->name }}
                                        </a>
                                    </h3>
                                    <div class="product-price">
                                        <span>${{ $productsin->sale_price }}</span>
                                        @if($productsin->sale_price_before != 0 )
                                            <span class="old">${{ $productsin->sale_price_before }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
