@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>PRODUCT <small>Create Product</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.products.index') }}"><i class="fa fa-list"></i> Product</a></li>
      <li class="active">{{ $product->name }}</li>
    </ol>
  </section>
@stop

@section('content')

	<div class="row">
		@if($product->photos->count())
		<div class="col-md-12">
			<div class="box box-primary">
		    	<div class="box-body">
					<div class='row'>
						@foreach ($product->photos as $photo)
							 <form method="POST" action="{{ route('admin.photos.destroy', $photo) }}">
								 @csrf {{ method_field('DELETE') }}
								 <div class="col-md-2" >
									 <button class="btn btn-danger btn-xs" style='position:absolute '><i class="fa fa-remove"></i></button>
									 <img class='img-responsive' src="/images/{{ $photo->url }}" alt="">
								 </div>
							 </form>
						 @endforeach
					</div>
				</div>
			</div>
		</div>
		@endif

		<div class="col-md-7">
            <div class="box box-primary">
				<div class="box-body">
					<div class="form-group">
{{--                        @if( $product->sp )--}}
                        <div class="row">
                            <div class="col-xs-12">
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#myModalStock" data-backdrop="static" data-keyboard="false">
                                ADD STOCK
                            </button>
                            </div>
                        </div>


        <form method="POST" action="{{ route('admin.products.update', $product) }}">
            @csrf  {{ method_field('PUT') }}
						<div class="row">
							<div class="col-xs-6 {{ $errors->has('sku') ? 'has-error' : '' }}">
								<label>SKU</label>
								<input name='sku' placeholder="SKU product" class="form-control" value="{{ old('sku', $product->sku) }}">
								{!! $errors->first('sku', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-6 {{ $errors->has('name') ? 'has-error' : '' }}">
								<label>Name product</label>
								<input name='name' placeholder="Name Product" class="form-control" value="{{ old('name', $product->name) }}">
								{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>

				<div class="box-body">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-6 {{ $errors->has('categorie_id') ? 'has-error' : '' }}">
								<label>Category Product</label>
								<select name="categorie_id" class="form-control select2" onchange="actualizar(this)">
									<option value="">Select category</option>
									@foreach( $categorys as $category )
										<option value="{{ $category->id }}"
                                            {{ old('categorie_id', $product->categorie_id) == $category->id ? 'selected' : '' }}>
											{{ $category->name }}
                                        </option>
									@endforeach
								</select>
								{!! $errors->first('categorie_id', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-6 {{ $errors->has('colore_id') ? 'has-error' : '' }}">
                                <label>Color Product</label>
                                    <select name="colore_id[]" class="form-control select2" multiple="multiple" data-placeholder="Color de producto..." style="width: 100%;">
                                        @foreach( $colores as $colore )
                                             <option value="{{ $colore->id }}"
                                                {{ old('colore_id', in_array($colore->id, explode(".", $product->colore_id)) )  ? 'selected' : ''}}>
                                                 {{ $colore->name }}
                                             </option>
                                        @endforeach
                                    </select>
                                {!! $errors->first('colore_id', '<span class="help-block">:message</span>') !!}
							</div>

						</div>
					</div>
				</div>

				<div class="box-body">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-6 {{ $errors->has('brands') ? 'has-error' : '' }}">
								<label>Brands Product</label>
								<select name="brand" class="form-control select2">
									<option value="">Select a brand</option>
									@foreach( $brands as $brand )
										<option value="{{ $brand->id }}" {{ old('brand', $product->brand) == $brand->id ? 'selected' : ''}}>
											{{ $brand->name }}</option>
									@endforeach
								</select>
								{!! $errors->first('brands', '<span class="help-block">:message</span>') !!}
							</div>

							<div class="col-xs-6 {{ $errors->has('model') ? 'has-error' : '' }}">
								<label>Model Product</label>
                                <select name="model" class="form-control select2">
                                    <option value="">Select a model</option>
                                    @foreach( $models as $model )
                                        <option value="{{ $model->id }}" {{ old('brand', $product->model) == $model->id ? 'selected' : ''}}>
                                            {{ $model->name }}</option>
                                    @endforeach
                                </select>
							    {!! $errors->first('model', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>

				<div class="box-body">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-4 {{ $errors->has('cost_price') ? 'has-error' : '' }}">
								<label>Product Cost</label>
								<input name='cost_price' placeholder="Product cost" class="form-control" value="{{ old('cost_price', $product->cost_price) }}">
								{!! $errors->first('cost_price', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-4 {{ $errors->has('sale_price_before') ? 'has-error' : '' }}">
								<label>Sale price before</label>
								<input name='sale_price_before' placeholder="Sale price before" class="form-control" value="{{ old('sale_price_before', $product->sale_price_before) }}">
								{!! $errors->first('sale_price_before', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-4 {{ $errors->has('sale_price') ? 'has-error' : '' }}">
								<label>Sale price</label>
								<input name='sale_price' placeholder="Sale price" class="form-control" value="{{ old('sale_price', $product->sale_price) }}">
								{!! $errors->first('sale_price', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>

				<div class="box-body">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-4 {{ $errors->has('stock') ? 'has-error' : '' }}">
								<label>Stock</label>
								<input name='stock' placeholder="stock" class="form-control" value="{{ old('stock', $product->stock) }}">
								{!! $errors->first('stock', '<span class="help-block">:message</span>') !!}
							</div>
                            <div class="col-xs-4 {{ $errors->has('shipping_price') ? 'has-error' : '' }}">
                                <label>Shipping price</label>
                                <input name='shipping_price' placeholder="Shipping price" class="form-control" value="{{ old('shipping_price', $product->shipping_price) }}">
                                {!! $errors->first('shipping_price', '<span class="help-block">:message</span>') !!}
                            </div>
							<div class="col-xs-4 {{ $errors->has('bulk_weight') ? 'has-error' : '' }}">
								<label>Bulk weight (Lb)</label>
								<input name='bulk_weight' placeholder="Bulk weight" class="form-control" value="{{ old('bulk_weight', $product->bulk_weight) }}">
								{!! $errors->first('bulk_weight', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>

                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-4 {{ $errors->has('payment_cuba') ? 'has-error' : '' }}">
                                <label>Payment Cuba</label>
                                <input name='payment_cuba' placeholder="Payment Cuba" class="form-control" value="{{ old('payment_cuba', $product->payment_cuba) }}">
                                {!! $errors->first('payment_cuba', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="col-xs-4 {{ $errors->has('condition') ? 'has-error' : '' }}">
                                <label>Estado Product</label>
                                <select name="condition" class="form-control">
                                    <option value="0" {{ old('condition', $product->condition) == 0 ? 'selected' : ''}}">Active</option>
                                    <option value="1" {{ old('condition', $product->condition) == 1 ? 'selected' : ''}}>Disabled</option>
                                </select>
                                {!! $errors->first('condition', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="col-xs-4 {{ $errors->has('number_packages') ? 'has-error' : '' }}">
                                <label>Number of packages</label>
                                <input name='number_packages' placeholder="Number of packages" class="form-control" value="{{ old('number_packages', $product->number_packages) }}">
                                {!! $errors->first('number_packages', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group {{ $errors->has('seotitle') ? 'has-error' : '' }}">
                        <label>SEO Title</label>
                        <input name='seotitle' placeholder="SEO Title" class="form-control" value="{{ old('seotitle', $product->seotitle) }}">
                        {!! $errors->first('seotitle', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('seodescription') ? 'has-error' : '' }}">
                        <label>SEO Description</label>
                        <input name='seodescription' placeholder="SEO Description" class="form-control" value="{{ old('seodescription', $product->seodescription) }}">
                        {!! $errors->first('seodescription', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('seokeywords') ? 'has-error' : '' }}">
                        <label>SEO Keywords</label>
                        <input name='seokeywords' placeholder="SEO Keywords Ej: envios, cuba" class="form-control" value="{{ old('seokeywords', $product->seokeywords) }}">
                        {!! $errors->first('seokeywords', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
				<div class="box-body">
	    			<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			    		<label>Description product</label>
			    		<textarea name='description' id='editor' rows="4" class="form-control" placeholder="Description product">
			    			{{ old('description', $product->description) }}
			    		</textarea>
			    		{!! $errors->first('description', '<span class="help-block">:message</span>') !!}
			   		</div>
				</div>

                <div class="box-body">
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label>Product features</label>
                        <textarea name='features' id='editor1' rows="4" class="form-control" placeholder="Product features">
                            {{ old('features', $product->features) }}
                        </textarea>
                        {!! $errors->first('features', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>

				<div class="box-body">
					<div class="form-group">
						<button type="submit" class='btn btn-primary btn-block'>Guardar Articulo</button>
					</div>
				</div>

			</div>
   		</div>
        </form>

    	<div class="col-md-5">
    		<div class="box box-primary"><br>
				<div class="col-md-12">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs pull-right" >
							<li class="active" >
								<a href="#tab_1-1" data-toggle="tab" > PRODUCTS</a>
							</li>
							<li class="pull-left header"><i class="fa fa-th"></i>
                                <li class="pull-left header" style="padding: 0px">
                                    <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModalICC" data-backdrop="static" data-keyboard="false">
                                        ADD PRODUCT COMBO(@if ( $product->products_id != '' ) {{ count(explode('.', $product->products_id)) }} @else 0 @endif)
                                    </button>
                                </li>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="tab_1-1">
                                @if ( $product->products_id != '' )
                                    <table id="post-table" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Info</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( explode('.', $product->products_id) as $prod )
                                                @php $produ =  dameProducto($prod); @endphp
                                                <tr>
                                                    <td>
                                                        <img src="/images/{{ $produ->photos->first()->url }}" class="profile-user-img img-responsive img-circle" style="width: 60px;border: 1px solid #d2d6de;">
                                                    </td>
                                                    <td>
                                                        Name: {{ $produ->name }} <br>
                                                        Category: {{ $produ->categorie->name }} <br>
                                                        Cost price: {{ $produ->cost_price }} <br>
                                                        Sale price: {{ $produ->sale_price }} <br>
                                                        Stock: {{ $produ->stock }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    Has no associated products
                                @endif
							</div>
						</div>
          			</div>
        		</div>
    		</div>

            <!-- -->

            @if ( checkrights('PUSPV', auth()->user()->permissions) )
            <div class="box box-primary"><br>
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right" >
                            <li class="active" >
                                <a href="#tab_1-1" data-toggle="tab" > VARIANT</a>
                            </li>
                            <li class="pull-left header"><i class="fa fa-th"></i>
                            <li class="pull-left header" style="padding: 0px">
                                @if ( checkrights('PUSPE', auth()->user()->permissions) )
                                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalSpecs" data-backdrop="static" data-keyboard="false">
                                        <i class="fa fa-plus"></i> Create Variant
                                    </button>
                                @endif
{{--                                <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModalICC" data-backdrop="static" data-keyboard="false">--}}
{{--                                    ADD PRODUCT (@if ( $product->products_id != '' ) {{ count(explode('.', $product->products_id)) }} @else 0 @endif)--}}
{{--                                </button>--}}
                            </li>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1-1">
{{--                                @if ( $product->products_id != '' )--}}
                                    <table id="post-tablev" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Info</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $product->spec as $spec )
                                            <tr>
                                                <td>
                                                    {{ $spec->reference }}<br>
                                                    Name: {{$spec->name}}<br>
                                                    Stock: {{$spec->stock}}<br>
                                                    Status: @if ( $spec->condition == 0 ) <i class="fa fa-check"></i>
                                                    @else <i class="fa fa-close"></i> @endif
                                                </td>
                                                <td>
                                                    <img src="/images/{{ $spec->image }}" class="profile-user-img img-responsive img-circle" style="width: 60px;border: 1px solid #d2d6de;">
                                                </td>
                                                <td>
                                                    @if ( checkrights('PUSPE', auth()->user()->permissions) )
                                                        <a href="{{ route('admin.specs.edit', $spec) }}"> Edit</a>
                                                    @else
                                                        ----
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
{{--                                @else--}}
{{--                                    Has no associated products--}}
{{--                                @endif--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
    		<div class="box-body">
                Imagen (550x750)
				<div class="dropzone"></div>
			</div>
    	</div>
	</div>
@stop



@push('modal')
  @include('admin.products.addproductcombo')
  @include('admin.products.addstockproduct')
  @include('admin.products.createSpecs')
@endpush

@push('styles')
	<!-- Select2 -->
	<link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="/adminlte/plugins/iCheck/all.css">

	<link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('script')
	<!-- Select2 -->
	<script src="/adminlte/plugins/select2/select2.full.min.js"></script>

	<!-- iCheck 1.0.1 -->
	<script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css" integrity="sha512-bbUR1MeyQAnEuvdmss7V2LclMzO+R9BzRntEE57WIKInFVQjvX7l7QZSxjNDt8bg41Ww05oHSh0ycKFijqD7dA==" crossorigin="anonymous" />
	<!-- CK Editor -->
	<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

	<!-- DataTables -->
	<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>

	<script type="text/javascript">
		$(".select2").select2({
			tags: true
		});
		CKEDITOR.replace('editor');
        CKEDITOR.replace('editor1');

		var myDropzone1 = new Dropzone('.dropzone', {
			url: '/admin/products/{{ $product->id }}/photos',
			paramName: 'photo',
			acceptedFiles: 'image/*',
			maxFilesize: 2,
			maxFiles: 5,
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			dictDefaultMessage: 'Drag the photo here to upload them'
		});

		myDropzone1.on('error', function (file, res) {
			var msg = res.errors.photo[0];
			$('.dz-error-message > span').text(msg);
		});
		Dropzone.autoDiscover = false;

		//Flat red color scheme for iCheck
		$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
			checkboxClass: 'icheckbox_flat-green',
			radioClass: 'iradio_flat-green'
		});

		$(function () {
			  $('#post-table').DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false
			  });

            $('#post-tablev').DataTable({
                "order": [[ 2, "desc" ]],
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
			});

        if( window.location.hash === '#add-stock' )
        {
            $('#myModalStock').modal('show');
        }

        $('#myModalStock').on('hide.bs.modal', function(){
            window.location.hash = '#';
        });

        $('#myModalStock').on('shown.bs.modal', function(){
            $('#amount').focus();
            window.location.hash = '#add-stock';
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
