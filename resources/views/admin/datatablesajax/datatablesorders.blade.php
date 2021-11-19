    @if( checkrights('PUORSV', auth()->user()->permissions) )

        <a href="{{ route('admin.orders.show', $id ) }}" class="btn btn-info btn-xs" title='See order'>
            <i class="fa fa-eye"></i>
        </a>

        <a href="#" class="btn btn-success btn-xs" title="Expor to PDF." disabled="true">
            <i class="fa fa-file-pdf-o"></i>
        </a>
    @else
        -----
    @endif
