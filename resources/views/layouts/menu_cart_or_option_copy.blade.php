    @if( $productsin->spec == '[]' && $productsin->colore_id == '' )
{{--        <form method="POST" action="{{ route('store_a_product.store', $productsin) }}" id="cerrarSesion{{$productsin->id}}">--}}
{{--            @csrf--}}
{{--            <a href="" id="salir" onclick="cerrar();" title="Add to cart">{{ __('Add to cart') }}</a>--}}
            <a href="{{ route('store_a_product.store', $productsin) }}" onclick="document.getElementById('cerrarSesion{{$productsin->id}}').submit();">
{{--            <a href="{{ route('store_a_product.store', $product) }}" >--}}
                <i class="fa fa-plus"></i>
                {{ __('Add to cart') }}
            </a>
{{--            <button type="submit" class='btn btn-block'>{{ __('Add to cart') }}</button>--}}

{{--            <form method="GET" action="{{ route('store_a_product.store', $product) }}">--}}
{{--                @csrf--}}
{{--            <button type="submit" class='btn btn-block'>{{ __('Add to cart') }}</button>--}}
{{--        </form>--}}
    @endif

    @if( $productsin->spec != '[]' || $productsin->colore_id != null)
        <a href="{{ route('productdetails', array($productsin->categorie->url, $productsin)) }}" title="Add to cart" >Elegir Opcion </a>
    @endif
