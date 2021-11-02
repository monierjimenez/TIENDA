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
                            <div class="col-lg-4 col-md-4 col-12" wire:ignore>
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label>{{ __('First Name') }}<span>*</span></label>
{{--                                    {{dd($addressesorder)}}--}}
                                    @if($order->name != '')
                                       3 <input type="text" name="name" placeholder="" value="{{ old('name',$order) != '' ? $order->name : '' }}" class="form-control">
                                    @else
                                       4 <input type="text" name="name" placeholder="" value="{{ old('name') }}" class="form-control">
                                    @endif
                                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12" wire:ignore>
                                <div class="form-group {{ $errors->has('second_name') ? 'has-error' : '' }}">
                                    <label>{{ __('Second name') }}</label>
                                    @if($order->second_name != '')
                                        <input type="text" name="second_name" placeholder="" value="{{ old('second_name', $order) != '' ? $order->second_name : ''}}">
                                    @else
                                        <input type="text" name="second_name" placeholder="" value="{{ old('second_name') }}">
                                    @endif
                                    {!! $errors->first('second_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12" wire:ignore>
                                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                    <label>{{ __('Last names') }}<span>*</span></label>
                                    @if($order->last_name != '')
                                        <input type="text" name="last_name" placeholder="" required="required" value="{{ old('last_name', $order) != '' ? $order->last_name : ''}}">
                                    @else
                                        <input type="text" name="last_name" placeholder="" required="required" value="{{ old('last_name') }}">
                                    @endif
                                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" wire:ignore>
                                <div class="form-group {{ $errors->has('identity_card') ? 'has-error' : '' }}">
                                    <label>{{ __('Identity card') }}<span>*</span></label>
                                    @if($order->identity_card != '')
                                        <input type="number" name="identity_card" placeholder="" required="required" value="{{ old('identity_card', $order) != '' ? $order->identity_card : ''}}">
                                    @else
                                        <input type="number" name="identity_card" placeholder="" required="required" value="{{ old('identity_card') }}">
                                    @endif
                                    {!! $errors->first('identity_card', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" wire:ignore>
                                <div class="form-group">
                                    <label>{{ __('Phone Number') }}<span>*</span></label>
                                    {{-- <input type="text" name="phone_number" placeholder="" required="required">  --}}
                                    <div class="input-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                        <div class="input-group-addon" style="border: 0;">+53</div>
                                        @if($order->phone_number != '')
                                            <input type="number" name="phone_number" placeholder="" required="required" value="{{ old('phone_number', $order) != '' ? $order->phone_number : '' }}">
                                        @else
                                            <input type="number" name="phone_number" placeholder="" required="required" value="{{ old('phone_number') }}">
                                        @endif
                                        {!! $errors->first('phone_number', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12" wire:ignore>
                                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                    <label>Dirección<span>*</span></label>
                                    @if($order->address != '')
                                        <input type="text" name="address" placeholder="" required="required" value="{{ old('address', $order) != '' ? $order->address : '' }}">
                                    @else
                                        <input type="text" name="address" placeholder="" required="required" value="{{ old('address') }}">
                                    @endif
                                    {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6" wire:ignore>
                                <div class="form-group {{ $errors->has('numero') ? 'has-error' : '' }}">
                                    <label>No.<span>*</span></label>
                                    @if($order->numero != '')
                                        <input type="text" name="numero" placeholder="" required="required" value="{{ old('numero', $order) != '' ? $order->numero : '' }}">
                                    @else
                                        <input type="text" name="numero" placeholder="" required="required" value="{{ old('numero') }}">
                                    @endif
                                    {!! $errors->first('numero', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6" wire:ignore>
                                <div class="form-group {{ $errors->has('apto') ? 'has-error' : '' }}">
                                    <label>Apto</label>
                                    @if($order->apto != '')
                                        <input type="text" name="apto" placeholder="" value="{{ old('apto', $order) != '' ? $order->apto : '' }}">
                                    @else
                                        <input type="text" name="apto" placeholder="" value="{{ old('apto') }}">
                                    @endif
                                    {!! $errors->first('apto', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12" wire:ignore>
                                <div class="form-group {{ $errors->has('entre_calle') ? 'has-error' : '' }}">
                                    <label>Entre calles</label>
                                    @if($order->entre_calle != '')
                                        <input type="text" name="entre_calle" placeholder="" value="{{ old('entre_calle', $order) != '' ? $order->entre_calle : '' }}">
                                    @else
                                        <input type="text" name="entre_calle" placeholder="" value="{{ old('entre_calle') }}">
                                    @endif
                                    {!! $errors->first('entre_calle', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" wire:ignore>
                                <div class="form-group {{ $errors->has('reparto') ? 'has-error' : '' }}">
                                    <label>Reparto</label>
                                    @if($order->reparto != '')
                                        <input type="text" name="reparto" placeholder="" value="{{ old('reparto', $order) != '' ? $order->reparto : '' }}">
                                    @else
                                        <input type="text" name="reparto" placeholder="" value="{{ old('reparto') }}">
                                    @endif
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
                                            @if( $order->selectedEstado != '' )
                                                <option value="{{ $estado->id }}" {{ old('selectedEstado', $estado->id) == $order->selectedEstado ? 'selected' : '' }}>
                                                    {{ $estado->name }}
                                                </option>
                                            @else
                                                <option value="{{ $estado->id }}" {{ old('selectedEstado') == $estado->id ? 'selected' : '' }}>
                                                    {{ $estado->name }}--
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
{{--                                    {{ old('selectedEstado') }}--}}
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
                                                @if( $order != '' )
                                                    <option value="{{ $municipio->id }}" {{ old('selectedMunicipio', $municipio->id) == $order->selectedMunicipio ? 'selected' : '' }}
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
{{--                                        {{ old('selectedEstado') }}--}}
                                       @if ( old('selectedEstado') != '')
                                            <select wire:model="selectedMunicipio" name="selectedMunicipio" class="form-control"
                                                    style="width: 100%;
                                                height: 45px;
                                                line-height: 50px;
                                                margin-bottom: 25px;
                                                background: #F6F7FB;
                                                border-radius: 0px;
                                                border: none;">
                                                <option value="">.: Selecciones Municipio :.</option>
                                                @foreach( municipiosAll(old('selectedEstado')) as $municipio )
                                                        <option value="{{ $municipio->id }}" {{ old('selectedMunicipio') }}>
                                                            {{ $municipio->name }}
                                                        </option>
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
                                    @endif
                                </div>
                                <input type="hidden" name="order_id" value="{{ $order->id }}">

                                {!! $errors->first('selectedMunicipio', '<span class="help-block">Debe de seleccionar una Municipio.</span>') !!}
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
                            <div class="checkbox {{ $errors->has('payment') ? 'has-error' : '' }}" wire:ignore>
                                <label style="padding-left: 0px;position: inherit;">
                                    <input type="radio" name="payment" value="paypal"
                                           {{ old('payment', $order->payment_method) == 'paypal' ? 'checked' : '' }} style="display: initial;">
                                    {{ __('Payment by PayPal') }}
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


