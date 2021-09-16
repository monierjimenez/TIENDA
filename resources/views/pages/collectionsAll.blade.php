
@extends('layouts.layouts')

@section('meta-title', 'Catgorias de productos')
@section('meta-description', 'Todas las categorias de la tienda')
@section('meta-keywords', 'Categorias, productos')

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> {{ __('Home') }}</a>
                        <span>> {{ __('Collections') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Start Small Banner  -->
    <section class="small-banner section">
        <div class="container-fluid">
            {{-- en el div de abajo lo flex--}}
            <div class="collections" style="padding: 10px 0;">
                <!-- Single Banner  -->
                @foreach($categorys as $category)
                    <div class="collection-item" >
                        <div class="single-banner" style="margin-bottom: -30px; padding: 0px 8px;">
                            <a href="{{ route('collections', $category) }}">
                                <img src="/images/{{ $category->image }}" alt="#">
                                <span class="collections">{{ $category->name }}</span>
                                <div class="content">
{{--                                                                <p>Man's Collectons</p>--}}
{{--                                                                <h3>Summer travel <br> collection</h3>--}}
{{--                                                                <a href="#">{{ $category->name }}</a>--}}

                                </div>
                            </a>
                        </div>
                    </div>
            @endforeach
            {{--            --}}
            {{--            <div class="col-lg-4 col-md-6 col-12">--}}
            {{--                <div class="single-banner">--}}
            {{--                    <img src="https://via.placeholder.com/600x370" alt="#">--}}
            {{--                    <div class="content">--}}
            {{--                        <p>Man's Collectons</p>--}}
            {{--                        <h3>Summer travel <br> collection</h3>--}}
            {{--                        <a href="#">Discover Now</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <!-- /End Single Banner  -->--}}
            {{--            <!-- Single Banner  -->--}}
            {{--            <div class="col-lg-4 col-md-6 col-12">--}}
            {{--                <div class="single-banner">--}}
            {{--                    <img src="https://via.placeholder.com/600x370" alt="#">--}}
            {{--                    <div class="content">--}}
            {{--                        <p>Bag Collectons</p>--}}
            {{--                        <h3>Awesome Bag <br> 2020</h3>--}}
            {{--                        <a href="#">Shop Now</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <!-- /End Single Banner  -->--}}
            {{--            <!-- Single Banner  -->--}}
            {{--            <div class="col-lg-4 col-12">--}}
            {{--                <div class="single-banner tab-height">--}}
            {{--                    <img src="https://via.placeholder.com/600x370" alt="#">--}}
            {{--                    <div class="content">--}}
            {{--                        <p>Flash Sale</p>--}}
            {{--                        <h3>Mid Season <br> Up to <span>40%</span> Off</h3>--}}
            {{--                        <a href="#">Discover Now</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <!-- /End Single Banner  -->
            </div>
        </div>
    </section>
    <!-- End Small Banner -->
@stop
