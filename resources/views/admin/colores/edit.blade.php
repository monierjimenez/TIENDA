@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>COLOR<small>Crear Color</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer-alt"></i> Inicio</a></li>
      <li><a href="{{ route('admin.colores.index') }}"><i class="fa fa-list"></i>Listado Color</a></li>
      <li class="active">Crear</li>
    </ol>
  </section>
@stop

@section('content')
	<div class="row">
		<form method="POST" action="{{ route('admin.colores.update', $colore) }}">
			@csrf  {{ method_field('PUT') }}
		<div class="col-md-8">
			<div class="box box-primary">
		    	<div class="box-body">
		    		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		    			<label>Nombre color</label>
		    			<input name='name' placeholder="Nombre del color" class="form-control" value="{{ old('name', $colore->name) }}">
		    			{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
		    		</div>
                    <div class="form-group {{ $errors->has('condition') ? 'has-error' : '' }}">
                        <select name="condition" class="form-control" >
                            <option value="0" {{ old('condition', $colore->condition) == 0 ? 'selected' : ''}}>Public</option>
                            <option value="1" {{ old('condition', $colore->condition) == 1 ? 'selected' : ''}}>Draf</option>
                        </select>
                        {!! $errors->first('condition', '<span class="help-block">:message</span>') !!}
                    </div>
				</div>
	    	</div>
   		</div>


    	<div class="col-md-4">
    		<div class="box box-primary">
				<br>
				<div class="box-body">
			    	<div class="form-group">
			    		<button type="submit" class='btn btn-primary btn-block'>Guardar Color</button>
			    	</div>
		    	</div>
    		</div>
    	</div>
    	</form>
	</div>
@stop

@push('styles')
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="/adminlte/plugins/iCheck/all.css">
@endpush

@push('script')
<!-- iCheck 1.0.1 -->
<script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
<script>
	//Flat red color scheme for iCheck
	$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
		checkboxClass: 'icheckbox_flat-green',
		radioClass: 'iradio_flat-green'
	});

</script>
@endpush
