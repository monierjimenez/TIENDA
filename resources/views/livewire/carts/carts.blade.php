<div>
    @if( session()->has('flash') )
        <script>
            toastr.success("{{session()->get('flash')}}");
        </script>
    @elseif( session()->has('flasherror') )
        <script>
            toastr.error("{{session()->get('flasherror')}}");
        </script>
    @elseif( count($errors) != 0 )
        <script>
            toastr.error("An error has occurred, check the delivered data");
        </script>
    @endif
    <div class="container">
        <div class="row">
            <div class="shopping-cart section" style="width: 100%;">
                <div class="container">
{{--                    {{$shoppingcartdetails}}--}}
                    @if ( count($shoppingcartdetails) != 0 )
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-12">
                                <!-- Shopping Summery -->
                                <table class="table shopping-summery">
                                    <thead>
                                    <tr class="main-hading">
                                        <th>{{ __('Product') }}</th>
                                        <th></th>
                                        {{--                                        <th class="text-center">PRICE</th>--}}
                                        <th class="text-center">QUANTITY</th>
                                        <th class="text-center">TOTAL</th>
                                        <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach( $shoppingcartdetails as $shoppingcartdetail )
                                        <tr>
                                            <td class="image" data-title="{{ __('Product') }}">
                                                {{--                                                {{$product}}--}}
                                                {{--                                                <img src="/images/{{primeraPhotoProduct($product)}} alt="#">--}}
                                                <a href="{{ route('productdetails', array($shoppingcartdetail->product->categorie->url, $shoppingcartdetail->product)) }}">
                                                <img class="default-img" src="/images/{{primeraPhotoProduct($shoppingcartdetail->product)}}" alt="#">
                                                </a>
                                            </td>
                                            <td class="product-des" data-title="Description">
                                                <p class="product-name">
                                                    {{--                                                    @if( $shoppingcartdetail->modelo != 0 )--}}
                                                    {{--                                                    <a href="{{ route('productdetails', array($shoppingcartdetail->product->categorie->url, $shoppingcartdetail->product)) }}?id={{ $shoppingcartdetail->spec->id }}">--}}
                                                    {{--                                                    @else--}}
                                                    <a href="{{ route('productdetails', array($shoppingcartdetail->product->categorie->url, $shoppingcartdetail->product)) }}">
                                                        {{--                                                    @endif--}}
                                                        {{ $shoppingcartdetail->product->name }}
                                                    </a>
                                                </p>
                                                <p class="product-des">
                                                    @if( $shoppingcartdetail->modelo != 0 )
                                                        <span>
{{--                                                            {{ dd($shoppingcartdetail->product->shopping_cart_detail) }}--}}
                                                            ${{ $shoppingcartdetail->spec->sale_price }}
                                                            @if( $shoppingcartdetail->spec->sale_price_before != 0 )
                                                                <span style="text-decoration: line-through;">
                                                                    ${{ $shoppingcartdetail->spec->sale_price_before }}
                                                                </span>
                                                            @endif
                                                        </span>
                                                    @else
                                                        <span>
                                                            ${{ $shoppingcartdetail->product->sale_price }}
                                                            @if( $shoppingcartdetail->product->sale_price_before != 0 )
                                                                <span style="text-decoration: line-through;">
                                                                    ${{ $shoppingcartdetail->product->sale_price_before }}
                                                                </span>
                                                            @endif
                                                        </span>
                                                    @endif
                                                </p>
                                                @if( $shoppingcartdetail->color != 0 )
                                                    {{ __('Color') }}: {{ $shoppingcartdetail->colore->name }}
                                                @endif
                                                <p>
                                                    @if( $shoppingcartdetail->modelo != 0 )
                                                        {{ __('Model') }}: {{ $shoppingcartdetail->spec->name }}
                                                    @endif
                                                </p>
                                            </td>
                                            {{--  <td class="price" data-title="Price"><span>$110.00 </span></td>--}}
                                            <td class="qty" data-title="Qty"><!-- Input Order -->
                                                <div class="input-group">
                                                    <div class="button minus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="minus" data-field="quant[1]">
                                                            <i class="ti-minus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="{{ $shoppingcartdetail->quantity }}">
                                                    <div class="button plus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/ End Input Order -->
                                            </td>
                                            <td class="total-amount" data-title="Total">
                                                <span>${{ $shoppingcartdetail->quantity*$shoppingcartdetail->price }}</span>
                                            </td>
                                            <td class="action" data-title="Remove">
                                                <a href="#" wire:click="delete({{ $shoppingcartdetail->id }})"><i class="ti-trash remove-icon"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!--/ End Shopping Summery -->
                            </div>

                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="total-amount">
                                    <div class="right">
                                        <ul>
                                            <li>
                                                {{ __('Cart Total') }}<span>${{ $total_price_products }}</span>
                                            </li>
                                            <li>
                                                {{ __('Shipment') }}<span>0</span>
                                            </li>
                                            <li>
                                                {{ __('You Save') }}<span>${{ $total_save_mony }}</span>
                                            </li>
                                        </ul>
                                        <div class="button5">
                                            <a href="#" class="btn">{{ __('PROCEED TO PAYMENT') }}</a>
                                            <a href="{{ route('collectionsall') }}" class="btn">{{ __('Continue buying') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <p style="text-align: center">
                            Tu carrito esta vacío
                            <br>
                            <div class="row" >
                                <div class="col-3" ></div>
                                    <div class="col-6" >
                                        <img src="/images/cart-empty.png" class="img">
                                    </div>
                                <div class="col-3"></div>
                            </div>
                           <br>
                            <div class="button5" style="text-align: center;">
                                <a href="{{ route('collectionsall') }}" class="btn">{{ __('Buy our products') }}</a>
                            </div>
                        </p>
                    @endif
                </div>
            </div>
            <!--/ End Shopping Cart -->
        </div>
    </div>
</div>


