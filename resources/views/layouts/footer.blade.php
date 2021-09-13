<!-- Start Shop Services Area -->
<section class="shop-services section home">
    <div class="container">
        <div class="collections">
            <div class="collection-item">
{{--                col-lg-4 col-md-6 col-12--}}
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>{{ __('Free shiping') }}</h4>
                    <p>{{ __('Fast and safe') }}</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="collection-item">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>{{ __('Sucure payment') }}</h4>
                    <p>{{ __('100% secure payment') }}</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="collection-item">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>{{ __('Best peice') }}</h4>
                    <p>{{ __('Guaranteed price') }}</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services Area -->
<!-- Start Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="index.html"><img src="/images/logo2.png" alt="#"></a>
                        </div>
                        <p class="text">Envie su productoa a sus familiares.</p>
                        <p class="text"><i class="fa fa-map"></i> {{ __('Address') }}: 60-49 Road 11378 New York</p>
                        <p class="text"><i class="fa fa-phone"></i> {{ __('Phone') }}: +65 11.188.888</p>
                        <p class="text"><i class="fa fa-envelope-o"></i> Email: hello.colorlib@gmail.com</p>
                        <p class="call"><span><a href="tel:123456789">Contactenos</a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>{{ __('Legal Information') }}</h4>
                        <ul>
                            <li><a href="{{ route('pages.about') }}"><i class="fa fa-angle-double-right"></i> {{ __('About Us') }}</a></li>
                            <li><a href="{{ route('pages.terms-and-conditions') }}"><i class="fa fa-angle-double-right"></i> {{ __('Terms and Conditions') }}</a></li>
                            <li><a href="{{ route('pages.refunds') }}"><i class="fa fa-angle-double-right"></i> {{ __('Refunds') }}</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> {{ __('Visit us') }}</a></li>
{{--                            <li><a href="#">Contact Us</a></li>--}}
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Get In Tuch</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li><i class="fa fa-map"></i> {{ __('Address') }}: 60-49 Road 11378 New York</li>
                                <li><i class="fa fa-phone"></i> {{ __('Phone') }}: +65 11.188.888</li>
                                <li><i class="fa fa-envelope-o"></i> Email: hello.colorlib@gmail.com</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © <script>document.write(new Date().getFullYear());</script> - {{ __('All rights reserved') }}. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="/images/payments.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /End Footer Area -->
