@extends('admin.layout')

@section('header')

	@if( !checkrights('PUE', auth()->user()->permissions) )
		<script type="text/javascript">
			window.location="/admin";
		</script>
	@endif

	<section class="content-header">
    <h1>SPECS<small>Update Specs</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-home"></i>Home</a></li>
      <li><a href="{{ route('admin.specs.index') }}"><i class="fa fa-reorder"></i>List Specs</a></li>
      <li><i class="fa fa-refresh"></i> Update</li>
    </ol>
  </section>
@stop

@section('content')
	<div class="row">
		<div class="col-md-4">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.specs.update', $spec) }}">
            @csrf  {{ method_field('PUT') }}
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group {{ $errors->has('reference') ? 'has-error' : '' }}">
                            <label>Reference</label>
                            <input name='reference' placeholder="Name Role" class="form-control" value="{{ old('name', $spec->reference) }}">
                            {!! $errors->first('reference', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label>Name</label>
                            <input name='name' placeholder="Name" class="form-control" value="{{ old('name', $spec->name) }}">
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <button type="submit" class='btn btn-primary btn-block'>Update </button>
                        </div>
                    </div>
                </div>
            </form>
   		</div>

		<div class="col-md-8">

{{--            <livewire:specs.features:spec="$spec->name" >--}}
            @livewire('specs.features', ['spec' => $spec])
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
		CKEDITOR.replace('extracto');
		//iCheck for checkbox and radio inputs
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		  });
	</script>
@endpush
