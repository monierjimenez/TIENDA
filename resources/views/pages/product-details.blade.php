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
                    <h2>{{ __('You may also like') }}</h2><br></div>
            </div>
        </div>
    </div>

        <div class="">
            <div class="">
                <div class="modal-body">
                    <div class="">
                        <div >
                            <div class="owl-carousel popular-slider collections" style="margin-top: -75px;margin-bottom: 15px;">
                                <!-- Start Single Product -->
                                @foreach( $products as $product )
                                    <div class="single-product collection-item">
                                        <div class="product-img">
                                            <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}">
                                                <img class="default-img" src="/images/{{primeraPhotoProduct($product)}}" alt="#">
                                                {{--<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
                                                {{--                                        new, out-of-stock --}}
                                                <span class="out-of-stock">{{ __('You save') }} {{ $product->sale_price_before-$product->sale_price }}</span>
                                            </a>
                                            <div class="button-head">
                                                <div class="product-action">
{{--                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#">--}}
{{--                                                        <i class=" ti-eye" style="margin-right: 6px;"></i><span>Quick Shop</span>--}}
{{--                                                    </a>--}}
                                                    {{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
                                                    {{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
                                                </div>
                                                <div class="product-action-2">
                                                    @include('layouts.menu_cart_or_option')
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3>
                                                <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </h3>
                                            <div class="product-price">
                                                <span>${{ $product->sale_price }}</span>
                                                <span class="old">${{ $product->sale_price_before }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
