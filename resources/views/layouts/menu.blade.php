<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9 offset-lg-3 col-12">
                    <div class="text-inner">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="hero-text">
                                    <h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
                                    <p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
                                    <div class="button">
                                        <a href="#" class="btn">Shop Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>

<!-- Start Small Banner  -->
<section class="small-banner-frond section">
    <div class="container-fluid">
{{-- en el div de abajo lo flex--}}
        <div class="collections">
            <!-- Single Banner  -->
            @foreach($categorys as $category)
                <div class="collection-item" >
                    <div class="single-banner" style="margin-bottom: -30px; padding: 0px 8px;">
                        <a href="{{ route('collections', $category) }}">
                        <img src="/images/{{ $category->image }}" alt="#">
                            <span class="collections">{{ $category->name }}</span>
                        <div class="content">
{{--                            <p>Man's Collectons</p>--}}
{{--                            <h3>Summer travel <br> collection</h3>
                            <a href="#">{{ $category->name }}</a>--}}

                        </div>
                        </a>
                    </div>
                </div>
            @endforeach
{{--            --}}
{{--            <div class="col-lg-4 col-md-6 col-12">--}}
{{--                <div class="single-banner">--}}
{{--                    <img src="https://via.placeholder.com/600x370" alt="#">--}}
{{--                    <div class="content">--}}
{{--                        <p>Man's Collectons</p>--}}
{{--                        <h3>Summer travel <br> collection</h3>--}}
{{--                        <a href="#">Discover Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- /End Single Banner  -->--}}
{{--            <!-- Single Banner  -->--}}
{{--            <div class="col-lg-4 col-md-6 col-12">--}}
{{--                <div class="single-banner">--}}
{{--                    <img src="https://via.placeholder.com/600x370" alt="#">--}}
{{--                    <div class="content">--}}
{{--                        <p>Bag Collectons</p>--}}
{{--                        <h3>Awesome Bag <br> 2020</h3>--}}
{{--                        <a href="#">Shop Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- /End Single Banner  -->--}}
{{--            <!-- Single Banner  -->--}}
{{--            <div class="col-lg-4 col-12">--}}
{{--                <div class="single-banner tab-height">--}}
{{--                    <img src="https://via.placeholder.com/600x370" alt="#">--}}
{{--                    <div class="content">--}}
{{--                        <p>Flash Sale</p>--}}
{{--                        <h3>Mid Season <br> Up to <span>40%</span> Off</h3>--}}
{{--                        <a href="#">Discover Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- /End Single Banner  -->
        </div>
    </div>
</section>
<!-- End Small Banner -->
