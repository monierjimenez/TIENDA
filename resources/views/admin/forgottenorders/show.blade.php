@extends('admin.layout')

@section('header')

	@if( !checkrights('PUV', auth()->user()->permissions) )
		<script type="text/javascript">
			window.location="/admin/users";
	  	</script>
	@endif

	<section class="content-header">
    <h1>ORDER: #{{ $order->id }} (Total paid: ${{ $order->total_price_products() }} / ${{ $order->profit_sale }})</h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-home"></i> Home</a></li>
	  <li><a href="{{ route('admin.forgottenorders.index') }}"><i class="fa fa-reorder"></i>List Forgotten Orders</a></li>
	  <li><i class='fa fa-minus'></i> Order</li>
    </ol>
  </section>
@stop

@section('content')
	<div class="row">
		<div class="col-md-3">
			<!-- Profile Image -->
          	<div class="box box-primary">
				<div class="box-body box-profile">
{{--					@if ( $user->avatar != null )--}}
{{--						<img src="/images/{{ $user->avatar }}" class="profile-user-img img-responsive img-circle"  alt="{{ $user->name }}">--}}
{{--                    @else--}}
{{--						<img src="/images/unname.jpg" class="profile-user-img img-responsive img-circle"  alt="{{ $user->name }}">--}}
{{--                    @endif--}}
{{--                {{ dd($order->id) }}--}}
					<h3 class="profile-username text-center">{{ $order->user->name }} {{ $order->user->last_name }}</h3>
{{--					<p class="text-muted text-center">{{ $user->cargo }}sadsd</p>--}}
					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>E-mail</b> <a class="pull-right">{{ $order->user->email }}</a>
						</li>

                        <li class="list-group-item">
                            <b>Phone</b> <a class="pull-right">{{ $order->user->phone }}</a>
                        </li>

						<li class="list-group-item">
							<b>Role</b>
							<a class="pull-right">
                                {{$order->user->rol->name }}
							</a>
						</li>

						<li class="list-group-item">
							<b>Order created</b> <a class="pull-right">{{ $order->created_at->format('M d, Y, G:i:s') }}</a>
						</li>

                        <li class="list-group-item">
                            <b>Paid order</b>
                            <a class="pull-right">
                                @if( $order->order_date != null )
                                    {{ $order->order_date->format('M d, Y, G:i:s') }}
                                @else
                                    -----
                                @endif
                            </a>
                        </li>

                        <li class="list-group-item">
                            <b>Status</b> <a class="pull-right"><span class="label label-success">{{ $order->paymentstatus }}</span></a>
                        </li>

                        <li class="list-group-item">
                            <b>Payment method</b>
                            <a class="pull-right">
                                <span class="label label-success">
                                    @if( $order->payment_method != null ) {{ $order->payment_method }} @else ------- @endif
                                </span>
                            </a>
                        </li>
					</ul>
				</div>
          	</div>
		</div>

		<div class="col-md-9">
			<div class="box box-primary">
		    	<div class="box-body">
					<div class="active tab-pane" id="activity">
					  <!-- Post -->
					  <div class="post">
						<div class="user-block">
							@if ( $user->avatar != null )
								<img src="/images/favicon.png" class="img-circle img-bordered-sm"  alt="{{ $order->user->name }}">
							@else
								<img src="/images/favicon.png" class="img-circle img-bordered-sm"  alt="">
							@endif

							<span class="username">
								<a >Order Details</a>, Transaction ID: {{ $order->transaction_id }}
							</span>

							<span class="description">
								Updated order - {{ $order->updated_at->format('M d, Y, G:i:s') }}
							</span>
						</div>

						<p>
							<div class="row">
								<div class="col-md-12">
								  <div class="box box-solid">
									<div class="box-header with-border">
                                       Sender Address
									</div>
									<div class="box-body">
										<p>
                                            <b>De: {{ $order->user->name.' '. $order->user->second_name.' '. $order->user->last_name }}</b><br>
                                            {{ $order->address }}, #{{ $order->numero }} @if( $order->apto != null ) {{ $order->apto }}, @endif  @if( $order->entre_calle != null )  entre {{ $order->entre_calle }} @endif,
{{--                                            {{ $order->estado->name }}, {{ $order->municipio->name }}--}}
                                            @if( $order->estado != null ) {{ $order->estado->name }} @else ------- @endif,
                                            @if( $order->municipio != null ) {{ $order->municipio->name }} @else ------- @endif.
										</p>
									</div>
								  </div>
								</div>
							</div>

                          <div class="row">
                              <div class="col-md-12">
                                  <div class="box box-solid">
                                      <div class="box-header with-border">
                                          Shipping Address
                                      </div>
                                      <div class="box-body">
                                          <p>
                                              <b>A: {{ $order->name.' '. $order->second_name.' '. $order->last_name }}</b><br>
                                              {{ $order->address }}, #{{ $order->numero }} @if( $order->apto != null ) {{ $order->apto }}, @endif  @if( $order->entre_calle != null )  entre {{ $order->entre_calle }} @endif,
                                              @if( $order->estado != null ) {{ $order->estado->name }} @else ------- @endif,
                                              @if( $order->municipio != null ) {{ $order->municipio->name }} @else ------- @endif.
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
						</p>
					  </div>
					</div>
				  </div>
			</div>
		</div>
	</div>

    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <h3 class="profile-username text-center">Order details</h3>
                    {{--					<p class="text-muted text-center">{{ $user->cargo }}sadsd</p>--}}
                    <ul class="list-group list-group-unbordered">

                        <li class="list-group-item">
                            <b>Seen order before the payment</b> <a class="pull-right">{{ giveMeOrders($order->id, "OPP") }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Proceed to payment</b> <a class="pull-right">
                                {{ giveMeOrders($order->id, "OLS") }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="active tab-pane" id="activity">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <h4>Order products</h4>
                                    </div>

                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product</th>
                                                    <th>Amount</th>
                                                    <th>Price/Profit</th>
                                                    <th>Details</th>
                                                </tr>
                                                @foreach( $order->order_detail as $orderdtail )
                                                    <tr>
                                                        <td>{{ $orderdtail->order_id }}</td>
                                                        <td>{{ $orderdtail->name_product }} ({{$orderdtail->model_product}})</td>
                                                        <td>{{ $orderdtail->cant_product }}</td>
                                                        <td>
                                                            ${{ $orderdtail->price_product }}/${{ $orderdtail->profit_sale }}
                                                        </td>
                                                        <td>
                                                            <a class="label label-success" data-toggle="collapse" href="#collapseExample{{ $orderdtail->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                Details
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="8" style="color: blue;">
                                                            <div class="collapse" id="collapseExample{{ $orderdtail->id }}">

                                                                <table class="table table-hover">
                                                                    <tr>
                                                                        <th>Model</th>
                                                                        <th>Color</th>
                                                                        <th>SKU</th>
                                                                        <th>Category</th>
                                                                        <th>Brands</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            @if( $orderdtail->model_product == "0" ) ----- @else {{ $orderdtail->model_product }} @endif
                                                                        </td>
                                                                        <td>
                                                                            @if( $orderdtail->color_product == "0" ) ----- @else {{ $orderdtail->color_product }} @endif
                                                                        </td>
                                                                        <td>{{ $orderdtail->sku_product }}</td>
                                                                        <td>{{ $orderdtail->category_product }}</td>
                                                                        <td>
                                                                            @if( $orderdtail->brand_product == "0" ) ----- @else {{ $orderdtail->brand_product }} @endif
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
@stop

@push('styles')
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="/adminlte/plugins/iCheck/all.css">
@endpush

@push('script')
	<!-- iCheck 1.0.1 -->
	<script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
	<!-- CK Editor -->
	<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

	<script>
		//iCheck for checkbox and radio inputs
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		  });
	</script>
@endpush
