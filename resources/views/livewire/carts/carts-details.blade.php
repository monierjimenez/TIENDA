<div>
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
                            <a href="{{ route('pages.cart') }}" class="single-icon">
                                <i class="fa fa-opencart"></i>
                                <span class="total-count">{{ $quantity_of_products }}</span>
                            </a>
                        </div>
                        <div class="sinlge-bar sinlge-bar-price">
                            &nbsp;
                            @if( $total_price_products != 0 )
                                ${{ $total_price_products }}
                            @else $00.00 @endif
                        </div>

{{--                        <div class="top-search">--}}
{{--                            <a href="#0"><i class="ti-search"></i> </a>--}}
{{--                        </div>--}}
{{--                        <div class="search-top">--}}
{{--                            <form method="GET" action="{{ route('search') }}" class="search-form">--}}
{{--                                <input type="text" placeholder="{{ __('Search here') }}..." name="search" autocomplete="off">--}}
{{--                                <button value="search" type="submit"><i class="ti-search"></i></button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-8 col-12" style="margin-right: 0px;" wire:ignore>
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
                <div class="sinlge-bar shopping">
                    <a href="{{ route('pages.cart') }}" class="single-icon">
                        <i class="fa fa-opencart"></i>
                        <span class="total-count">{{ $quantity_of_products }}</span>
                    </a>

                </div>
                <div class="sinlge-bar">&nbsp;
                    @if( $total_price_products != 0 )
                        ${{ $total_price_products }}
                    @else $00.00 @endif
                </div>
            </div>
        </div>
    </div>
</div>
