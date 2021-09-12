
@extends('layouts.layouts')

@section('content')
    <hr>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Home</a>
                        <span>> {{ $category->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="shop-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget category" style="margin-bottom: 30px;">
                            <h3 class="title">Categories</h3>
                            <ul class="categor-list">
                                @foreach($categorys as $category)
                                    <li>
                                        <a href="{{ route('collections', $category) }}">
                                            <i class="fa  fa-angle-double-right"></i> {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--/ End Single Widget -->

                        <!-- Single Widget -->
{{--                        <div class="single-widget recent-post">--}}
{{--                            <h3 class="title">Recent post</h3>--}}
{{--                            <!-- Single Post -->--}}
{{--                            <div class="single-post first">--}}
{{--                                <div class="image">--}}
{{--                                    <img src="https://via.placeholder.com/75x75" alt="#">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h5><a href="#">Girls Dress</a></h5>--}}
{{--                                    <p class="price">$99.50</p>--}}
{{--                                    <ul class="reviews">--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li><i class="ti-star"></i></li>--}}
{{--                                        <li><i class="ti-star"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End Single Post -->--}}
{{--                            <!-- Single Post -->--}}
{{--                            <div class="single-post first">--}}
{{--                                <div class="image">--}}
{{--                                    <img src="https://via.placeholder.com/75x75" alt="#">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h5><a href="#">Women Clothings</a></h5>--}}
{{--                                    <p class="price">$99.50</p>--}}
{{--                                    <ul class="reviews">--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li><i class="ti-star"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End Single Post -->--}}
{{--                            <!-- Single Post -->--}}
{{--                            <div class="single-post first">--}}
{{--                                <div class="image">--}}
{{--                                    <img src="https://via.placeholder.com/75x75" alt="#">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h5><a href="#">Man Tshirt</a></h5>--}}
{{--                                    <p class="price">$99.50</p>--}}
{{--                                    <ul class="reviews">--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                        <li class="yellow"><i class="ti-star"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End Single Post -->--}}
{{--                        </div>--}}
                        <!--/ End Single Widget -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12" style="margin-top: -51px;">
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <!-- Shop Top -->--}}
{{--                            <div class="shop-top">--}}
{{--                                <div class="shop-shorter">--}}
{{--                                    <div class="single-shorter">--}}
{{--                                        <label>Show :</label>--}}
{{--                                        <select>--}}
{{--                                            <option selected="selected">09</option>--}}
{{--                                            <option>15</option>--}}
{{--                                            <option>25</option>--}}
{{--                                            <option>30</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="single-shorter">--}}
{{--                                        <label>Sort By :</label>--}}
{{--                                        <select>--}}
{{--                                            <option selected="selected">Name</option>--}}
{{--                                            <option>Price</option>--}}
{{--                                            <option>Size</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul class="view-mode">--}}
{{--                                    <li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>--}}
{{--                                    <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!--/ End Shop Top -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row">
                        @foreach( $products as $product )
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{ route('productdetails', array($product->categorie->url, $product)) }}">
                                            <img class="default-img" src="/images/{{primeraPhotoProduct($product)}}" alt="#">
{{--
                                            {{--                                            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
                                            <span class="price-dec">10% Off</span>
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#">
                                                    <i class=" ti-eye" style="margin-right: 6px;"></i><span>Quick Shop</span>
                                                </a>
    {{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
    {{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
                                            </div>
                                            <div class="product-action-2">
                                                @if( $product->spec != '[]')
                                                    <a title="Add to cart" href="#">Elegir Opcion</a>
                                                @else
                                                    <a title="Add to cart" href="#">{{ __('Add to cart') }} </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                        <div class="product-price">
                                            @if( $product->sale_price_before != '' )
                                                <span>${{ $product->sale_price }}</span>
                                                <span class="old">${{ $product->sale_price_before }}</span>
                                            @else
                                                <span>${{ $product->sale_price }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                                            {{--                        <div class="col-lg-4 col-md-6 col-12">--}}
{{--                            <div class="single-product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                    </a>--}}
{{--                                    <div class="button-head">--}}
{{--                                        <div class="product-action">--}}
{{--                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2">--}}
{{--                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span>$29.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6 col-12">--}}
{{--                            <div class="single-product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                    </a>--}}
{{--                                    <div class="button-head">--}}
{{--                                        <div class="product-action">--}}
{{--                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2">--}}
{{--                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span>$29.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6 col-12">--}}
{{--                            <div class="single-product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <span class="new">New</span>--}}
{{--                                    </a>--}}
{{--                                    <div class="button-head">--}}
{{--                                        <div class="product-action">--}}
{{--                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2">--}}
{{--                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span>$29.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6 col-12">--}}
{{--                            <div class="single-product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                    </a>--}}
{{--                                    <div class="button-head">--}}
{{--                                        <div class="product-action">--}}
{{--                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2">--}}
{{--                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span>$29.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6 col-12">--}}
{{--                            <div class="single-product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <span class="price-dec">30% Off</span>--}}
{{--                                    </a>--}}
{{--                                    <div class="button-head">--}}
{{--                                        <div class="product-action">--}}
{{--                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2">--}}
{{--                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span>$29.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6 col-12">--}}
{{--                            <div class="single-product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                    </a>--}}
{{--                                    <div class="button-head">--}}
{{--                                        <div class="product-action">--}}
{{--                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2">--}}
{{--                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span>$29.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6 col-12">--}}
{{--                            <div class="single-product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <span class="out-of-stock">Hot</span>--}}
{{--                                    </a>--}}
{{--                                    <div class="button-head">--}}
{{--                                        <div class="product-action">--}}
{{--                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2">--}}
{{--                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span class="old">$60.00</span>--}}
{{--                                        <span>$50.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6 col-12">--}}
{{--                            <div class="single-product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">--}}
{{--                                        <span class="new">New</span>--}}
{{--                                    </a>--}}
{{--                                    <div class="button-head">--}}
{{--                                        <div class="product-action">--}}
{{--                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
{{--                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
{{--                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2">--}}
{{--                                            <a title="Add to cart" href="#">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span>$29.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
