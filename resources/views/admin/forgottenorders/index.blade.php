@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>FORGOTTEN ORDERS<small>List of forgotten orders paid</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer"></i> Home</a></li>
      <li class="active">Forgotten Orders</li>
    </ol>
  </section>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary"><br>
                <div class="col-md-12">
                    <div class="box-body table-responsive7 no-padding">
                        <table id="post-table8" class="table table-bordered table-hover dataTable no-footer">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Provincia</th>
                                <th>Municipio</th>
                                <th>E-mail</th>
                                <th>Date</th>
                                <th>Accion</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('script')
  <script>
    if ( window.location.hash === '#create-state' )
    { //alert(1);
      $('#myModalState').modal('show');
    }

    $('#myModalState').on('hide.bs.modal', function(){
      window.location.hash = '#';
    });

    $('#myModalState').on('shown.bs.modal', function(){
      $('#name').focus();
      window.location.hash = '#create-state';
    });
  </script>

  <!-- DataTables -->
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>

  <script>
      $(function () {
          $('#post-table8').DataTable({
              "order": [[ 5, "desc" ]],
              "processing": true,
              "serverSide": true,
              "ajax": "{{ url('admin/order/ordersforgotten') }}",
              "columns":[
                  {data: 'id', name: 'id'},
                  {data: 'user.name', name: 'user.name'},
                  //{data: 'estado.name', name: 'estado.name'},
                  {
                      render: function( data, type, row, meta )
                      {
                          if ( row['estado'] == '[object Object]'  )
                              return row['estado'].name ; else  return '-------' ;
                      }
                  },
                  //{data: 'municipio.name', name: 'municipio.name'},
                  {
                      render: function( data, type, row, meta )
                      {
                          if ( row['municipio'] == '[object Object]'  )
                              return row['municipio'].name ; else  return '-------' ;
                      }
                  },
                  {data: 'user.email', name: 'user.email'},
                  {
                      name: 'created_at',
                      data: {
                          _: 'created_at.display',
                          sort: 'created_at.timestamp'
                      }
                  },
                  {data: 'btn', name: 'btn', searchable: false, orderable: false},
              ]
          });
      });
  </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/adminlte/css/responsiveAdmin.css">
@endpush

