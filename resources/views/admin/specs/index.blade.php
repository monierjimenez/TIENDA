@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>SPECS<small>Spesc the system </small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-home"></i>Home</a></li>
      <li><i class="fa fa-reorder"></i> List Specs</li>
    </ol>
  </section>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">List the roles</h3>
      @if( checkrights('PUSPE', auth()->user()->permissions) )
{{--        <a href="{{ route('admin.specs.create') }}" class="btn btn-primary pull-right">--}}
{{--          <i class="fa fa-plus"></i> Create Specs--}}
{{--        </a>--}}
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalSpecs" data-backdrop="static" data-keyboard="false">
                <i class="fa fa-plus"></i> Create Specs
        </button>
      @endif
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="post-table" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Reference</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($specs as $spec)
            <tr>
              <td> {{ $spec->reference }} </td>
              <td> {{ $spec->name }} </td>
              <td>
{{--                @if( checkrights('PRV', auth()->user()->permissions) )--}}
{{--                      <a href="{{ route('admin.roles.show', $role) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>--}}
{{--                @endif--}}

                @if( checkrights('PUSPE', auth()->user()->permissions) )
                    <a href="{{ route('admin.specs.edit', $spec) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                @endif

                @if( checkrights('PUSPD', auth()->user()->permissions) )
                    <form method="POST" action="{{ route('admin.specs.destroy', $spec) }}" style="display: inline">
                        @csrf {{ method_field('DELETE') }}
                        <button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this reference?')">
                        <i class="fa fa-trash"></i>
                        </button>
                    </form>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@stop

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('modal')
    @include('admin.specs.create')
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

      if( window.location.hash === '#create-reference' )
      {
          $('#myModalSpecs').modal('show');
      }

      $('#myModalSpecs').on('hide.bs.modal', function(){
          window.location.hash = '#';
      });

      $('#myModalSpecs').on('shown.bs.modal', function(){
          $('#reference').focus();
          window.location.hash = '#create-reference';
      });
    </script>
@endpush

