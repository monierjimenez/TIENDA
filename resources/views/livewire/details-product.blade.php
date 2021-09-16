<div>
    <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <div class="modal-body">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <!-- Product Slider -->
                    <div class="product-gallery" wire:ignore>
                        <div class="quickview-slider-active">

                            @foreach($product->photos as $photos)
                                <div class="single-slider">
                                    <img src="/images/{{ $photos->url }}" alt="#">
                                </div>
                            @endforeach

                            @if ( $product->spec != [] )
                                @foreach($product->spec as $photospesc)
                                    <div class="single-slider">
                                        <img src="/images/{{ $photospesc->image }}" alt="#">
                                    </div>
                                @endforeach
                            @endif
{{--                            <div class="single-slider">--}}
{{--                                <img src="https://via.placeholder.com/569x528" alt="#">--}}
{{--                            </div>--}}
{{--                            <div class="single-slider">--}}
{{--                                <img src="https://via.placeholder.com/569x528" alt="#">--}}
{{--                            </div>--}}
{{--                            <div class="single-slider">--}}
{{--                                <img src="https://via.placeholder.com/569x528" alt="#">--}}
{{--                            </div>--}}
{{--                            <div class="single-slider">--}}
{{--                                <img src="https://via.placeholder.com/569x528" alt="#">--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <!-- End Product slider -->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="quickview-content">
                        <h2>{{ $product->name }}</h2>
                        <div class="quickview-ratting-review">
                            {{--                                    <div class="quickview-ratting-wrap">--}}
                            {{--                                        <div class="quickview-ratting">--}}
                            {{--                                            <i class="yellow fa fa-star"></i>--}}
                            {{--                                            <i class="yellow fa fa-star"></i>--}}
                            {{--                                            <i class="yellow fa fa-star"></i>--}}
                            {{--                                            <i class="yellow fa fa-star"></i>--}}
                            {{--                                            <i class="fa fa-star"></i>--}}
                            {{--                                        </div>--}}
                            {{--                                        <a href="#"> (1 customer review)</a>--}}
                            {{--                                    </div>--}}
                            <div class="default-social">
                                <h4 class="share-now">Share:</h4>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::fullUrl()}}&title={{$product->seotitle}}"
                                           class="facebook"
                                           title="{{ __('Share on Facebook') }}"
                                        >
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?url={{Request::fullUrl()}}&text={{$product->seotitle}}&via={user_id}&hashtags={{ config('app.name') }}"
                                           class="twitter">                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
{{--                                    <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>--}}
{{--                                    <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                </ul>
                            </div>
                            <div class="quickview-stock">
                                <span><i class="fa fa-check-circle-o"></i> in stock</span>
                            </div>
                        </div>
                        <hr class="hr-personality">

                        <div class="quickview-peragraph">
                            <p>
                                Precio:
                                <span class="style-price-product">
{{--                                    @if($product->spec != '[]')--}}
{{--                                        {{ $modeloactalizado->sale_price }}--}}
{{--                                    </span>--}}
{{--                                        @if( $modeloactalizado->sale_price_before != '' )--}}
{{--                                            <span style="text-decoration: line-through;font-size: 13px;">--}}
{{--                                                ${{ $modeloactalizado->sale_price_before }}--}}
{{--                                            </span>--}}
{{--                                        @endif--}}
{{--                                    @else--}}
                                        ${{ $modeloactalizado->sale_price }}
                                        </span>
                                        @if( $modeloactalizado->sale_price_before != '' )
                                            <span style="text-decoration: line-through;font-size: 13px;">${{ $modeloactalizado->sale_price_before }}</span>
                                        @endif
{{--                                    @endif--}}
                            </p>
                        </div>

                        <div class="quickview-peragraph">
                            <p>Envio: $0 </p>
                        </div>

                        <div class="quickview-peragraph">
                            <p>Peso: {{ $modeloactalizado->bulk_weight }} Lb ( {{ $modeloactalizado->number_packages }} bulto )</p>
                        </div>

                        <div class="size">
                            <div class="row">
                                @if($product->spec != '[]')
                                    <div class="col-lg-6 col-12" wire:ignore>
                                        <h5 class="title">Modelo</h5>

{{--                                        <a href="#" wire:click="selecSpecs(1)">--}}
{{--                                            <i class="fa  fa-angle-double-right"></i> eweewewew--}}
{{--                                        </a>--}}
{{--                                        wire:model="model"--}}

                                        <select name="modelo" wire:model="modelo" class="modelo">
                                            @foreach($product->spec as $key )
{{--                                                @if( dameSpesc($product->id)[0]['id'] == $key->id )--}}
{{--                                                    <option value="{{ $key->id }}" selected>--}}
{{--                                                @else--}}
                                                <option value="{{ $key->id }}">
{{--                                                @endif--}}
                                                    {{ $key->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <script>
                                        document.addEventListener('livewire:load', function (){
                                            $('.modelo').on('change', function (){
                                                 @this.set('modelo', this.value);
                                            })
                                        })
                                    </script>
                                @endif

                                @if($product->colore_id != null)
                                        <div class="col-lg-6 col-12" wire:ignore>
                                            <h5 class="title">Color</h5>
                                            <select name="color">
                                                @foreach(explode('.', $product->colore_id) as $info )
                                                    @php $colo = dameColor($info) ; @endphp
                                                    <option value="{{ $colo->id }}">{{ $colo->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                            </div>
                        </div>

                        <div class="quantity">
                            <!-- Input Order -->
                            <div class="input-group">
                                <div class="button minus">
                                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <i class="ti-minus"></i>
                                    </button>
                                </div>
                                <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                <div class="button plus">
                                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                        <i class="ti-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <!--/ End Input Order -->
                        </div>
                        <div class="add-to-cart">
                            <a href="#" class="btn btn-block">Add to cart</a>
                            <a href="{{ route('collections', $product->categorie) }}" class="btn btn-block">Continuar Comprando</a>
                            {{--                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>--}}
                            {{--                                   <a href="#" class="btn min"><i class="fa fa-compress"></i></a>--}}
                        </div>
                        <hr class="hr-personality">

                        <div class="quickview-peragraph">
                            <p>
                                @if($product->brand != '')
                                    Marca:  {{ $product->brands[0]['name'] }}
                                @endif
                                @if($product->model != '')
                                    <br>Modelo:  {{ $product->modelp[0]['name'] }}
                                @endif
                            </p>
                        </div>

                        <div class="quickview-peragraph">
                            @if($product->description != '')
                                <span class="style-price-product">Descripcion</span> <br>
                                {!! $product->description !!}
                            @endif
                        </div>

                        <div class="quickview-peragraph">
                            @if($product->features != '')
                                <span class="style-price-product">Características</span>
                                {!! $product->features !!}
                            @endif

                        </div>

                        {{--                                                                <div class="default-social">--}}
                        {{--                                    <h4 class="share-now">Share:</h4>--}}
                        {{--                                    <ul>--}}
                        {{--                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>--}}
                        {{--                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                        {{--                                    </ul>--}}
                        {{--                                </div>--}}
                        {{--                                {{$products}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
