    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service"> <i class=" fa fa-envelope"></i> email@gmail.com </div>
                <div class="phone-service"> <i class=" fa fa-phone"></i> +1 6511188888 </div>
            </div>
            <div class="ht-right">
                @guest
                    <a href="{{ route('login') }}" class="login-panel"><i class="fa fa-user"></i> {{ __('Login') }}</a>
                @else
                    <nav class="login-panel navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="padding: 0px 0px; color: #252525;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-user"></i> {{ Str::limit(Auth::user()->name, 10) }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin') }}">
                                My orders
                            </a>
                            @if ( auth()->user()->permissions != null )
                                <a class="dropdown-item" href="{{ route('admin') }}">
                                    Administration
                                </a>
                            @endif
                            <form method="POST" action="{{ route('logout') }}">
                                {{ csrf_field() }}
                                <button class="dropdown-item btn btn-default btn-flat btn-block">
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </div>
                    </nav>
                @endguest
                     <nav class="login-panel navbar navbar-expand-md navbar-light bg-white shadow-sm" style="border-left: 0px solid #e5e5e5;">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" style="padding: 0px 0px; color: #252525;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Config::get('languages')[App::getLocale()]['display'] }}
                         </a>
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="min-width: 0rem;">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{ $language['display'] }} </a>
                                    @endif
                                @endforeach
                         </div>
                     </nav>

                <div class="top-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        {{--                        <select class="category-btn">--}}
                        {{--                            <option data-image="images/flag-1.jpg">All Categories</option>--}}
                        {{--                        </select>--}}
                        <div class="input-group">
                            <input type="text" placeholder="{{ __('What do you need?') }}">
                            <button type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        {{--                        <li class="heart-icon">--}}
                        {{--                            <a href="#">--}}
                        {{--                                <i class="fa fa-heart-o"></i>--}}
                        {{--                                <span>1</span>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                        <li class="cart-icon">
                            <a href="#">
                                <i class="fa fa-opencart"></i>
                                <span>3</span>
                            </a>

{{--                            <div class="cart-hover">--}}
{{--                                <div class="select-items">--}}
{{--                                    <table>--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td class="si-pic"><img src="images/select-product-1.jpg" alt=""></td>--}}
{{--                                            <td class="si-text">--}}
{{--                                                <div class="product-selected">--}}
{{--                                                    <p>$60.00 x 1</p>--}}
{{--                                                    <h6>Kabino Bedside Table</h6>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td class="si-close">--}}
{{--                                                <i class="fa fa-close"></i>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td class="si-pic"><img src="images/select-product-2.jpg" alt=""></td>--}}
{{--                                            <td class="si-text">--}}
{{--                                                <div class="product-selected">--}}
{{--                                                    <p>$60.00 x 1</p>--}}
{{--                                                    <h6>Kabino Bedside Table</h6>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td class="si-close">--}}
{{--                                                <i class="fa fa-close"></i>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                                <div class="select-total">--}}
{{--                                    <span>total:</span>--}}
{{--                                    <h5>$120.00</h5>--}}
{{--                                </div>--}}
{{--                                <div class="select-button" style="margin-top: -190px;">--}}
{{--                                    <a href="#" class="primary-btn view-card">VIEW CARD</a>--}}
{{--                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </li>
                        <li class="cart-price">$150.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
