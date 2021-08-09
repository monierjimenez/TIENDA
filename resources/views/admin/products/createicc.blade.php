<!-- Modal name: myModalLabel-->

<div class="modal fade" id="myModalICC" tabindex="-1" role="dialog" aria-labelledby="myModalICC" aria-hidden="true">
  <form method="get" action="{{ route('admin.articulos.icc', '#createicc') }}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalICC">Agregar "IMEI asociados a este Articulo".</h4>
        </div>

        <div class="modal-body">  

          <div class="box-body">

            <div class="form-group">
              <div class="row">              
                <div class="col-xs-6 {{ $errors->has('venta_id') ? 'has-error' : '' }}">
                  <label># Compra</label> 
                  <select name="venta_id" class="form-control">
                  @if ( count($ventas) != 0 )
                    @foreach( $ventas as $venta )
                      @if ( isset($_GET['venta_id']) )                      
                        <option value="{{ $venta->numero_venta }}" {{ old('venta_id', $_GET['venta_id']) == $venta->numero_venta ? 'selected' : ''}}>
                      @else
                        <option value="{{ $venta->numero_venta }}" {{ old('venta_id') == $venta->numero_venta ? 'selected' : ''}}>
                      @endif
                        {{ $venta->numero_venta }} @if ( $venta->tipo_venta == 1 ) - Chips @elseif ( $venta->tipo_venta == 2 ) - Telefonos @endif</option>
                    @endforeach
                    <option value="{{ $venta->numero_venta+1 }}" {{ old('venta_id') == $venta->numero_venta ? 'selected' : ''}}>{{ $venta->numero_venta+1 }} Proxima venta</option>
                  @else
                    <option value="1"> 1 </option>
                  @endif
                  </select>
                  {!! $errors->first('venta_id', '<span class="help-block">:message</span>') !!}
                </div>
                
                <div class="col-xs-6 {{ $errors->has('costo') ? 'has-error' : '' }}">
                  <div class="form-group {{ $errors->has('costo') ? 'has-error' : '' }}">
                    <label>Costo</label>
                    @if ( isset($_GET['costo']) )
                      <input name='costo' id='costo' placeholder="Costo" class="form-control" value="{{ old('costo', $_GET['costo']) }}">
                    @else
                    <input name='costo' id='costo' placeholder="Costo" class="form-control" value="{{ old('costo', $articulo->costo) }}">
                    @endif
                    {!! $errors->first('costo', '<span class="help-block">:message</span>') !!}
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-xs-6 {{ $errors->has('mayoreo_tres') ? 'has-error' : '' }}">
                  <div class="form-group {{ $errors->has('icc_1') ? 'has-error' : '' }}">
                    <label>ICC</label>
                    <input name='icc_1' id='icc_1' placeholder="ICC 1" class="form-control" value="{{ old('icc_1') }}">
                    {!! $errors->first('icc_1', '<span class="help-block">:message</span>') !!}
                  </div>
                </div>
                
                <div class="col-xs-6 {{ $errors->has('proveedore_id') ? 'has-error' : '' }}">
                  <label>Proveedor IMEI</label> 
                  <select name="proveedore_id" class="form-control">
                    @foreach( $proveedores as $proveedore )
                      @if ( isset($_GET['proveedor1']) )                      
                        <option value="{{ $proveedore->id }}" {{ old('proveedore_id', $_GET['proveedor1']) == $proveedore->id ? 'selected' : ''}}>
                      @else
                        <option value="{{ $proveedore->id }}" {{ old('proveedore_id') == $proveedore->id ? 'selected' : ''}}>
                      @endif
                        {{ $proveedore->compania }} - {{ $proveedore->nombre_completo }}</option>
                    @endforeach
                  </select>
                  {!! $errors->first('proveedore_id', '<span class="help-block">:message</span>') !!}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!--<button class="btn btn-default" data-dismiss="modal">Cerrar</button>-->
          <input id="articulo_id" name="articulo_id" type="hidden" value="{{ $articulo->id }}">
          <button class="btn btn-primary">Agregar IMEI</button>
        </div>
      </div>
    </div>
  </form>  
</div>