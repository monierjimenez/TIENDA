@extends('admin.layout')

{{--{{ dd($product) }}--}}

@section('header')
	<section class="content-header">
    <h1>PRODUCT <small>Create Product</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.products.index') }}"><i class="fa fa-list"></i> Product</a></li>
      <li class="active">To create</li>
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
			<form method="POST" action="{{ route('admin.products.update', $product) }}">
			@csrf  {{ method_field('PUT') }}
			<div class="box box-primary"><br>
				<div class="box-body">
					<div class="form-group">
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
										<option value="{{ $category->id }}" {{ old('categorie_id', $product->categorie_id) == $category->id ? 'selected' : ''}}>
											{{ $category->name }}</option>
									@endforeach
								</select>
								{!! $errors->first('categorie_id', '<span class="help-block">:message</span>') !!}

							</div>
							<div class="col-xs-6 {{ $errors->has('colore_id') ? 'has-error' : '' }}">
                                <label>Color Product</label>
                                    <select name="colore_id[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccione folios..." style="width: 100%;">
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
							<div class="col-xs-3 {{ $errors->has('minimo') ? 'has-error' : '' }}">
								<label>Minimo</label>
								<input name='minimo' placeholder="Minimo" class="form-control" value="{{ old('minimo', $product->minimo) }}">
								{!! $errors->first('minimo', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-3 {{ $errors->has('maximo') ? 'has-error' : '' }}">
								<label>Maximo</label>
								<input name='maximo' placeholder="Maximo" class="form-control" value="{{ old('maximo', $product->maximo) }}">
								{!! $errors->first('maximo', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-3 {{ $errors->has('costo') ? 'has-error' : '' }}">
								<label>Costo</label>
								<input name='costo' placeholder="Costo" class="form-control" value="{{ old('costo', $product->costo) }}">
								{!! $errors->first('costo', '<span class="help-block">:message</span>') !!}
								</div>
								<div class="col-xs-3 {{ $errors->has('publico') ? 'has-error' : '' }}">
								<label>Publico</label>
								<input name='publico' placeholder="Publico" class="form-control" value="{{ old('publico', $product->publico) }}">
								{!! $errors->first('publico', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>

				<div class="box-body">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-4 {{ $errors->has('stock') ? 'has-error' : '' }}">
								<label>stock</label>
								<input name='stock' placeholder="stock" class="form-control" value="{{ old('stock', $product->stock) }}">
								{!! $errors->first('stock', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-4 {{ $errors->has('mayoreo_tres') ? 'has-error' : '' }}">
								<label>Mayoreo 3%</label>
								<input name='mayoreo_tres' placeholder="M mayoreo" class="form-control" value="{{ old('mayoreo_tres', $product->mayoreo_tres) }}">
								{!! $errors->first('mayoreo_tres', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-4 {{ $errors->has('mayoreo') ? 'has-error' : '' }}">
								<label>Mayoreo</label>
								<input name='mayoreo' placeholder="Mayoreo" class="form-control" value="{{ old('mayoreo', $product->mayoreo) }}">
								{!! $errors->first('mayoreo', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>

				<div class="box-body">
	    			<div class="form-group {{ $errors->has('descripcion_producto') ? 'has-error' : '' }}">
			    		<label>Descripcion producto</label>
			    		<textarea name='descripcion_producto' id='editor' rows="5" class="form-control" placeholder="Descripcion producto">
			    			{{ old('descripcion_producto', $product->descripcion_producto) }}
			    		</textarea>
			    		{!! $errors->first('descripcion_producto', '<span class="help-block">:message</span>') !!}
			   		</div>
				</div>

				<!--
				<div class="box-body">
					<div class="dropzone"></div>
				</div>-->

				<div class="box-body">
					<div class="form-group">
						<button type="submit" class='btn btn-primary btn-block'>Guardar Articulo</button>
					</div>
				</div>

			</div>
			</form>
   		</div>


    	<div class="col-md-5">
    		<div class="box box-primary"><br>
				<div class="col-md-12">
					@if( session()->has('flashicc') )
						<div class="alert alert-success">{{ session('flashicc') }}</div>
					@endif
					{!! $errors->first('icc_1', '<span class="help-block">:message</span>') !!}
					{!! $errors->first('icc_2', '<span class="help-block">:message</span>') !!}
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs pull-right" >
							<li><a href="#tab_2-2" data-toggle="tab">VENDIDOS<b>()</b></a></li>
							<li class="active" >
								<a href="#tab_1-1" data-toggle="tab" >
									2121MKT<b>()</b>
								</a>
							</li>
							<li class="pull-left header"><i class="fa fa-th"></i>
								<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalICC"> <i class="fa fa-plus"></i> IMEI</button>
							</li>

							<li class="pull-left header">
								<a href="" class="btn btn-success btn-lg" title="Exportar a PDF."
								style="margin: -18px 0px 0px -24px;font-size: 33px;">
									<i class="fa fa-file-pdf-o"></i>
								</a>
							</li>


						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="tab_1-1">
								<table id="post-table" class="table table-bordered table-hover">
									<thead>
									  <tr>
										<th>Almacen</th>
										<th>Costo/Publico</th>
										<th>Proveedor</th>
										<th>Accion</th>
									  </tr>
									</thead>
									<tbody>

											<tr>
												<td>g</td>
												<td>g</td>
												<td>g</td>
												<td>
													p
												</td>
											</tr>
									</tbody>
								  </table>
								  <table>
									<tr>
									  <th>Total Invertido: </th>
									</tr>
								</table>
							</div>

							<div class="tab-pane" id="tab_2-2">
								<table id="post-table1" class="table table-bordered table-hover">
									<thead>
									  <tr>
										<th>IMEI</th>
										<th>Almacen</th>
										<th>Vendido</th>
										<th>Accion</th>
									  </tr>
									</thead>
									<tbody>

											<tr>
												<td>w</td>
												<td>
													w
												</td>

												<td>
													w
												</td>
												<td>
													3
												</td>
											</tr>
									</tbody>
								  </table>
							</div>

						</div>
          			</div>
        		</div>
    		</div>

    		<div class="box-body">
				<div class="dropzone"></div>
			</div>

    	</div>
	</div>
@stop



@push('modal')
{{--  @include('admin.articulos.createicc')--}}
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
		var myDropzone1 = new Dropzone('.dropzone', {
			url: '/admin/products/{{ $product->id }}/photos',
			paramName: 'photo',
			acceptedFiles: 'image/*',
			maxFilesize: 2,
			maxFiles: 3,
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			dictDefaultMessage: 'Arrastra la foto aquí para subirlas'
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

			  $('#post-table1').DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false
			  });

			  $('#post-table2').DataTable({
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
