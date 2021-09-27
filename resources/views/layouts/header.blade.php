    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main support-home">
                            <li >
                                <i class="ti-headphone-alt" style="color: #F7941D;"></i> +060 (800) 801-582 &nbsp;
                                <i class="ti-email" style="color: #F7941D;"></i>support@shophub.com
                            </li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main pull-right">
                            <li style="display: inline-block;border-right: 0px;border-bottom: 0px">
                                <nav class="login-panel navbar navbar-expand-md navbar-light bg-white shadow-sm" >
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="padding: 0px 0px; color: #252525;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @if( App::getLocale() == 'es' )  <img src="/images/flag-2.jpg"> @else <img src="/images/flag-1.jpg"> @endif
                                        {{ Config::get('languages')[App::getLocale()]['display'] }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin: 6px -68px;">
                                        @foreach (Config::get('languages') as $lang => $language)
                                            @if ($lang != App::getLocale())
                                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                                                    @if( App::getLocale() == 'es' )  <img src="/images/flag-1.jpg"> @else <img src="/images/flag-2.jpg"> @endif
                                                     {{ $language['display'] }}
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </nav>
                            </li>
                            &nbsp;&nbsp;
                            <li style="display: inline-block;">
                                <nav class="login-panel navbar navbar-expand-md navbar-light bg-white shadow-sm">
                                    @guest
                                        <a href="{{ route('login') }}" class="login-panel">
                                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ __('Login') }}
                                        </a>
                                    @else
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="padding: 0px 0px; color: #252525;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <i class="fa fa-user-circle-o" aria-hidden="true" style="color: #F7941D;"></i> {{ Str::limit(Auth::user()->name, 10) }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin: 6px -68px;font-size: 14px;">
                                            <a class="dropdown-item" href="{{ route('admin') }}">
                                                <i class="fa fa-cart-arrow-down" style="color: #F7941D;"></i> {{ __('My orders') }}
                                            </a>
                                            @if ( auth()->user()->permissions != null )
                                                <a class="dropdown-item" href="{{ route('admin') }}">
                                                    <i class="fa fa-legal" style="color: #F7941D;"></i> {{ __('Administration') }}
                                                </a>
                                            @endif
                                            <form method="POST" action="{{ route('logout') }}">
                                                {{ csrf_field() }}
                                                <button class="dropdown-item btn-default btn-flat " style="padding: 8px 27px;">
                                                    <i class="fa fa-power-off" style="color: #F7941D;"></i> {{ __('Logout') }}
                                                </button>
                                            </form>
                                        </div>
                                    @endguest
                                </nav>
                            </li>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->

    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-12" style="padding-left: 0px; padding-right: 0px;">
                        <div class="menu-area" >
                            <!-- Main Menu -->
                            <div class="middle-inner" >
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <div class="container">
                                                    <div class="row">
                                                        <nav class="navbar navbar-expand-lg">
                                                            <div class="navbar-collapseff">
                                                                <div class="nav-inner" style="width: 100%;">
                                                                    <ul class="nav main-menu menu navbar-nav">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-lg-2 col-md-2 col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-6">
                                                                                            <div class="logo">
                                                                                                <a href="{{ route('welcome') }}">
                                                                                                    <img src="/images/logo.png" alt="logo">
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-12 col-6" style="padding: 4px 0px 0px 0px;">
                                                                                            <div class="search-top-mobile">
                                                                                                <div class="sinlge-bar shopping">
                                                                                                    <a href="#" class="single-icon">
                                                                                                        <i class="fa fa-opencart"></i> <span class="total-count">72</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="sinlge-bar sinlge-bar-price">&nbsp;$150.00</div>

                                                                                                <div class="top-search">
                                                                                                    <a href="#0"><i class="ti-search"></i> </a>
                                                                                                </div>
                                                                                                <div class="search-top">
                                                                                                    <form method="GET" action="{{ route('search') }}" class="search-form">
                                                                                                        <input type="text" placeholder="{{ __('Search here') }}..." name="search" autocomplete="off">
                                                                                                        <button value="search" type="submit"><i class="ti-search"></i></button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Logo -->
{{--                                                                                    <div class="logo">--}}
{{--                                                                                        <a href="{{ route('welcome') }}"><img src="/images/logo.png" alt="logo"></a>--}}
{{--                                                                                    </div>--}}
                                                                                    <!--/ End Logo -->
                                                                                    <!-- Search Form -->
{{--                                                                                    <div class="search-top">--}}
{{--                                                                                        <div class="top-search">--}}
{{--                                                                                            <a href="#0"><i class="ti-search"></i> </a>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <!-- Search Form -->--}}
{{--                                                                                        <div class="search-top">--}}
{{--                                                                                            <form class="search-form">--}}
{{--                                                                                                <input type="text" placeholder="Search here..." name="search" autocomplete="off">--}}
{{--                                                                                                <button value="search" type="submit"><i class="ti-search"></i></button>--}}
{{--                                                                                            </form>--}}
{{--                                                                                            <div class="sinlge-bar shopping">--}}
{{--                                                                                                <a href="#" class="single-icon">--}}
{{--                                                                                                    <i class="fa fa-opencart"></i> <span class="total-count">2</span>--}}
{{--                                                                                                </a>--}}

{{--                                                                                            </div>--}}
{{--                                                                                            <div class="sinlge-bar">$ 150.00</div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <!--/ End Search Form -->--}}
{{--                                                                                    </div>--}}
                                                                                </div>

                                                                                <div class="col-lg-8 col-md-8 col-12" style="margin-right: 0px;">
                                                                                    <div class="search-bar-top">
                                                                                        <div class="search-bar">

                                                                                            <form method="GET" action="{{ route('search') }}" >

                                                                                                <select name="category">
                                                                                                    <option value="0"  {{ isset($_GET['category']) ? 'selected' : '' }}>
                                                                                                        {{ __('ALL CATEGORIES') }}
                                                                                                    </option>
                                                                                                    @foreach($categorysList as $categoryList)
                                                                                                        @if( isset($_GET['category']) )
                                                                                                            <option value="{{ $categoryList->id }}" {{ $_GET['category'] == $categoryList->id ? 'selected' : '' }}>
                                                                                                        @else
                                                                                                            <option value="{{ $categoryList->id }}" >
                                                                                                        @endif
                                                                                                            {{ $categoryList->name }}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>

                                                                                                <input name="search" placeholder="{{ __('Search Products Here') }}..." type="search"
                                                                                                       autocomplete="off" value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}">
                                                                                                <button class="btnn"><i class="ti-search"></i></button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-2 col-md-2 col-12">
                                                                                    <div class="right-bar">
                                                                                        <!-- Search Form -->
{{--                                                                                        <div class="sinlge-bar">--}}
{{--                                                                                            <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                                                                                        </div>--}}

                                                                                        <div class="sinlge-bar shopping">
                                                                                            <a href="#" class="single-icon">
                                                                                                <i class="fa fa-opencart"></i>
                                                                                                <span class="total-count">{{ $shopping_cart->quantity_of_products() }}</span>
                                                                                            </a>

                                                                                        </div>
                                                                                        <div class="sinlge-bar">&nbsp;
                                                                                            @if( $shopping_cart->total_price_products() != 0 )
                                                                                                ${{ $shopping_cart->total_price_products() }}
                                                                                            @else $00.00 @endif
                                                                                        </div>
                                                                                        {{--    <div class="sinlge-bar">--}}
{{--                                                                                            <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>--}}
{{--                                                                                            --}}
{{--                                                                                        </div>--}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </nav>
                                                        <!--/ End Main Menu -->
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{$shopping_cart}}
{{--    {{session('shopping_cart_id')}}--}}


