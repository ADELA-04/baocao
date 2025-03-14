@extends('layouts.master')
@section('title')
    <title>Product List</title>
@endsection
@section('css')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css3/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/jquery.scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts3/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css3/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uicons-regular-rounded.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.bootstrap-touchspin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        .product-thumb img {
            width: 100%;
            /* Đảm bảo ảnh chiếm đầy chiều rộng của phần tử chứa */
            height: 200px;
            /* Thiết lập chiều cao cố định cho tất cả ảnh */
            object-fit: cover;
            /* Giữ tỉ lệ khung hình và cắt ảnh nếu cần */
        }
    </style>
@endsection
@section('content')
    <div class="main-content main-content-product left-sidebar mt-5">
        <div class="container">
            <div class="row" style="margin-bottom: 10px">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="trail-item trail-end active">
                                {{ $category->CategoryName ?? 'Product' }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="wrapper-sidebar shop-sidebar">
                        <div class="widget woof_Widget">
                            <div class="widget widget-category">
                                <h3 class="widgettitle">Category</h3>
                                <ul class="list-brand">
                                    @foreach ($categories as $category)
                                        <li>
                                            <form action="{{ route('filter.products') }}" method="GET">
                                                <input id="category_{{ $category->CategoryID }}" type="checkbox"
                                                    name="category_id[]" value="{{ $category->CategoryID }}"
                                                    onchange="this.form.submit()"
                                                    @if (isset($selectedCategoryIDs) && in_array($category->CategoryID, $selectedCategoryIDs)) checked @endif>
                                                <label class="label-text"
                                                    for="category_{{ $category->CategoryID }}">{{ $category->CategoryName }}</label>
                                            </form>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget-brand">
                                <h3 class="widgettitle">Brand</h3>
                                <ul class="list-brand">
                                    @foreach ($brands as $brandItem)
                                        @if (!empty($brandItem->Brand))
                                            <li>
                                                <form action="{{ route('filter.brand.products') }}" method="GET">
                                                    <input id="brand_{{ $brandItem->Brand }}" type="checkbox"
                                                        name="brand" value="{{ $brandItem->Brand }}"
                                                        onchange="this.form.submit()"
                                                        @if (isset($selectedBrand) && $selectedBrand == $brandItem->Brand) checked @endif>
                                                    <label for="brand_{{ $brandItem->Brand }}"
                                                        class="label-text">{{ $brandItem->Brand }}</label>
                                                </form>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                        </div>
                        {{-- <div class="widget widget_filter_price">
                                <h4 class="widgettitle">
                                    Price (VNĐ)
                                </h4>
                                <div class="price-slider-wrapper">
                                    <div data-label-reasult="Range:" data-min="0" data-max="3000"
                                        class="slider-range-price " data-value-min="0" data-value-max="1000">
                                    </div>
                                    <div class="price-slider-amount">
                                        <span class="from">45</span>
                                        <span class="to">215</span>
                                    </div>
                                </div>
                            </div> --}}

                    </div>
                    {{-- <div class="widget newsletter-widget">
                        <div class="newsletter-form-wrap ">
                            <h3 class="title">Subscribe to Our Newsletter</h3>
                            <div class="subtitle">
                                More special Deals, Events & Promotions
                            </div>
                            <input type="email" class="email" placeholder="Your email letter">
                            <button type="submit" class="button submit-newsletter">Send</button>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="content-area shop-grid-content no-banner col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="text-tiny" style="margin-bottom: 10px; text-align: right;;">Hiện
                        {{ $products->count() }}/12 mục</div>
                    @if ($products->isEmpty())
                        <img src="{{ asset('assets\images3\no-found.png') }}" alt="img">
                    @else
                        <ul class="row list-products auto-clear equal-container product-grid">
                            @foreach ($products as $product)
                                <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
                                                <span class="onnew">
                                                    <span class="text">
                                                        {{ round((($product->Price - $product->SalePrice) / $product->Price) * 100) }}%
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="{{ route('product.detail', $product->ProductID) }}">
                                                    <img src="{{ asset($product->Image) }}" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a
                                                    href="{{ route('product.detail', $product->ProductID) }}">{{ $product->ProductName }}</a>
                                            </h5>
                                            <div class="group-info">

                                                <div class="price">
                                                    <del>
                                                        {{ $product->Price }} VNĐ
                                                    </del>
                                                    <ins>
                                                        {{ $product->SalePrice }} VNĐ
                                                    </ins>
                                                </div>
                                            </div>
                                            <p style="text-align: right; margin-top: 10px;"><i class="fas fa-eye"></i> :
                                                {{ $product->View }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    @endif

                    <div class="pagination clearfix style3"
                        style="display: flex;justify-content: center; text-align: center; vertical-align: middle;">
                        <div class="nav-link">
                            <!-- Liên kết đến trang trước -->
                            @if ($products->onFirstPage())
                                <span class="page-numbers disabled"><i class="icon fa fa-angle-left"
                                        aria-hidden="true"></i></span>
                            @else
                                <a href="{{ $products->previousPageUrl() }}" class="page-numbers"><i
                                        class="icon fa fa-angle-left" aria-hidden="true"></i></a>
                            @endif

                            <!-- Liên kết đến các trang -->
                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                @if ($page == $products->currentPage())
                                    <span class="page-numbers current">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                                @endif
                            @endforeach

                            <!-- Liên kết đến trang tiếp theo -->
                            @if ($products->hasMorePages())
                                <a href="{{ $products->nextPageUrl() }}" class="page-numbers"><i
                                        class="icon fa fa-angle-right" aria-hidden="true"></i></a>
                            @else
                                <span class="page-numbers disabled"><i class="icon fa fa-angle-right"
                                        aria-hidden="true"></i></span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.plugin-countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery-countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js3/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js3/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js3/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js3/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js3/mobile-menu.js') }}"></script>
    <script src="{{ asset('assets/js3/chosen.min.js') }}"></script>
    <script src="{{ asset('assets/js3/slick.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.elevateZoom.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.actual.min.js') }}"></script>
    <script src="{{ asset('assets/js3/fancybox/source/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js3/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js3/owl.thumbs.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.scrollbar.min.js') }}"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
    <script src="{{ asset('assets/js3/frontend-plugin.js') }}"></script>
@endsection
