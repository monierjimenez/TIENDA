@extends('admin.layout')

@section('header')
	<section class="content-header">
    <h1>SLIDER<small>Crear Slider</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer-alt"></i> Inicio</a></li>
      <li><a href="{{ route('admin.sliders.index') }}"><i class="fa fa-user-md"></i>Listado Sliders</a></li>
      <li class="active">Crear</li>
    </ol>
  </section>
@stop

@section('content')
	<div class="row">
		@if($slider->photos->count())
		<div class="col-md-12">
			<div class="box box-primary">
		    	<div class="box-body">
					<div class='row'>
						@foreach ($slider->photos as $photo)
							 <form method="POST" action="{{ route('admin.photos.destroy', $photo) }}">
								 @csrf {{ method_field('DELETE') }}
								 <div class="col-md-3" >
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
		<form method="POST" enctype="multipart/form-data" action="{{ route('admin.sliders.update', $slider) }}">
			@csrf  {{ method_field('PUT') }}
		<div class="col-md-8">
			<div class="box box-primary">

		    	<div class="box-body">
		    		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		    			<label>Nombre del Slider</label>
		    			<input name='name' placeholder="Nombre del slider" class="form-control" value="{{ old('name', $slider->name) }}">
		    			{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
		    		</div>
				</div>

	    	</div>
   		</div>

    	<div class="col-md-4">
    		<div class="box box-primary">
				<div class="box-body">
		    		<div class="form-group {{ $errors->has('publico') ? 'has-error' : '' }}">
						<label>Publico </label>
						<input type="hidden"  name="publico" value="0">
						<input type="checkbox" name="publico" class="flat-red" value="1" {{ $slider->publico == 1 ? 'checked' : '' }}>
						{!! $errors->first('publico', '<span class="help-block">:message</span>') !!}
		    		</div>
				</div>

				<div class="box-body">
	    			<div class="dropzone"></div>
				</div><br>

	   			<div class="box-body">
			    	<div class="form-group">
			    		<button type="submit" class='btn btn-primary btn-block'>Guardar Slider</button>
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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css" integrity="sha512-bbUR1MeyQAnEuvdmss7V2LclMzO+R9BzRntEE57WIKInFVQjvX7l7QZSxjNDt8bg41Ww05oHSh0ycKFijqD7dA==" crossorigin="anonymous" />
@endpush

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>
	<!-- iCheck 1.0.1 -->
	<script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
	<!-- CK Editor -->
	<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

	<script>
		CKEDITOR.replace('curriculum_vitae_editor');

		//Flat red color scheme for iCheck
		$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
			checkboxClass: 'icheckbox_flat-green',
			radioClass: 'iradio_flat-green'
		});

		var myDropzone = new Dropzone('.dropzone', {
			url: '/admin/sliders/{{ $slider->id }}/photos',
			paramName: 'photo',
			acceptedFiles: 'image/*',
			maxFilesize: 3,
			maxFiles: 10,
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			dictDefaultMessage: 'Arrastra las fotos aquí para subirlas'
		});

		myDropzone.on('error', function (file, res) {
			var msg = res.errors.photo[0];
			$('.dz-error-message:last > span').text(msg);
		});
		Dropzone.autoDiscover = false;
	</script>
@endpush
