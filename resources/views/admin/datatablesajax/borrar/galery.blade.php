
<button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModalArticuloGalery{{ $id }}"> 
    <i class="fa fa-object-ungroup"></i>
</button>

@if ($stock != 0 && !Auth::guest() )
    <form method="post" action="{{ route('pages.addToCart', $id) }}" style="display: inline">
        @csrf
        <button class="btn btn-xs btn-success"> 
            <i class="fa fa-shopping-cart"></i> Añadir
        </button>
    </form>
@elseif ( !Auth::guest() )
    <button class="btn btn-xs btn-success disabled"> 
        <i class="fa fa-shopping-cart"></i> Añadir
    </button>
@endif

<div class="modal fade" id="myModalArticuloGalery{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="myModalArticuloGalery{{ $id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                   
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                    &times;</span>
                </button>
                <h4 class="modal-title" id="myModalArticuloGalery{{ $id }}">Fotos Articulo: {{ $name_producto }}</h4>
            </div>

            <div class="modal-body">                      
                <div class="box-body">

                    <div class="img-responsive" >                                      
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($photos as $photo)                                  
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner" >
                                @if ( count($photos) != 0 )
                                    @foreach ($photos as $photo)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}"  style="padding:10px 10px">
                                            <img class="d-block w-100 img-responsive" src="/images/{{ $photo['url'] }}" alt="{{ $codigo_producto }}" >
                                        </div>
                                    @endforeach
                                @else
                                    <div class="carousel-item active"  style="padding:10px 10px">
                                        <img class="d-block w-100 img-responsive" src="/images/no-acces1.png" alt="{{ $codigo_producto }}" >
                                    </div>
                                @endif
                            </div>
                             
                        </div>
                    </div> 

                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>