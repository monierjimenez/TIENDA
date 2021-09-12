@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>CATEGORIES<small>List of categories</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer"></i> Home</a></li>
      <li class="active">Category</li>
    </ol>
  </section>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">List of categories</h3>
      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalCategoria"> <i class="fa fa-plus"></i> Create Category</button>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="post-table" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Products</th>
            <th>Date</th>
            <th>Option</th>
          </tr>
        </thead>

        <tbody>
          @php $i = 1; @endphp
          @foreach ($categorias as $categoria)
            <tr>
              <td>{{ $i }}</td>
              <td>{!! $categoria->name !!}</td>
              <td>
                  @if ( $categoria->condition == 0 ) <i class="fa fa-check"></i>
                  @else <i class="fa fa-close"></i> @endif
{{--                      <img src="/images/{{ $categoria->image }}" class="profile-user-img img-responsive img-circle" style="width: 60px;border: 1px solid #d2d6de;">--}}
              </td>
              <td>{{ count($categoria->producto) }}</td>
              <td>{{ $categoria->created_at }}</td>
              <td>
                <a href="{{ route('admin.categorias.edit', $categoria) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                <form method="POST" action="{{ route('admin.categorias.destroy', $categoria) }}" style="display: inline">
                  @csrf {{ method_field('DELETE') }}
                  <button class="btn btn-xs btn-danger" onclick="return confirm('Estas seguro de eliminar esta categoria.')">
                  <i class="fa fa-trash"></i>
                 </button>
               </form>
              </td>
            </tr>
            @php $i = $i+1; @endphp
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@stop

@push('modal')
  @include('admin.categorias.create')
  <script>
    if ( window.location.hash === '#createcategoria' )
    { //alert(1);
      $('#myModalCategoria').modal('show');
    }

    $('#myModalCategoria').on('hide.bs.modal', function(){
      window.location.hash = '#';
    });

    $('#myModalCategoria').on('shown.bs.modal', function(){
      $('#name').focus();
      window.location.hash = '#createcategoria';
    });
  </script>
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
      "autoWidth": false
    });
  });
</script>


@endpush

