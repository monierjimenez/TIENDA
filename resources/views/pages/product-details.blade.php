@extends('layouts.layouts')

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Home</a>
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
                                <hr>

{{--                                <div class="container">--}}
{{--                                    <div class="row details-product">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <h3>Precio: ${{ $product->sale_price }}--}}
{{--                                                @if( $product->sale_price_before != '' )--}}
{{--                                                    <span class="old">${{ $product->sale_price_before }}</span>--}}
{{--                                                @endif--}}
{{--                                            </h3></div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
<br>
                                <div class="quickview-peragraph">
                                    <p>
                                        Precio: ${{ $product->sale_price }}
                                        @if( $product->sale_price_before != '' )
                                            <span style="text-decoration: line-through;">${{ $product->sale_price_before }}</span>
                                        @endif
                                    </p>
                                </div>

                                <div class="quickview-peragraph">
                                    <p>Envio: $0 </p>
                                </div>

                                <div class="quickview-peragraph">
                                    <p>Peso: {{ $product->bulk_weight }} () </p>
                                </div>


{{--                                <h3> ${{ $product->sale_price }}--}}
{{--                                    @if( $product->sale_price_before != '' )--}}
{{--                                        <span class="old">${{ $product->sale_price_before }}</span>--}}
{{--                                    @endif--}}
{{--                                </h3>--}}
                                <div class="quickview-peragraph">
                                    Descripcion <br>
                                    {!! $product->description !!}
                                </div>
                                <div class="size">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <h5 class="title">Size</h5>
                                            <select>
                                                <option selected="selected">s</option>
                                                <option>m</option>
                                                <option>l</option>
                                                <option>xl</option>
                                            </select>
                                        </div>
                                        @if($product->colore_id != null)
                                            <div class="col-lg-6 col-12">
                                                <h5 class="title">Color</h5>
                                                <select>

                                                    @foreach(explode('.', $product->colore_id) as $info )
                                                        @php $colo = dameColor($info) ; @endphp
                                                        <option value="{{ $colo->id }}">{{ $colo->name }}</option>
                                                    @endforeach
    {{--                                                <option selected="selected">orange</option>--}}
    {{--                                                <option>purple</option>--}}
    {{--                                                <option>black</option>--}}
    {{--                                                <option>pink</option>--}}
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
{{--                                <div class="default-social">--}}
{{--                                    <h4 class="share-now">Share:</h4>--}}
{{--                                    <ul>--}}
{{--                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>--}}
{{--                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
