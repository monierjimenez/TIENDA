{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--    <head>--}}
{{--        <meta charset="UTF-8">--}}
{{--        <meta name="description" content="Fashi Template">--}}
{{--        <meta name="keywords" content="Fashi, unica, creative, html">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--        <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--        <title>Mi tienda Online | Template</title>--}}

{{--        <!-- Google Font -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">--}}
{{--        <!-- Font Awesome -->--}}
{{--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">--}}

        <!-- Css Styles -->
{{--        <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">--}}
{{--        <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">--}}
{{--        <link rel="stylesheet" href="/css/themify-icons.css" type="text/css">--}}
{{--        <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">--}}
{{--        <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">--}}
{{--        <link rel="stylesheet" href="/css/nice-select.css" type="text/css">--}}
{{--        <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">--}}
{{--        <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">--}}
{{--        <link rel="stylesheet" href="/css/style.css" type="text/css">--}}

{{--        @stack('styles')--}}
{{--        @livewireStyles--}}
{{--    </head>--}}

{{--    <body>--}}
{{--        <!-- Page Preloder -->--}}
{{--        <div id="preloder">--}}
{{--            <div class="loader"></div>--}}
{{--        </div>--}}

{{--        <!-- Header Section Begin -->--}}
{{--        <header class="header-section">--}}
{{--            @include('layouts.header')--}}
{{--            @include('layouts.menu')--}}
{{--        </header>--}}
{{--        <!-- Header End -->--}}

{{--        @yield('content')--}}

{{--        <!-- Footer Section Begin -->--}}
{{--        @include('layouts.footer')--}}
{{--        <!-- Footer Section End -->--}}

{{--        <!-- Js-Plugins -->--}}
{{--        <script src="/js/jquery-3.3.1.min.js"></script>--}}
{{--        <script src="/js/bootstrap.min.js"></script>--}}
{{--        <script src="/js/jquery-ui.min.js"></script>--}}
{{--        <script src="/js/jquery.countdown.min.js"></script>--}}
{{--        <script src="/js/jquery.nice-select.min.js"></script>--}}
{{--        <script src="/js/jquery.zoom.min.js"></script>--}}
{{--        <script src="/js/jquery.dd.min.js"></script>--}}
{{--        <script src="/js/jquery.slicknav.js"></script>--}}
{{--        <script src="/js/owl.carousel.min.js"></script>--}}
{{--        <script src="/js/main.js"></script>--}}

{{--        @stack('script')--}}
{{--        @livewireScripts--}}
{{--    </body>--}}
{{--</html>--}}





<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <!-- Title Tag  -->
    <title>@yield('meta-title', config('app.name') . " | Tienda")</title>
    <meta name="description" content="@yield('meta-description', "A cualquier provincias y municipios de Cuba puede hacer su compra online desde cualquier lugar. Envio aereo 100% garantizado.")">
    <meta name="keywords" content="@yield('meta-keywords', " Tienda")">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="/css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="/css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="/css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">

    @stack('styles')
    @livewireStyles
</head>
<body class="js">
<!-- Preloader -->
{{--<div class="preloader">--}}
{{--    <div class="preloader-inner">--}}
{{--        <div class="preloader-icon">--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
    <!-- End Preloader -->

    <!-- Header -->
    <header class="header shop">
        @include('layouts.header')
    </header>
    <!--/ End Header -->


    @yield('content')

<!-- Start Shop Newsletter  -->
{{--<section class="shop-newsletter section">--}}
{{--    <div class="container">--}}
{{--        <div class="inner-top">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 offset-lg-2 col-12">--}}
{{--                    <!-- Start Newsletter Inner -->--}}
{{--                    <div class="inner">--}}
{{--                        <h4>Newsletter</h4>--}}
{{--                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>--}}
{{--                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">--}}
{{--                            <input name="EMAIL" placeholder="Your email address" required="" type="email">--}}
{{--                            <button class="btn">Subscribe</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <!-- End Newsletter Inner -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Shop Newsletter -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ti-close" aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                        <div class="product-gallery">
                            <div class="quickview-slider-active">
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                            </div>
                        </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h2>Flared Shift Dress</h2>
                            <div class="quickview-ratting-review">
                                <div class="quickview-ratting-wrap">
                                    <div class="quickview-ratting">
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="#"> (1 customer review)</a>
                                </div>
                                <div class="quickview-stock">
                                    <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                </div>
                            </div>
                            <h3>$29.00</h3>
                            <div class="quickview-peragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                            </div>
                            <div class="size">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Size</h5>
                                        <select>
                                            <option selected="selected">s</option>
                                            <option>m</option>
                                            <option>l</option>
                                            <option>xl</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Color</h5>
                                        <select>
                                            <option selected="selected">orange</option>
                                            <option>purple</option>
                                            <option>black</option>
                                            <option>pink</option>
                                        </select>
                                    </div>
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
                                <a href="#" class="btn">Add to cart</a>
                                <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                            </div>
                            <div class="default-social">
                                <h4 class="share-now">Share:</h4>
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->

    @include('layouts.footer')

<!-- Jquery -->
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate-3.0.0.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<!-- Popper JS -->
<script src="/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="/js/bootstrap.min.js"></script>
<!-- Color JS
<script src="js/colors.js"></script>-->
<!-- Slicknav JS -->
<script src="/js/slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="/js/owl-carousel.js"></script>
<!-- Magnific Popup JS -->
<script src="/js/magnific-popup.js"></script>
<!-- Waypoints JS -->
<script src="/js/waypoints.min.js"></script>
<!-- Countdown JS -->
<script src="/js/finalcountdown.min.js"></script>
<!-- Nice Select JS -->
<script src="/js/nicesellect.js"></script>
<!-- Flex Slider JS -->
<script src="/js/flex-slider.js"></script>
<!-- ScrollUp JS -->
<script src="/js/scrollup.js"></script>
<!-- Onepage Nav JS -->
<script src="/js/onepage-nav.min.js"></script>
<!-- Easing JS -->
<script src="/js/easing.js"></script>
<!-- Active JS -->
<script src="/js/active.js"></script>

@stack('script')
@livewireScripts
</body>
</html>








