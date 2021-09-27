
    @if( $product->spec == '[]' && $product->colore_id == null )
        <a  href="{{ route('store_a_product.store', $product) }}" title="Add to cart">{{ __('Add to cart') }} </a>
    @endif

    @if( $product->spec != '[]' || $product->colore_id != null)
        <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}" title="Add to cart" >Elegir Opcion </a>
    @endif
