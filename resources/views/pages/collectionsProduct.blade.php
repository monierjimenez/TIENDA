
@extends('layouts.layouts')

@section('meta-title', $category->seotitle)
@section('meta-description', $category->seodescription)
@section('meta-keywords', $category->seokeywords)

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> {{ __('Home') }}</a> >
                        <a href="{{ route('collectionsall') }}"> {{ __('Collections') }}</a>
                        <span>> {{ $category->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <section class="product-area shop-sidebar shop section">
        @livewire('collections-product', ['categorys' => $categorys, 'products' => $products])
    </section>


@stop
