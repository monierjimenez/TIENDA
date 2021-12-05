@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>SLIDER<small>Sliders</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-home"></i>Home</a></li>
      <li class="active">Slider</li>
    </ol>
  </section>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">List the Sliders</h3>
      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalSliders" data-backdrop="static" data-keyboard="false">
          <i class="fa fa-plus"></i> Create Slider
      </button>
    </div>

    <!-- /.box-header -->
      <div class="row">
          <div class="col-md-12">
{{--              <div class="box box-primary"><br>--}}
                  <div class="col-md-12">
    <div class="box-body table-responsive7 no-padding">
      <table id="post-table" class="table table-bordered table-hover dataTable no-footer">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Cant Photos</th>
            <th>Condition</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          @php $i = 1; @endphp
          @foreach ($sliders as $slider)
            <tr>
              <td>{{ $i }}</td>
              <td>{{ $slider->name }}</td>
              <td>{{ $slider->photos->count() }}</td>
              <td style="text-align: center">{!! $slider->publico ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' !!} </td>
              <td>
                <a href="{{ route('admin.sliders.edit', $slider) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                <form method="POST" action="{{ route('admin.sliders.destroy', $slider) }}" style="display: inline">
                  @csrf {{ method_field('DELETE') }}
                  <button class="btn btn-xs btn-danger" onclick="return confirm('Estas seguro de eliminar este slider.')">
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
{{--                  </div>--}}
              </div>
          </div>
      </div>
    <!-- /.box-body -->
  </div>
@stop

@push('modal')
  @include('admin.sliders.create')
@endpush

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/adminlte/css/responsiveAdmin.css">
@endpush

@push('script')
  <!-- DataTables -->
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>

  <script>
  $(function () {
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

  if( window.location.hash === '#createsliders' )
  {
      $('#myModalSliders').modal('show');
  }

  $('#myModalSliders').on('hide.bs.modal', function(){
      window.location.hash = '#';
  });

  $('#myModalSliders').on('shown.bs.modal', function(){
      $('#name').focus();
      window.location.hash = '#createsliders';
  });
</script>


@endpush

