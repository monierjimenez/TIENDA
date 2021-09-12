@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>CLASIFICACION<small>Crear clasificacion</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer-alt"></i> Home</a></li>
      <li><a href="{{ route('admin.categorias.index') }}"><i class="fa fa-list"></i>List category</a></li>
      <li class="active">Create</li>
    </ol>
  </section>
@stop

@section('content')
	<div class="row">
		<form method="POST" action="{{ route('admin.categorias.update', $categoria) }}" enctype="multipart/form-data">
			@csrf  {{ method_field('PUT') }}
		<div class="col-md-8">
			<div class="box box-primary">
		    	<div class="box-body">
		    		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		    			<label>Name</label>
		    			<input name='name' placeholder="Nombre de la categoria" class="form-control" value="{{ old('name', $categoria->name) }}">
		    			{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
		    		</div>

                    <div class="form-group {{ $errors->has('seotitle') ? 'has-error' : '' }}">
                        <label>SEO Title</label>
                        <input name='seotitle' placeholder="SEO Title" class="form-control" value="{{ old('seotitle', $categoria->seotitle) }}">
                        {!! $errors->first('seotitle', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('seodescription') ? 'has-error' : '' }}">
                        <label>SEO Description</label>
                        <input name='seodescription' placeholder="SEO Description" class="form-control" value="{{ old('seodescription', $categoria->seodescription) }}">
                        {!! $errors->first('seodescription', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('seokeywords') ? 'has-error' : '' }}">
                        <label>SEO Keywords</label>
                        <input name='seokeywords' placeholder="SEO Keywords Ej: envios, cuba" class="form-control" value="{{ old('seokeywords', $categoria->seokeywords) }}">
                        {!! $errors->first('seokeywords', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('condition') ? 'has-error' : '' }}">
                        <label>Status</label>
                        <select name="condition" class="form-control" >
                            <option value="0" {{ old('condition', $categoria->condition) == 0 ? 'selected' : ''}}>Public</option>
                            <option value="1" {{ old('condition', $categoria->condition) == 1 ? 'selected' : ''}}>Draf</option>
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
                   <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                            <label>Image Category (570x320)</label><br>
                            @if( $categoria->image != '' )
                                <img src="/images/{{ $categoria->image }}" class='img-responsive' alt="{{ $categoria->image }}">
                           @endif
                           <input type="file" name="image">
                            {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
                   </div>

			    	<div class="form-group">
			    		<button type="submit" class='btn btn-primary btn-block'>Save Category</button>
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
