@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>ORDERS<small>List of orders paid</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer"></i> Home</a></li>
      <li class="active">Orders</li>
    </ol>
  </section>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary"><br>
                <div class="col-md-12">
                    <div class="box-body table-responsive7 no-padding">
                        <table id="post-table85" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Provincia</th>
                                <th>Municipio</th>
                                <th>Total/Ganancia</th>
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
          $('#post-table85').DataTable({
              "order": [[ 5, "desc" ]],
              "processing": true,
              "serverSide": true,
              "ajax": "{{ url('admin/order/generales') }}",
              "columns":[
                  {data: 'id', name: 'id'},
                  {data: 'name', name: 'name'},
                  {data: 'estado.name', name: 'estado.name'},
                  {data: 'municipio.name', name: 'municipio.name'},
                //  {data: 'amount_total', name: 'amount_total'},
                  {
                      render: function( data, type, row, meta )
                      {
                          return row['amount_total'] + '/' + row['profit_sale'];
                      }
                  },
                  {
                      name: 'order_date',
                      data: {
                          _: 'order_date.display',
                          sort: 'order_date.timestamp'
                      }
                  },
                  {data: 'btnv', name: 'btnv', searchable: false, orderable: false},
              ]
          });
      });
  </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/adminlte/css/responsiveAdmin.css">
@endpush

