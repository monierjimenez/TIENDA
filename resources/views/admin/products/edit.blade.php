@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>Articulo <small>Crear Articulo</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li><a href="{{ route('admin.articulos.index') }}"><i class="fa fa-list"></i> Articulo</a></li>
      <li class="active">Crear</li>
    </ol>
  </section>
@stop

@section('content')

	<div class="row">
		@if($articulo->photos->count())
		<div class="col-md-12">
			<div class="box box-primary">
		    	<div class="box-body">
					<div class='row'>
						@foreach ($articulo->photos as $photo)
							 <form method="POST" action="{{ route('admin.photos.destroy', $photo) }}">
								 @csrf {{ method_field('DELETE') }}
								 <div class="col-md-1" >
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
		
		
		<div class="col-md-6">
			<form method="POST" action="{{ route('admin.articulos.update', $articulo) }}">
			@csrf  {{ method_field('PUT') }}
			<div class="box box-primary"><br>
				<div class="box-body">
					<div class="form-group">
						<div class="row">			
							<div class="col-xs-6 {{ $errors->has('codigo_producto') ? 'has-error' : '' }}">
								<label>Codigo del Articulo </label>
								<input name='codigo_producto' placeholder="Codigo del articulos" class="form-control" value="{{ old('codigo_producto', $articulo->codigo_producto) }}">
								{!! $errors->first('codigo_producto', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-6 {{ $errors->has('name_producto') ? 'has-error' : '' }}">
								<label>Nombre del Articulo</label>
								<input name='name_producto' placeholder="Nombre del Articulo" class="form-control" value="{{ old('name_producto', $articulo->name_producto) }}">
								{!! $errors->first('name_producto', '<span class="help-block">:message</span>') !!}
							</div>

							<!--<div class="col-xs-4 {{ $errors->has('proveedore_id') ? 'has-error' : '' }}">
								<div class="box-body">
									<div class="form-group {{ $errors->has('chip') ? 'has-error' : '' }}">
										<div class="{{ $errors->has('telefono') ? 'has-error' : '' }}" style="display: inline">
											<label>Telefono&nbsp;</label>
											<input type="hidden"  name="telefono" value="0" >
											<input type="checkbox" name="telefono" class="flat-red" value="1" {{ $articulo->telefono == 1 ? 'checked' : '' }}>
											{!! $errors->first('telefono', '<span class="help-block">:message</span>') !!}
										</div>																					
									</div>						
								</div>
							</div> -->
						</div>
					</div>
				</div>

				<div class="box-body">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-6 {{ $errors->has('categorie_id') ? 'has-error' : '' }}">
								<label>Categoria producto</label>							

								<select name="categorie_id" class="form-control select2" onchange="actualizar(this)">
									<option value="">Seleccione una categoria</option>
									@foreach( $categorys as $category )
										<option value="{{ $category->id }}" {{ old('categorie_id', $articulo->categorie_id) == $category->id ? 'selected' : ''}}>
											{{ $category->name }}</option>
									@endforeach
								</select>								
								{!! $errors->first('categorie_id', '<span class="help-block">:message</span>') !!}
								
							</div>
							<div class="col-xs-6 {{ $errors->has('tipo_producto') ? 'has-error' : '' }}">
								<label>Tipo producto</label>								
								<div id="resultados">
									@if ( $articulo->tipo_producto === null )
										<select name="tipo_producto" class="form-control" disabled="">
											<option value="">Seleccione una categoria</option>
										</select>
									@else
										<select name="tipo_producto" class="form-control" >
											<option value="">Seleccione tipo producto</option>
											@foreach( $tipos as $tipo )
												@if( $articulo->categorie_id === $tipo->categorie_id )
													<option value="{{ $tipo->id }}" {{ old('tipo_producto', $articulo->tipo_producto) == $tipo->id ? 'selected' : ''}}>
														{{ $tipo->name }}
													</option>
												@endif
											@endforeach
										</select>	
									@endif
									{!! $errors->first('tipo_producto', '<span class="help-block">:message</span>') !!}
								
								</div>
							</div>

						</div>
					</div>
				</div>

				<script>					
					function actualizar(opcion){
						console.log("Actualizando datos",opcion.value);
						fetch(`/admin/articulos/busqueda?buscar=${opcion.value}`, {
							method:'get'
						})
						.then(response => response.text())
						.then(html => {
							document.getElementById("resultados").innerHTML = html
						})
								
						}
				  </script> 

				<div class="box-body">
					<div class="form-group">
						<div class="row">
														
							<div class="col-xs-6 {{ $errors->has('marca_producto') ? 'has-error' : '' }}">
								<label>Marca producto</label>
								<select name="marca_producto" class="form-control select2">
									<option value="">Seleccione una marca</option>
									@foreach( $marcas as $marca )
										<option value="{{ $marca->id }}" {{ old('marca_producto', $articulo->marca_producto) == $marca->id ? 'selected' : ''}}>
											{{ $marca->name }}</option>
									@endforeach
								</select>								
								{!! $errors->first('marca_producto', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-6 {{ $errors->has('modelo_producto') ? 'has-error' : '' }}">
								<label>Modelo producto</label>
							<input name='modelo_producto' placeholder="Modelo producto" class="form-control" value="{{ old('modelo_producto', $articulo->modelo_producto) }}">
							{!! $errors->first('modelo_producto', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>			  

				<div class="box-body">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-3 {{ $errors->has('minimo') ? 'has-error' : '' }}">
								<label>Minimo</label>
								<input name='minimo' placeholder="Minimo" class="form-control" value="{{ old('minimo', $articulo->minimo) }}">
								{!! $errors->first('minimo', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-3 {{ $errors->has('maximo') ? 'has-error' : '' }}">
								<label>Maximo</label>
								<input name='maximo' placeholder="Maximo" class="form-control" value="{{ old('maximo', $articulo->maximo) }}">
								{!! $errors->first('maximo', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-3 {{ $errors->has('costo') ? 'has-error' : '' }}">
								<label>Costo</label>
								<input name='costo' placeholder="Costo" class="form-control" value="{{ old('costo', $articulo->costo) }}">
								{!! $errors->first('costo', '<span class="help-block">:message</span>') !!}
								</div>
								<div class="col-xs-3 {{ $errors->has('publico') ? 'has-error' : '' }}">
								<label>Publico</label>
								<input name='publico' placeholder="Publico" class="form-control" value="{{ old('publico', $articulo->publico) }}">
								{!! $errors->first('publico', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>
					
				<div class="box-body">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-3 {{ $errors->has('stock') ? 'has-error' : '' }}">
								<label>stock</label>
								<input name='stock' placeholder="stock" class="form-control" value="{{ old('stock', $articulo->stock) }}">
								{!! $errors->first('stock', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-3 {{ $errors->has('mayoreo_tres') ? 'has-error' : '' }}">
								<label>Mayoreo 3%</label>
								<input name='mayoreo_tres' placeholder="M mayoreo" class="form-control" value="{{ old('mayoreo_tres', $articulo->mayoreo_tres) }}">
								{!! $errors->first('mayoreo_tres', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-3 {{ $errors->has('mayoreo') ? 'has-error' : '' }}">
								<label>Mayoreo</label>
								<input name='mayoreo' placeholder="Mayoreo" class="form-control" value="{{ old('mayoreo', $articulo->mayoreo) }}">
								{!! $errors->first('mayoreo', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="col-xs-3 {{ $errors->has('colore_id') ? 'has-error' : '' }}">
								<label>Color producto</label>
								<select name="colore_id" class="form-control select2">
									<option value="">Seleccione un color</option>
									@foreach( $colores as $colore )
										<option value="{{ $colore->id }}" {{ old('categorie_id', $articulo->colore_id) == $colore->id ? 'selected' : ''}}>
											{{ $colore->name }}</option>
									@endforeach
								</select>
								{!! $errors->first('colore_id', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>
				
				<div class="box-body">
	    			<div class="form-group {{ $errors->has('descripcion_producto') ? 'has-error' : '' }}">
			    		<label>Descripcion producto</label>
			    		<textarea name='descripcion_producto' id='editor' rows="5" class="form-control" placeholder="Descripcion producto">
			    			{{ old('descripcion_producto', $articulo->descripcion_producto) }}
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


    	<div class="col-md-6">
    		<div class="box box-primary"><br>				
				<div class="col-md-12">					
					@if( session()->has('flashicc') )
						<div class="alert alert-success">{{ session('flashicc') }}</div>
					@endif
					{!! $errors->first('icc_1', '<span class="help-block">:message</span>') !!}
					{!! $errors->first('icc_2', '<span class="help-block">:message</span>') !!}
					{!! $errors->first('icc_3', '<span class="help-block">:message</span>') !!}
					<div class="nav-tabs-custom">
						
						@php $cant_existente = 0; @endphp
						@foreach ($equiposasociados as $equiposasociado)
							@if ( $equiposasociado->almacene_id == 1 && $equiposasociado->vendido == 0 )
								@php $cant_existente = $cant_existente+1; @endphp
							@endif
						@endforeach

						@php $cant_cliente = 0; @endphp
						@foreach ($equiposasociados as $equiposasociado)
							@if ( $equiposasociado->almacene_id != 1 && $equiposasociado->vendido === 0  )
								@php $cant_cliente = $cant_cliente+1; @endphp
							@endif
						@endforeach

						@php $cant_vendidos = 0; @endphp
						@foreach ($equiposasociados as $equiposasociado)
							@if ( $equiposasociado->vendido != 0 )
								@php $cant_vendidos = $cant_vendidos+1; @endphp
							@endif
						@endforeach
					
						<ul class="nav nav-tabs pull-right" >								
							<li><a href="#tab_2-2" data-toggle="tab">VENDIDOS<b>({{ $cant_vendidos }})</b></a></li>
							<li><a href="#tab_3-2" data-toggle="tab">ALMACENES<b>({{ $cant_cliente }})</b> </a></li>	
							<li class="active" >
								<a href="#tab_1-1" data-toggle="tab" >
									2121MKT<b>({{ $cant_existente }})</b>									
								</a>
							</li>				
							<li class="pull-left header"><i class="fa fa-th"></i> 
								<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalICC"> <i class="fa fa-plus"></i> IMEI</button>
							</li>

							<li class="pull-left header">
								<a href="{{ route('articulopdf', $articulo) }}" class="btn btn-success btn-lg" title="Exportar a PDF." 
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
										<th>IMEI</th>
										<th>Costo/Publico</th>										
										<th>Proveedor</th>
										<th>Accion</th>
									  </tr>
									</thead>							
									<tbody>
										@php 
											$total_costo = 0; 
										@endphp
									  	@foreach ($equiposasociados as $equiposasociado)								
										  	@if ( $equiposasociado->almacene_id == 1 && $equiposasociado->vendido == 0 )
											  	@php 
													$total_costo = $total_costo+$equiposasociado->costo ; 													  
												@endphp
											<tr>
												<td>{{ $equiposasociado->cliente->compania }}</td>
												<td>{{ $equiposasociado->icc }}</td>
												<td>{{ $equiposasociado->costo }} / {{ $articulo->publico }}</td>											
												<td>{{ $equiposasociado->proveedore->compania }}</td>
												<td> 
													@if ( $equiposasociado->cliente_id === 0 )	
															
														<button class="btn btn-success btn-sm btn-block" data-toggle="modal" title='Pasar a Almacen' data-target="#myModalPasarCliente_{{ $equiposasociado->icc }}">
															<i class="fa fa-mail-forward"></i> P. Almacen
														</button>
														
														<form method="POST" action="{{ route('equiposasociados.icc.destroy', $equiposasociado->id) }}" >
															@csrf {{ method_field('DELETE') }}
															<button class="btn btn-sm btn-block btn-danger" style="margin-top: 5px;" onclick="return confirm('Estas seguro de eliminar este ICC del articulo.')">
																<i class="fa fa-trash"></i> Eliminar
															</button>
														</form>														
													@endif
												</td>
											</tr>

											<!-- //////////// -->
											<div class="modal fade" id="myModalPasarCliente_{{ $equiposasociado->icc }}" tabindex="-1" role="dialog" aria-labelledby="myModalPasarCliente" aria-hidden="true">
												<form method="POST" action="{{ route('admin.pasaraclienteicc', $equiposasociado) }}">
												 @csrf
												 <div class="modal-dialog" role="document">
												   <div class="modal-content">
													 <div class="modal-header">
													   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													   <h4 class="modal-title" id="myModalPasarCliente">Agregar "Equipo a Almacen".</h4>
													 </div>
													 <div class="modal-body">
													   <div class="box-body">
															<div class="form-group {{ $errors->has('almacen_id') ? 'has-error' : '' }}">
																<select name="almacen_id" class="form-control" onchange="actualizar(this)">
																	<option value="">Seleccione Alamacen</option> <!--  && $cliente->comicion == 0 -->
																	@foreach( $clientes as $cliente )
																		@if ( $cliente->id != $equiposasociado->almacene_id )
																			<option value="{{ $cliente->id }}" {{ old('almacen_id') == $cliente->id ? 'selected' : ''}}>
																				{{ $cliente->compania }}
																			</option>
																		@endif
																	@endforeach
																</select>								
															{!! $errors->first('almacen_id', '<span class="help-block">:message</span>') !!}
															</div>
													   </div>
													   <div class="box-body">
															IMEI: {{ $equiposasociado->icc }}
													   </div>
											 
													 </div>
													 <div class="modal-footer">
													   <!--<button class="btn btn-default" data-dismiss="modal">Cerrar</button>-->
													   <input id="id" name="id" type="hidden" value="{{ $equiposasociado->id }}">
													   <button class="btn btn-primary">Agregar IMEI a Cliente</button>
													 </div>
												   </div>
												 </div>
											   </form>  
											 </div>
											<!--////////////-->
										@endif 
									  @endforeach
									</tbody>
								  </table>
								  <table>
									<tr>
									  <th>Total Invertido: {{ $total_costo }}</th>	 
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
										<th>Fecha Vendido</th>					
										<th>Accion</th>
									  </tr>
									</thead>							
									<tbody>
									  @foreach ($equiposasociados as $equiposasociado)
										@if ( $equiposasociado->vendido != 0 )
											<tr>
												<td>{{ $equiposasociado->icc }}</td>
												<td>
													{{ $equiposasociado->cliente->compania }}
												</td>
												
												<td>
													{{ $equiposasociado->user->name }}
												</td>
												<td>
													@if( $equiposasociado->fecha_vendido != '' || $equiposasociado->fecha_vendido != null )
														{{ $equiposasociado->fecha_vendido->format('M d, Y, G:i') }}
													@else
														---
													@endif
												</td>
												<td> 
													@if ( $equiposasociado->pagado === 0 )
														<!--<form method="POST" action="{{ route('admin.pagoicc', $equiposasociado->id) }}"
															style="display: inline">
															@csrf 
															<button class="btn btn-warning btn-sm btn-block" title='Por Cobrar Cast' onclick="return confirm('Pago relaizado, el proseso es irreversible.')">
																<i class="fa fa-credit-card"></i> X-Cobrar
															</button>	
														</form> -->
														<button class="btn btn-warning btn-sm btn-block" title='Por Cobrar Cast'>
															<i class="fa fa-credit-card"></i> X-Cobrar
														</button>
													@else
														<button class="btn btn-success btn-sm btn-block" title="Producto pagado a empresa">
															<i class="fa fa-credit-card"></i> Pagado
														</button>
													@endif
																		
												</td>
											</tr>
										@endif										
									  @endforeach
									</tbody>
								  </table>
							</div>
							
							<div class="tab-pane" id="tab_3-2">
								<table id="post-table2" class="table table-bordered table-hover">
									<thead>
									  <tr>
										<th>IMEI</th>
										<th>Almacen</th>
										<th>Publico/Pago</th>
										<th>Proveedor</th>
										<th>Accion</th>
									  </tr>
									</thead>							
									<tbody>
									  @foreach ($equiposasociados as $equiposasociado)
										@if ( $equiposasociado->almacene_id != 1 && $equiposasociado->vendido == 0 )
											<tr>
												<td>{{ $equiposasociado->icc }}</td>
												<td>
													{{ $equiposasociado->cliente->compania }}													
												</td>
			
												<th>{{ $equiposasociado->articulo->publico }}</th>
												<td>{{ $equiposasociado->proveedore->compania }}</td>
												<td > 													
													<!--<a class="btn btn-danger btn-xs"><i class="fa fa-credit-card"></i></a>-->

													<!--<form method="POST" action="{{ route('admin.vendidoicc', $equiposasociado->id) }}"
														style="display: inline">
													   @csrf 
													   <input id="cliente" name="cliente" type="hidden" value="{{ $equiposasociado->cliente_id }}">
													   <button class="btn btn-danger btn-sm btn-block" onclick="return confirm('Estas seguro que esta ICC se vendio, el proseso es irreversible.')">
														<i class="fa fa-credit-card"></i> Vender </button>
												   </form>-->
													<div style="margin-top: 5px;">
													<form method="POST" action="{{ route('equiposasociados.icc.destroycliente', $equiposasociado->id) }}"
														 style="display: inline">
														@csrf {{ method_field('DELETE') }}
														<button class="btn btn-sm btn-block btn-danger" title='Eliminar IMEI de este cliente.' onclick="return confirm('Estas seguro de eliminar este IMEI del cliente.')">
														<i class="fa fa-trash"></i> Eliminar</button>
													</form> 
												    </div>
												</td>
											</tr>
										@endif										
									  @endforeach
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
  @include('admin.articulos.createicc')
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
			url: '/admin/articulos/{{ $articulo->id }}/photos',
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
