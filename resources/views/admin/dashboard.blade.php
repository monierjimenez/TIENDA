@extends('admin.layout')

@section('header')
	<section class="content-header" >
		<!--<p>Usuario: {{ auth()->user()->name }}</p>-->
		<h1 style="font-size: 32px;" >Dashboard <small>Version 1.5, Mar, 05 2021</small></h1>
		<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
		</ol>
	</section>
@stop

@section('content')
<div class="row">
    <div class="col-md-8 col-sm-6 col-xs-12">

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-bar-chart"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text"><b>Estadistica en la caja:</b></span>
                    <span class="info-box-text" style="text-transform: none;">Compras: <small ><b>{{ $caja->gastos }}</b></small></span>
                    <span class="info-box-text" style="text-transform: none;">Ventas: <small ><b>{{ $caja->ventas }}</b></small></span>
                    <span class="info-box-text" style="text-transform: none;">Ganancias: <small ><b>{{ $caja->ganancia }}</b></small></span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-cart-arrow-down"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><b>Estadistica en la caja: ()</b></span>
                        <span class="info-box-text" style="text-transform: none;">Queda inicio: <small ><b></b></small></span>
                        <span class="info-box-text" style="text-transform: none;">Compras: <small ><b></b></small>, Ventas: <small ><b></b></small></span>
                        <span class="info-box-text" style="text-transform: none;">Ganancias: <small ><b></b></small></span>
                        </div>
                </div>
            </div>


            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Ultimas 5 compras</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                            </div>
                        </div>

                        <div class="box-body">
                            sdfd
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Stock productos al acabar</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                    </div>
                </div>

                <div class="box-body">
                    <div class="box-body no-padding">
                        @if( count($productstocks) != 0 )
                            <table class="table table-striped">
                                <tr>
                                    <th>Product</th>
                                    <th style="width: 40px">Stock</th>
                                </tr>

                                @foreach( $productstocks as $productstock)
                                    @if( $productstock->spec == '[]' )
                                        <tr>
                                            <td><a href="{{ route('admin.products.edit', $productstock) }}"> {{ $productstock->name }}</a></td>
                                            <td><span class="badge bg-red">{{ $productstock->stock }}</span></td>
                                        </tr>
                                    @else
                                        @foreach( $productstock->spec as $spec)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('admin.specs.edit', $spec) }}">
                                                        {{ $spec->name }},
                                                        {{ Str::limit($productstock->name, 20) }}
                                                    </a>
                                                </td>
                                                <td><span class="badge bg-red">{{ $spec->stock }}</span></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            </table>
                        @else
                            Stock product good
                        @endif
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>

@stop
