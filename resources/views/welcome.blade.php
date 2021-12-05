
@extends('layouts.layouts')

@section('content')
    <!-- Slider Area -->
        @include('layouts.menu')

    <!--/ End Slider Area -->

    <!-- Start Most Popular -->
    <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ __('Offers') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider" style="margin-top: -75px;margin-bottom: 15px;">
                        <!-- Start Single Product -->
                        @foreach( $products as $product )
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}">
                                        <img class="default-img" src="/images/{{primeraPhotoProduct($product)}}" alt="#">
                                        {{--<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        new, out-of-stock --}}
                                        @if($product->sale_price_before != 0 )
                                            <span class="out-of-stock">Ahorras {{ $product->sale_price_before-$product->sale_price }}</span>
                                        @endif
                                    </a>
                                    <div class="button-head">
    {{--                                    <div class="product-action">--}}
    {{--                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
    {{--                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
    {{--                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
    {{--                                    </div>--}}
                                        <div class="product-action-2">
                                            @include('layouts.menu_cart_or_option')
                                        </div>

                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                    <div class="product-price">
                                        <span>${{ $product->sale_price }}</span>
                                        @if($product->sale_price_before != 0 )
                                            <span class="old">${{ $product->sale_price_before }}</span>
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
    <!-- End Most Popular Area -->
@stop
