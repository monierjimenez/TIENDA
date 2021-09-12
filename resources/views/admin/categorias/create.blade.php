<!-- Modal -->
<div class="modal fade" id="myModalCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalCategoria">
  <form method="POST" action="{{ route('admin.categorias.store', '#createcategoria') }}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalCategoria">Nombre de la Categoria</h4>
        </div>
        <div class="modal-body">
          
          <div class="box-body">
		    		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		    			<input name='name' id='name' placeholder="Título del clasificacion" class="form-control" required value="{{ old('name') }}">
		    			{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
		    		</div>
		    	</div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Categoria</button>
        </div>
      </div>
    </div>
  </form>  
</div>