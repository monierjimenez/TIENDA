@extends('layouts.layouts')

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> {{ __('Home') }}</a>
                        > <a href="{{ route('collections', $product->categorie) }}">{{ $product->categorie->name }}</a> <span> > {{ $product->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                </div>
                            </div>
                            <!-- End Product slider -->
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-content">
                                <h2>{{ $product->name }}</h2>
                                <div class="quickview-ratting-review">
{{--                                    <div class="quickview-ratting-wrap">--}}
{{--                                        <div class="quickview-ratting">--}}
{{--                                            <i class="yellow fa fa-star"></i>--}}
{{--                                            <i class="yellow fa fa-star"></i>--}}
{{--                                            <i class="yellow fa fa-star"></i>--}}
{{--                                            <i class="yellow fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </div>--}}
{{--                                        <a href="#"> (1 customer review)</a>--}}
{{--                                    </div>--}}
                                    <div class="default-social">
                                        <h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="quickview-stock">
                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                    </div>
                                </div>
                                <hr class="hr-personality">

                                <div class="quickview-peragraph">
                                    <p>
                                        Precio:  <span class="style-price-product">${{ $product->sale_price }}</span>
                                        @if( $product->sale_price_before != '' )
                                            <span style="text-decoration: line-through;font-size: 13px;">${{ $product->sale_price_before }}</span>
                                        @endif
                                    </p>
                                </div>

                                <div class="quickview-peragraph">
                                    <p>Envio: $0 </p>
                                </div>

                                <div class="quickview-peragraph">
                                    <p>Peso: {{ $product->bulk_weight }} () </p>
                                </div>

                                <div class="size">
                                    <div class="row">
                                        @if($product->spec != '[]')
                                        <div class="col-lg-6 col-12">
                                            <h5 class="title">Modelo</h5>
                                            <select name="model">
                                                @foreach($product->spec as $key )
                                                    <option value="{{ $key->id }}">{{ $key->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif
                                        @if($product->colore_id != null)
                                            <div class="col-lg-6 col-12">
                                                <h5 class="title">Color</h5>
                                                <select name="color">
                                                    @foreach(explode('.', $product->colore_id) as $info )
                                                        @php $colo = dameColor($info) ; @endphp
                                                        <option value="{{ $colo->id }}">{{ $colo->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn btn-block">Add to cart</a>
                                    <a href="{{ route('collections', $product->categorie) }}" class="btn btn-block">Continuar Comprando</a>
{{--                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>--}}
{{--                                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>--}}
                                </div>
                                <hr class="hr-personality">

                                <div class="quickview-peragraph">
                                    <p>
                                    @if($product->brand != '')
                                         Marca:  {{ $product->brands[0]['name'] }}
                                    @endif
                                    @if($product->model != '')
                                        <br>Modelo:  {{ $product->modelp[0]['name'] }}
                                    @endif
                                    </p>
                                </div>

                                <div class="quickview-peragraph">
                                    @if($product->description != '')
                                        <span class="style-price-product">Descripcion</span> <br>
                                        {!! $product->description !!}
                                    @endif
                                </div>

                                <div class="quickview-peragraph">
                                    @if($product->features != '')
                                        <span class="style-price-product">Características</span>
                                        {!! $product->features !!}
                                    @endif

                                </div>

{{--                                                                <div class="default-social">--}}
{{--                                    <h4 class="share-now">Share:</h4>--}}
{{--                                    <ul>--}}
{{--                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>--}}
{{--                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                {{$products}}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<hr class="hr-personality">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="quickview-content">
                    <h2>También te puede interesar</h2><br></div>
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
                                                <span class="out-of-stock">Ahorras {{ $product->sale_price_before-$product->sale_price }}</span>
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
                                                    <a title="Add to cart" href="#">{{ __('Add to cart') }}</a>
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
