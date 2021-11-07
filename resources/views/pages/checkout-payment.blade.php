
@extends('layouts.layouts')

@section('meta-title', 'Checkout')
@section('meta-description', 'Compra online a Cuba desde cualquier lugar. Envio aereo 100% garantizado. Entrega en su domicilio en todas las provincias y municipios.')
@section('meta-keywords', 'Carrito, compras, cuba, envio, alimentos')

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"> <i class="fa fa-home"></i> {{ __('Home') }}</a>
                        <a href="{{ route('pages.cart') }}"> <i class="fa fa-opencart"></i> {{ __('My cart') }}</a>
                        <span> > {{ __('Pago') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Start Checkout -->
    <section class="shop checkout section">
{{--        {{ $order }}--}}
{{--        <br>--}}
{{--        {{ $addresses }}--}}
{{--        <br>--}}
{{--        {{ $payment }}--}}

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="order-details" style="margin-top: 0px;padding: 0px 0 0px 0;">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>{{ __('PURCHASE DETAILS') }}</h2>
                            <div class="content">
                                <ul style="margin-top: 6px;">
                                    <li style="margin-bottom: 4px;">
                                        <b>{{ __('Send to') .': '. $order->name.' '. $order->second_name.' '. $order->last_name }}
                                        </b><span>
                                            {{ $order->address }}, #{{ $order->numero }} @if( $order->apto != null ) {{ $order->apto }}, @endif  @if( $order->entre_calle != null )  entre {{ $order->entre_calle }} @endif,
                                            {{ $order->estado->name }}, {{ $order->municipio->name }}.
                                        </span>
                                    </li>
                                    <li style="margin-bottom: 4px;"><b>{{ __('Quantity of products') }}</b><span>{{$shopping_cart->quantity_of_products()}}</span></li>
                                    <li style="margin-bottom: 4px;"><b>{{ __('Shipment') }}</b><span>$00.00</span></li>
                                    <li style="margin-bottom: 4px;"><b>{{ __('Total') }}</b><span>${{$shopping_cart->total_price_products()}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="checkout-form">
{{--                        -Order: {{$order->id}}---}}
                        <div id="paypal-button-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Checkout -->
@stop

@push('styles')

@endpush

@push('script')
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&currency=USD&components=buttons,funding-eligibility"></script>
    <script>
        paypal.Buttons({
            fundingSource: paypal.FUNDING.CARD,

            // Sets up the transaction when a payment button is clicked
            createOrder: function(data, actions) {
                return actions.order.create({
                    application_context:{
                        shipping_preference: "NO_SHIPPING"
                    },
                    payer: {
                      email_address: 'sb-eetlb8293572@personal.example.com',
{{--                        {{ auth()->user()->email }}{{ auth()->user()->name }}{{ auth()->user()->name }}--}}
{{--                       name: {--}}
{{--                           given_name: '{{ auth()->user()->name }}',--}}
{{--                           --}}{{--surname: '{{ auth()->user()->name }}',--}}
{{--                       },--}}
                    // address:{
                    //     address_line_1: '',
                    //     address_line_1: '',
                    //     admin_area_1: '',
                    //     admin_area_2: '',
                    //     postal_code: '',
                    //     country_code: ''
                    //     }
                    },
                    purchase_units: [{
                        amount: {
                            value: '{{$shopping_cart->total_price_products()}}'
                        }
                    }]
                });
            },
            // Finalize the transaction after payer approval
            // Call your server to finalize the transaction
            onApprove: function(data, actions) {
                return fetch('/paypal/process/' + data.orderID + '?orderID=' + {{ $order->id }})
                .then(res => res.json())
                .then(function(response) {
                    //Show a failure message
                    if (!response.success) {
                        const msg = 'Sorry, your transaction could not be processed.';
                        return alert(msg);
                    }
                    location.href = response.url;


                    // var errorDetail = Array.isArray(orderData.details) && orderData.details[0];
                    //
                    // if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                    //     return actions.restart(); // Recoverable state, per:
                    //     // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                    // }
                    // if (errorDetail) {
                    //     var msg = 'Sorry, your transaction could not be processed.';
                    //     if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                    //     if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                    //     return alert(msg); // Show a failure message (try to avoid alerts in production environments)
                    // }
                    // alert('Transaction completed by ' + orderData.payer.name.given_name );

                });
            }
            // onError: function (err) {
            //         // For example, redirect to a specific error page
            //         //window.location.href = "/your-error-page-here";
            //         console.log(err);
            // }
        }).render('#paypal-button-container');
    </script>
@endpush


{{--// Three cases to handle:--}}
{{--//   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()--}}
{{--//   (2) Other non-recoverable errors -> Show a failure message--}}
{{--//   (3) Successful transaction -> Show confirmation or thank you--}}

{{--// This example reads a v2/checkout/orders capture response, propagated from the server--}}
{{--// You could use a different API or structure for your 'orderData'--}}

{{--// Successful capture! For demo purposes:--}}
{{--//console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));--}}
{{--// var transaction = orderData.purchase_units[0].payments.captures[0];--}}

{{--//+ transaction.status + ': ' + transaction.id--}}

{{--// Replace the above to show a success message within this page, e.g.--}}
{{--// const element = document.getElementById('paypal-button-container');--}}
{{--// element.innerHTML = '';--}}
{{--// element.innerHTML = '<h3>Thank you for your payment!</h3>';--}}
{{--// Or go to another URL:  actions.redirect('thank_you.html');--}}
