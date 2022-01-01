    @if( $product->spec == '[]' && $product->colore_id == '' )
        <form method="GET" action="{{ route('store_a_product.store', $product) }}" id="cerrarSesion{{$product->id}}">
            @csrf
{{--            <a href="" id="salir" onclick="cerrar();" title="Add to cart">{{ __('Add to cart') }}</a>--}}
            <a href="{{ route('store_a_product.store', $product) }}" onclick="document.getElementById('cerrarSesion{{$product->id}}').submit();">
                <i class="fa fa-plus"></i>
                {{ __('Add to cart') }}
            </a>

{{--            <form method="GET" action="{{ route('store_a_product.store', $product) }}">--}}
{{--                @csrf--}}
{{--            <button type="submit" class='btn btn-block'>{{ __('Add to cart') }}</button>--}}
        </form>
    @endif

    @if( $product->spec != '[]' || $product->colore_id != null)
        <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}" title="Add to cart" >Elegir Opcion </a>
    @endif
