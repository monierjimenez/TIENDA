
@extends('layouts.layouts')

@section('content')
    <!-- Slider Area -->
        @include('layouts.menu')

    <!--/ End Slider Area -->

{{--    <!-- Start Product Area -->--}}
{{--    <div class="product-area section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <h2>Trending Item</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="product-info">--}}
{{--                        <div class="nav-main">--}}
{{--                            <!-- Tab Nav -->--}}
{{--                            <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li>--}}
{{--                            </ul>--}}
{{--                            <!--/ End Tab Nav -->--}}
{{--                        </div>--}}
{{--                        <div class="tab-content" id="myTabContent">--}}
{{--                            <!-- Start Single Tab -->--}}
{{--                            <div class="tab-pane fade show active" id="man" role="tabpanel" style="margin-top: -90px;">--}}
{{--                                <div class="tab-single">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="new">New</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="price-dec">30% Off</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="out-of-stock">Hot</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span class="old">$60.00</span>--}}
{{--                                                        <span>$50.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--/ End Single Tab -->--}}
{{--                            <!-- Start Single Tab -->--}}
{{--                            <div class="tab-pane fade" id="women" role="tabpanel">--}}
{{--                                <div class="tab-single">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="new">New</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="price-dec">30% Off</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="out-of-stock">Hot</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span class="old">$60.00</span>--}}
{{--                                                        <span>$50.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--/ End Single Tab -->--}}
{{--                            <!-- Start Single Tab -->--}}
{{--                            <div class="tab-pane fade" id="kids" role="tabpanel" >--}}
{{--                                <div class="tab-single">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="new">New</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="price-dec">30% Off</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="out-of-stock">Hot</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span class="old">$60.00</span>--}}
{{--                                                        <span>$50.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--/ End Single Tab -->--}}
{{--                            <!-- Start Single Tab -->--}}
{{--                            <div class="tab-pane fade" id="accessories" role="tabpanel">--}}
{{--                                <div class="tab-single">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="new">New</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="price-dec">30% Off</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="out-of-stock">Hot</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span class="old">$60.00</span>--}}
{{--                                                        <span>$50.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--/ End Single Tab -->--}}
{{--                            <!-- Start Single Tab -->--}}
{{--                            <div class="tab-pane fade" id="essential" role="tabpanel" >--}}
{{--                                <div class="tab-single">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="new">New</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="price-dec">30% Off</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="out-of-stock">Hot</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span class="old">$60.00</span>--}}
{{--                                                        <span>$50.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--/ End Single Tab -->--}}
{{--                            <!-- Start Single Tab -->--}}
{{--                            <div class="tab-pane fade" id="prices" role="tabpanel" >--}}
{{--                                <div class="tab-single">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="new">New</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="price-dec">30% Off</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>$29.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">--}}
{{--                                            <div class="single-product">--}}
{{--                                                <div class="product-img">--}}
{{--                                                    <a href="product-details.html">--}}
{{--                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                                        <span class="out-of-stock">Hot</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="button-head">--}}
{{--                                                        <div class="product-action">--}}
{{--                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-action-2">--}}
{{--                                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-content">--}}
{{--                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span class="old">$60.00</span>--}}
{{--                                                        <span>$50.00</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--/ End Single Tab -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Product Area -->--}}


{{--    <!-- Start Midium Banner  -->--}}
{{--    <section class="midium-banner">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <!-- Single Banner  -->--}}
{{--                <div class="col-lg-6 col-md-6 col-12">--}}
{{--                    <div class="single-banner">--}}
{{--                        <img src="https://via.placeholder.com/600x370" alt="#">--}}
{{--                        <div class="content">--}}
{{--                            <p>Man's Collectons</p>--}}
{{--                            <h3>Man's items <br>Up to<span> 50%</span></h3>--}}
{{--                            <a href="#">Shop Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /End Single Banner  -->--}}
{{--                <!-- Single Banner  -->--}}
{{--                <div class="col-lg-6 col-md-6 col-12">--}}
{{--                    <div class="single-banner">--}}
{{--                        <img src="https://via.placeholder.com/600x370" alt="#">--}}
{{--                        <div class="content">--}}
{{--                            <p>shoes women</p>--}}
{{--                            <h3>mid season <br> up to <span>70%</span></h3>--}}
{{--                            <a href="#" class="btn">Shop Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /End Single Banner  -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Midium Banner -->--}}

    <!-- Start Most Popular -->
    <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ __('Offers') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider" style="margin-top: -75px;margin-bottom: 15px;">
                        <!-- Start Single Product -->
                        @foreach( $products as $product )
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}">
                                        <img class="default-img" src="/images/{{primeraPhotoProduct($product)}}" alt="#">
                                        {{--<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        new, out-of-stock --}}
                                        <span class="out-of-stock">Ahorras {{ $product->sale_price_before-$product->sale_price }}</span>
                                    </a>
                                    <div class="button-head">
    {{--                                    <div class="product-action">--}}
    {{--                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
    {{--                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
    {{--                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
    {{--                                    </div>--}}
                                        <div class="product-action-2">
                                            @include('layouts.menu_cart_or_option')
                                        </div>

                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                    <div class="product-price">
                                        <span>${{ $product->sale_price }}</span>
                                        <span class="old">${{ $product->sale_price_before }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Single Product -->
{{--                        <!-- Start Single Product -->--}}
{{--                        <div class="single-product">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="product-details.html">--}}
{{--                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                </a>--}}
{{--                                <div class="button-head">--}}
{{--                                    <div class="product-action">--}}
{{--                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-action-2">--}}
{{--                                        <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <h3><a href="product-details.html">Women Hot Collection</a></h3>--}}
{{--                                <div class="product-price">--}}
{{--                                    <span>$50.00</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End Single Product -->--}}
{{--                        <!-- Start Single Product -->--}}
{{--                        <div class="single-product">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="product-details.html">--}}
{{--                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                    <span class="new">New</span>--}}
{{--                                </a>--}}
{{--                                <div class="button-head">--}}
{{--                                    <div class="product-action">--}}
{{--                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-action-2">--}}
{{--                                        <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <h3><a href="product-details.html">Awesome Pink Show</a></h3>--}}
{{--                                <div class="product-price">--}}
{{--                                    <span>$50.00</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End Single Product -->--}}
{{--                        <!-- Start Single Product -->--}}
{{--                        <div class="single-product">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="product-details.html">--}}
{{--                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                </a>--}}
{{--                                <div class="button-head">--}}
{{--                                    <div class="product-action">--}}
{{--                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-action-2">--}}
{{--                                        <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                <div class="product-price">--}}
{{--                                    <span>$50.00</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End Single Product -->--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Most Popular Area -->

{{--    <!-- Start Shop Home List  -->--}}
{{--    <section class="shop-home-list section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="shop-section-title">--}}
{{--                                <h1>On sale</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Start Single List  -->--}}
{{--                    <div class="single-list">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                <div class="list-image overlay">--}}
{{--                                    <img src="https://via.placeholder.com/115x140" alt="#">--}}
{{--                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-12 no-padding">--}}
{{--                                <div class="content">--}}
{{--                                    <h4 class="title"><a href="#">Licity jelly leg flat Sandals</a></h4>--}}
{{--                                    <p class="price with-discount">$59</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single List  -->--}}
{{--                    <!-- Start Single List  -->--}}
{{--                    <div class="single-list">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                <div class="list-image overlay">--}}
{{--                                    <img src="https://via.placeholder.com/115x140" alt="#">--}}
{{--                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-12 no-padding">--}}
{{--                                <div class="content">--}}
{{--                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>--}}
{{--                                    <p class="price with-discount">$44</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single List  -->--}}
{{--                    <!-- Start Single List  -->--}}
{{--                    <div class="single-list">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                <div class="list-image overlay">--}}
{{--                                    <img src="https://via.placeholder.com/115x140" alt="#">--}}
{{--                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-12 no-padding">--}}
{{--                                <div class="content">--}}
{{--                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>--}}
{{--                                    <p class="price with-discount">$89</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single List  -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="shop-section-title">--}}
{{--                                <h1>Best Seller</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Start Single List  -->--}}
{{--                    <div class="single-list">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                <div class="list-image overlay">--}}
{{--                                    <img src="https://via.placeholder.com/115x140" alt="#">--}}
{{--                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-12 no-padding">--}}
{{--                                <div class="content">--}}
{{--                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>--}}
{{--                                    <p class="price with-discount">$65</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single List  -->--}}
{{--                    <!-- Start Single List  -->--}}
{{--                    <div class="single-list">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                <div class="list-image overlay">--}}
{{--                                    <img src="https://via.placeholder.com/115x140" alt="#">--}}
{{--                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-12 no-padding">--}}
{{--                                <div class="content">--}}
{{--                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>--}}
{{--                                    <p class="price with-discount">$33</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single List  -->--}}
{{--                    <!-- Start Single List  -->--}}
{{--                    <div class="single-list">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                <div class="list-image overlay">--}}
{{--                                    <img src="https://via.placeholder.com/115x140" alt="#">--}}
{{--                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-12 no-padding">--}}
{{--                                <div class="content">--}}
{{--                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>--}}
{{--                                    <p class="price with-discount">$77</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single List  -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="shop-section-title">--}}
{{--                                <h1>Top viewed</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Start Single List  -->--}}
{{--                    <div class="single-list">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                <div class="list-image overlay">--}}
{{--                                    <img src="https://via.placeholder.com/115x140" alt="#">--}}
{{--                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-12 no-padding">--}}
{{--                                <div class="content">--}}
{{--                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>--}}
{{--                                    <p class="price with-discount">$22</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single List  -->--}}
{{--                    <!-- Start Single List  -->--}}
{{--                    <div class="single-list">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                <div class="list-image overlay">--}}
{{--                                    <img src="https://via.placeholder.com/115x140" alt="#">--}}
{{--                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-12 no-padding">--}}
{{--                                <div class="content">--}}
{{--                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>--}}
{{--                                    <p class="price with-discount">$35</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single List  -->--}}
{{--                    <!-- Start Single List  -->--}}
{{--                    <div class="single-list">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                <div class="list-image overlay">--}}
{{--                                    <img src="https://via.placeholder.com/115x140" alt="#">--}}
{{--                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-12 no-padding">--}}
{{--                                <div class="content">--}}
{{--                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>--}}
{{--                                    <p class="price with-discount">$99</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single List  -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Shop Home List  -->--}}

{{--    <!-- Start Cowndown Area -->--}}
{{--    <section class="cown-down">--}}
{{--        <div class="section-inner ">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 col-12 padding-right">--}}
{{--                        <div class="image">--}}
{{--                            <img src="https://via.placeholder.com/750x590" alt="#">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 col-12 padding-left">--}}
{{--                        <div class="content">--}}
{{--                            <div class="heading-block">--}}
{{--                                <p class="small-title">Deal of day</p>--}}
{{--                                <h3 class="title">Beatutyful dress for women</h3>--}}
{{--                                <p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>--}}
{{--                                <h1 class="price">$1200 <s>$1890</s></h1>--}}
{{--                                <div class="coming-time">--}}
{{--                                    <div class="clearfix" data-countdown="2021/02/30"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- /End Cowndown Area -->--}}

{{--    <!-- Start Shop Blog  -->--}}
{{--    <section class="shop-blog section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <h2>From Our Blog</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <!-- Start Single Blog  -->--}}
{{--                    <div class="shop-single-blog">--}}
{{--                        <img src="https://via.placeholder.com/370x300" alt="#">--}}
{{--                        <div class="content">--}}
{{--                            <p class="date">22 July , 2020. Monday</p>--}}
{{--                            <a href="#" class="title">Sed adipiscing ornare.</a>--}}
{{--                            <a href="#" class="more-btn">Continue Reading</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single Blog  -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <!-- Start Single Blog  -->--}}
{{--                    <div class="shop-single-blog">--}}
{{--                        <img src="https://via.placeholder.com/370x300" alt="#">--}}
{{--                        <div class="content">--}}
{{--                            <p class="date">22 July, 2020. Monday</p>--}}
{{--                            <a href="#" class="title">Man’s Fashion Winter Sale</a>--}}
{{--                            <a href="#" class="more-btn">Continue Reading</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single Blog  -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <!-- Start Single Blog  -->--}}
{{--                    <div class="shop-single-blog">--}}
{{--                        <img src="https://via.placeholder.com/370x300" alt="#">--}}
{{--                        <div class="content">--}}
{{--                            <p class="date">22 July, 2020. Monday</p>--}}
{{--                            <a href="#" class="title">Women Fashion Festive</a>--}}
{{--                            <a href="#" class="more-btn">Continue Reading</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single Blog  -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Shop Blog  -->--}}
@stop
