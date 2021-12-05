@extends('layouts.layouts')

@section('meta-title', "Login | " . config('app.name'))
@section('meta-description', 'Todas las categorias de la tienda')
@section('meta-keywords', 'Categorias, productos')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> {{ __('Home') }}</a>
                        <span>> Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->
<hr>
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
{{--                        -{{ session('bakcURL')  }}---}}
{{--                        {{ session('shopping_cart_id') }}--}}
{{--                        {{ request()->path() }}--}}
                        <h2>{{ __('Login') }}</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    @error('email')
                                        <span class="invalid-feedback has-error">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="group-input gi-check">
                                <div class="gi-more">
                                   <span class="pull-left">

                                       <input type="checkbox" name="remember" id="remember">
                                       <spam class="remember-pass" >
                                           {{ __('Remember Me') }}
                                       </spam>

                                   </span>

                                    <span class="pull-right">
                                        @if (Route::has('password.request'))
                                            <a class="" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </span><br><br>
                                </div>
                            </div>
                            <button type="submit" class="btn login-btn btn-block">{{ __('Login') }}</button>
                        </form>
                       <h6 class="text-center mt-2 mb-2"> {{ __('Or') }} </h6>
                        <div class="switch-login">
                            <a href="{{ route('register') }}" class="or-login btn login-btn btn-block" >{{ __('Create An Account') }}</a>
                        </div>
                        <br>
{{--                        <div class="social-auth-links text-center">--}}
{{--                            <p>- OR -</p>--}}
{{--                            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat" style="color: #fff">--}}
{{--                                <i class="fa fa-facebook"></i> Sign in using Facebook--}}
{{--                            </a>--}}
{{--                            <a href="#" class="btn btn-block btn-social btn-google btn-flat" style="color: #fff">--}}
{{--                                <i class="fa fa-google-plus"></i> Sign in using Google+--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Register Form Section End -->
@stop

@push('styles')

@endpush

@push('script')

@endpush
