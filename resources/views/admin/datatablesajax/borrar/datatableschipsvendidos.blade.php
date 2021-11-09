@if ( auth()->user()->level === 103 )
    @if ( $pagado === 0 )
        <form method="POST" action="{{ route('admin.pagoicc', $id) }}" style="display: inline">
         @csrf 
            <button class="btn btn-warning btn-xs" title='Por Cobrar Cast' onclick="return confirm('Se relaizara, el proseso es irreversible.')">
                <i class="fa fa-credit-card"></i> X-Cobrar
            </button>	
        </form>
    @else
        <button class="btn btn-success btn-xs" title="Producto pagado a empresa">
            <i class="fa fa-credit-card"></i> PagadoEmpresa
        </button>
        <br>
        <form method="GET" action="{{ route('ticketsarticuloclientepdf', $id) }}" style="display: inline">
            @csrf 
            <button class="btn btn-default btn-xs" title='Tick pago realizado.'>
                <i class="fa fa-print"></i> Imprimir Tick
            </button>	
        </form>
    @endif
@else 
    @if ( $pagado == 0 )
        <button class="btn btn-warning btn-sm btn-block" title='Por Cobrar Cast'>
            <i class="fa fa-credit-card"></i> VendidoXPagar
        </button>	
        <!--
        <form method="GET" action="{{ route('ticketsarticulo', $id) }}" style="display: inline">
            @csrf 
            <button style="margin-top: 5px;" class="btn btn-default btn-sm btn-block" title='Por Cobrar Cast'>
                <i class="fa fa-print"></i>Imprimir Ticks
            </button>	
        </form>-->
    @else
        <button class="btn btn-success btn-sm btn-block" title="Producto pagado a empresa">
            <i class="fa fa-credit-card"></i> VendidoPagado
        </button>
    @endif
@endif