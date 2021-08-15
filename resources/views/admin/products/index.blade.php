@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>PRODUCTS<small>list</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Products</li>
    </ol>
  </section>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">List the Products</h3>
{{--      <a href="{{ route('articuloallpdf') }}" class="btn btn-success pull-right" style="margin-left: 8px;" title="Exportar a PDF."><i class="fa fa-file-pdf-o"></i></a>--}}
      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalProduct" data-backdrop="static" data-keyboard="false">
          <i class="fa fa-plus"></i> Crear Articulo
      </button>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="post-table" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Producto</th>
            <th>Categoria</th>
            <th>Stock</th>
            <th>Costo/Publico</th>
            <th>Costo Total</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
            @php
				$costo_total = 0;
				$cantidad_alamcen = 0;
			@endphp
          @foreach ($products as $product)
            <tr>
              <td>sdf</td>
              <td>dsf</td>
              <td>
                dsfsd
              </td>
              <td class="text-center">sfd</td>
              <td class="text-center">sdf</td>
              <td class="text-center">sdf</td>
              <td>
                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>

                <form method="POST" action="{{ route('admin.products.destroy', $product) }}" style="display: inline">
                    @csrf {{ method_field('DELETE') }}
                    <button class="btn btn-xs btn-danger" onclick="return confirm('Estas seguro de eliminar este articulo.')">
                    <i class="fa fa-trash"></i>
                    </button>
               </form>
{{--               <a href="{{ route('articulopdf', $product) }}" class="btn btn-success btn-xs" title="Exportar a PDF."><i class="fa fa-file-pdf-o"></i></a>--}}
              </td>
            </tr>
{{--            @php --}}
{{--                $costo_total = $costo_total+($articulo->costo*$articulo->stock);--}}
{{--                $cantidad_alamcen = $cantidad_alamcen+$articulo->stock;--}}
{{--            @endphp--}}
          @endforeach
        </tbody>
{{--        <tfoot>--}}
{{--            <tr>--}}
{{--                <th>Total:</th>--}}
{{--                <th></th>--}}
{{--                <th></th>--}}
{{--                <th class="text-center">{{ $cantidad_alamcen }}</th>--}}
{{--                <th></th>--}}
{{--                <th class="text-center">{{ $costo_total }}</th>--}}
{{--                <th></th>--}}
{{--            </tr>--}}
{{--          </tfoot>--}}
        </table>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@stop

@push('modal')
{{--  @include('admin.proveedores.create')--}}
  @include('admin.products.create')
@endpush

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('script')
  <!-- DataTables -->
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>

  <script>
    $(function () {
    /* $("#example1").DataTable();*/

      $('#post-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "aaSorting": [],

      });
    });
        if( window.location.hash === '#create-product' )
        {
            $('#myModalProduct').modal('show');
        }

        $('#myModalProduct').on('hide.bs.modal', function(){
        window.location.hash = '#';
    });

        $('#myModalProduct').on('shown.bs.modal', function(){
        $('#codigo_producto').focus();
        window.location.hash = '#create-product';
    });

  </script>
@endpush

