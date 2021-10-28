<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>Persona que recibe en Cuba</h2>
                    {{--                        <p>Please register in order to checkout more quickly</p>--}}
                    <br>
                    <!-- Form -->
                    -Order: {{$order->id}}-
{{--                    {{ route('pages.checkout.direction') }}--}}
                    <form class="form" method="post" action="{{ route('pages.checkout.direction') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label>{{ __('First Name') }}<span>*</span></label>
{{--                                    @if($addressesorder != '[]') {{dd(1)}} @else {{dd(3)}} @endif--}}
{{--                                    {{dd($addressesorder)}}--}}
                                    <input type="text" name="name" placeholder="" value="{{ old('name',$addressesorder) != '' ? $addressesorder->name : '' }}" class="form-control">
                                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group {{ $errors->has('second_name') ? 'has-error' : '' }}">
                                    <label>{{ __('Second name') }}</label>
                                    <input type="text" name="second_name" placeholder="" value="{{ old('second_name', $addressesorder) != '' ? $addressesorder->second_name : ''}}">
                                    {!! $errors->first('second_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                    <label>{{ __('Last names') }}<span>*</span></label>
                                    <input type="text" name="last_name" placeholder="" required="required" value="{{ old('last_name', $addressesorder) != '' ? $addressesorder->last_name : ''}}">
                                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group {{ $errors->has('identity_card') ? 'has-error' : '' }}">
                                    <label>{{ __('Identity card') }}<span>*</span></label>
                                    <input type="number" name="identity_card" placeholder="" required="required" value="{{ old('identity_card', $addressesorder) != '' ? $addressesorder->identity_card : ''}}">
                                    {!! $errors->first('identity_card', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('Phone Number') }}<span>*</span></label>
                                    {{-- <input type="text" name="phone_number" placeholder="" required="required">  --}}
                                    <div class="input-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                        <div class="input-group-addon" style="border: 0;">+53</div>
                                        <input type="number" name="phone_number" placeholder="" required="required" value="{{ old('phone_number', $addressesorder) != '' ? $addressesorder->phone_number : '' }}">
                                        {!! $errors->first('phone_number', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                    <label>Dirección<span>*</span></label>
                                    <input type="text" name="address" placeholder="" required="required" value="{{ old('address', $addressesorder) != '' ? $addressesorder->address : '' }}">
                                    {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="form-group {{ $errors->has('numero') ? 'has-error' : '' }}">
                                    <label>No.<span>*</span></label>
                                    <input type="text" name="numero" placeholder="" required="required" value="{{ old('numero', $addressesorder) != '' ? $addressesorder->numero : '' }}">
                                    {!! $errors->first('numero', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="form-group {{ $errors->has('apto') ? 'has-error' : '' }}">
                                    <label>Apto</label>
                                    <input type="text" name="apto" placeholder="" value="{{ old('apto', $addressesorder) != '' ? $addressesorder->apto : '' }}">
                                    {!! $errors->first('apto', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group {{ $errors->has('entre_calle') ? 'has-error' : '' }}">
                                    <label>Entre calles</label>
                                    <input type="text" name="entre_calle" placeholder="" value="{{ old('entre_calle', $addressesorder) != '' ? $addressesorder->entre_calle : '' }}">
                                    {!! $errors->first('entre_calle', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group {{ $errors->has('reparto') ? 'has-error' : '' }}">
                                    <label>Reparto</label>
                                    <input type="text" name="reparto" placeholder="" value="{{ old('reparto', $addressesorder) != '' ? $addressesorder->reparto : '' }}">
                                    {!! $errors->first('reparto', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 {{ $errors->has('selectedEstado') ? 'has-error' : '' }}">
                                <div class="form-group ">
                                    <label>Provincia <span>*</span></label>
                                    <select wire:model="selectedEstado" style="width: 100%;
                                            height: 45px;
                                            line-height: 50px;
                                            margin-bottom: 25px;
                                            background: #F6F7FB;
                                            border-radius: 0px;
                                            border: none;"
                                            name="selectedEstado" class="selectedEstado form-control">
                                        <option value="">.: Selecciones Provincia :.</option>
                                        @foreach($estados as $estado)
                                            @if( $addressesorder != '' )
                                                <option value="{{ $estado->id }}" {{ old('selectedEstado', $estado->id) == $addressesorder->selectedEstado ? 'selected' : '' }}>
                                                    {{ $estado->name }}
                                                </option>
                                            @else
                                                <option value="{{ old('selectedEstado', $estado->id) }}">
                                                    {{ $estado->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                {!! $errors->first('selectedEstado', '<span class="help-block">Debe de seleccionar una Provincia.</span>') !!}
                            </div>
                            <script>
                                document.addEventListener('livewire:load', function (){
                                    $('.selectedEstado').on('change', function (){
                                    @this.set('selectedEstado', this.value);
                                    })
                                })
                            </script>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Municipio<span>*</span></label>
                                    @if( $municipios != '' )
                                        <select wire:model="selectedMunicipio" name="selectedMunicipio" class="form-control"
                                                style="
                                                width: 100%;
                                                height: 45px;
                                                line-height: 50px;
                                                margin-bottom: 25px;
                                                background: #F6F7FB;
                                                border-radius: 0px;
                                                border: none;" >
                                            <option value="">.: Selecciones Municipio :.</option>
                                            @foreach($municipios as $municipio)
                                                @if( $addressesorder != '' )
                                                    <option value="{{ $municipio->id }}" {{ old('selectedMunicipio', $municipio->id) == $addressesorder->selectedMunicipio ? 'selected' : '' }}
                                                        {{ old('selectedMunicipio') }}>
                                                        {{ $municipio->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $municipio->id }}" {{ old('selectedMunicipio') }}>
                                                        {{ $municipio->name }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    @else
                                       <select wire:model="selectedMunicipio" name="selectedMunicipio" class="form-control"
                                                    style="width: 100%;
                                            height: 45px;
                                            line-height: 50px;
                                            margin-bottom: 25px;
                                            background: #F6F7FB;
                                            border-radius: 0px;
                                            border: none;" disabled>
                                                <option value="">.: Selecciones Municipio :.</option>
                                            </select>
                                    @endif
                                </div>
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                {!! $errors->first('selectedMunicipio', '<span class="help-block">Debe de seleccionar una Provincia.</span>') !!}
                            </div>
                        </div>

                    <!--/ End Form -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="order-details">
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>{{ __('CART DETAILS') }}</h2>
                        <div class="content">
                            <ul>
                                <li>{{ __('Quantity of products') }}<span>{{$shopping_cart->quantity_of_products()}}</span></li>
                                <li>{{ __('Cart Total') }}<span>${{$shopping_cart->total_price_products()}}</span></li>
                                <li>{{ __('Shipment') }}<span>$00.00</span></li>
                                <li>{{ __('You Save') }}<span>${{$shopping_cart->total_save_mony()}}</span></li>
                                {{--                                    <li class="last">Total<span>$340.00</span></li>--}}
                            </ul>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>{{ __('Payment type') }}</h2>
                        <div class="content">
                            <div class="checkbox {{ $errors->has('payment') ? 'has-error' : '' }}">
                                <label style="padding-left: 0px;position: inherit;">
                                    <input type="radio" name="payment" value="paypal" style="display: initial;"> {{ __('Payment by PayPal') }}
                                </label>

                                <label style="padding-left: 0px;position: inherit;">
                                    <input type="radio" name="payment" value="cast" style="display: initial;"> {{ __('Credit or debit card') }}
                                </label>
                                {!! $errors->first('payment', '<span class="help-block">Debe de seleccionar un metodo de pago.</span>') !!}
                            </div>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Payment Method Widget -->
                    <div class="single-widget payement">
                        <div class="content">
                            <img src="images/payment-method.png" alt="#">
                        </div>
                    </div>
                    <!--/ End Payment Method Widget -->
                    <!-- Button Widget -->
                    <div class="single-widget get-button">
                        <div class="content">
                            <div class="button">
                                <button class="btn">{{ __('Continue with payment') }}</button>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!--/ End Button Widget -->
                </div>
            </div>
        </div>
    </div>
</div>


