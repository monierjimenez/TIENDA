@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>COLORES<small>Listado de colores de telefonos</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer"></i> Inicio</a></li>
      <li class="active">Colores</li>
    </ol>
  </section>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Listado de Colores</h3>
      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalColor"> <i class="fa fa-plus"></i> Create Color</button>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="post-table" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Status</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          @php $i = 1; @endphp
          @foreach ($colores as $colore)
            <tr>
              <td>{{ $i }}</td>
              <td>{!! $colore->name !!}</td>
              <td>
                  @if ( $colore->condition == 0 ) <i class="fa fa-check"></i>
                  @else <i class="fa fa-close"></i> @endif
              </td>
              <td>{{ $colore->created_at }}</td>

              <td>
                <a href="{{ route('admin.colores.edit', $colore) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                <form method="POST" action="{{ route('admin.colores.destroy', $colore) }}" style="display: inline">
                  @csrf {{ method_field('DELETE') }}
                  <button class="btn btn-xs btn-danger" onclick="return confirm('Estas seguro de eliminar esta color.')">
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
  @include('admin.colores.create')
  <script>
    if ( window.location.hash === '#createcolores' )
    { //alert(1);
      $('#myModalColor').modal('show');
    }

    $('#myModalColor').on('hide.bs.modal', function(){
      window.location.hash = '#';
    });

    $('#myModalColor').on('shown.bs.modal', function(){
      $('#name').focus();
      window.location.hash = '#createcolores';
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

