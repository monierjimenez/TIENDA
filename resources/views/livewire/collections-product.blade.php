<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="shop-sidebar visible-menu">
                    <!-- Single Widget -->
                    <div class="single-widget category" style="margin-bottom: 30px;">
                        <h3 class="title">Categories</h3>
                        <ul class="categor-list">
                            @foreach($categorys as $category)
                                <li>
                                    <a href="#" wire:click="collectionsCategory({{ $category->id }})">
                                        <i class="fa  fa-angle-double-right"></i> {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>



{{--            <div wire:loading.delay >--}}
{{--                    Cargando--}}
{{--            </div>--}}
            <div class="col-lg-9 col-md-8 col-12" style="margin-top: -51px;"  >
                <div class="collections" wire:loading.class="invisible" >
{{--                    row--}}
                    @if($products != '[]')
                        @foreach( $products as $product )
                            <div class="collection-items" >
{{--                                col-lg-4 col-md-6 col-12--}}
                                <div class="single-product" >
                                    <div class="product-img">
                                        <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}">
                                            <img class="default-img" src="/images/{{primeraPhotoProduct($product)}}" alt="#">
                                            {{--
                                                                                        {{--                                            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
                                            <span class="price-dec">10% Off</span>
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                {{--                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#">--}}
                                                {{--                                                    <i class=" ti-eye" style="margin-right: 6px;"></i><span>Quick Shop</span>--}}
                                                {{--                                                </a>--}}
                                                {{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
                                                {{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
                                            </div>
                                            <div class="product-action-2">
                                                @if( $product->spec != '[]')
                                                    <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}" title="Add to cart" >Elegir Opcion</a>
                                                @else
                                                    <a title="Add to cart" href="#">{{ __('Add to cart') }} </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="{{ route('productdetails', array($product->categorie->url, $product)) }}">{{ $product->name }}</a></h3>
                                        <div class="product-price">
                                            @if( $product->sale_price_before != '' )
                                                <span>${{ $product->sale_price }}</span>
                                                <span class="old">${{ $product->sale_price_before }}</span>
                                            @else
                                                <span>${{ $product->sale_price }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-product">
                                No ahi Productos
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
