@if ( auth()->user()->level != 103 )
    <form method="POST" action="{{ route('admin.vendidoicc', $id) }}" style="display: inline">
        @csrf 
        <input id="cliente_id" name="cliente_id" type="hidden" value="{{ auth()->user()->id }}">
        <button class="btn btn-danger btn-xs" id='vendercliente' 
        onclick="return confirm('Estas seguro que esta Equipo se vendio, el proseso es irreversible.')">
        <i class="fa fa-credit-card"></i>
        </button>
    </form>

    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" title='Agregar numero a ICC' data-backdrop="static" data-keyboard="false"
		data-target="#myModalAgregarNumeroICC_{{ $id }}">
		Pasar a Cliente
	</a>

    <!--modal para agregar numero-->
    <div class="modal fade" id="myModalAgregarNumeroICC_{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="myModalAgregarNumeroICC" aria-hidden="true">
        <form method="POST" action="{{ route('admin.pasarnumeroicc') }}">
            @csrf
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalAgregarNumeroICC">Agregar "Numero a ICC".</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group {{ $errors->has('numero_icc') ? 'has-error' : '' }}">
                            @foreach ($clientes as $cliente)
                            {{ $cliente->id }}
                            @endforeach
                        <input name='numero_icc' id='numero_icc' placeholder="Numero de ICC" class="form-control" value="{{ old('numero_icc', $cantidad) }}">								
                        {!! $errors->first('numero_icc', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>      
                </div>
                <div class="modal-footer">
                <!--<button class="btn btn-default" data-dismiss="modal">Cerrar</button>-->
                <input id="id" name="id" type="hidden" value="{{ $id }}">
                <button class="btn btn-primary">Agregar Folio Cliente</button>
                </div>
            </div>
            </div>
        </form>  
    </div>
        <!-- End registar numero en ICC -->
@elseif( auth()->user()->level == 103 || auth()->user()->level == 102 && $cliente_id != 0 )
    <form method="GET" action="{{ route('ticketsarticuloentrega', $id) }}" style="display: inline">
        @csrf 
        <button class="btn btn-default btn-xs" title='Por Cobrar Cast'>
            <i class="fa fa-print"></i>Ticks Entrega
        </button>	
    </form>
@else
    -------      
@endif >