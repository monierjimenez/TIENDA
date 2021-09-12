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

        @if( checkrights('PUPE', auth()->user()->permissions) )
            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalProduct" data-backdrop="static" data-keyboard="false">
                <i class="fa fa-plus"></i> Create Product
            </button>
        @endif
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="post-table" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>SKU</th>
            <th>Name (Variant)</th>
            <th>Category</th>
            <th>Stock</th>
            <th>Cost/Public</th>
            <th>Condition</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <td>{{ $product->sku }}</td>
              <td>{{ $product->name }} ({{ $product->spec->count()  }})</td>
              <td>{{ $product->categorie->name }}</td>
              <td>{{ $product->stock }}</td>
              <td class="text-center">{{ $product->cost_price }}/{{ $product->sale_price }}</td>
              <td>@if( $product->Condition == 0 ) <i class="fa fa-check"></i> @else <i class="fa fa-close"></i> @endif</td>
              <td>
                @if( checkrights('PUPE', auth()->user()->permissions) )
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                @endif

                @if( checkrights('PUPD', auth()->user()->permissions) )
                    <form method="POST" action="{{ route('admin.products.destroy', $product) }}" style="display: inline">
                        @csrf {{ method_field('DELETE') }}
                        <button class="btn btn-xs btn-danger" onclick="return confirm('Estas seguro de eliminar este articulo.')">
                        <i class="fa fa-trash"></i>
                        </button>
                   </form>
                @endif
{{--               <a href="{{ route('articulopdf', $product) }}" class="btn btn-success btn-xs" title="Exportar a PDF."><i class="fa fa-file-pdf-o"></i></a>--}}
              </td>
            </tr>
          @endforeach
        </tbody>
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

























{{--public $ nombre;--}}
{{--public $ email;--}}
{{--cuerpo $ publico;--}}
{{--función pública enviar ()--}}
{{--{--}}
{{--    $ validatedData = $ this-> validate ([--}}
{{--        'nombre' => 'requerido | min: 6',--}}
{{--        'email' => 'required | email',--}}
{{--        'cuerpo' => 'requerido',--}}
{{--    ]);--}}

{{--    Contacto :: crear ($ validatedData);--}}
{{--    return redirect () -> to ('/ form');--}}

{{--    }--}}
{{--    función pública render ()--}}
{{--    {--}}
{{--    vista de retorno ('livewire.contact-form');--}}
{{--    }--}}
{{--}--}}
