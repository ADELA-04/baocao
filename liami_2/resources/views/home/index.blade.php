@extends('layouts.master')

@section('title')
    <title>
        Home page
    </title>
@endsection
@section('css')
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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

@endsection

@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="slider-area-wrap position-relative w-100">
                <div class="slider-caro2 nav-style1">
                    @foreach ($banners as $banner)
                        <div class="slider-item overflow-hidden position-relative d-block w-100">
                            <picture class="img-fluid d-block w-100">
                                <source media="(max-width:850px)" src="{{ asset($banner->ImageURL) }}">
                                <img class="img-fluid d-block w-100" src="{{ asset($banner->ImageURL) }}" alt="">
                            </picture>
                            <div class="slider-cap v2 text-center text-white position-absolute">
                                <h1 class="mb-0 animated fadeInUp">{{ $banner->Title }} <br> With Us In Store</h1>
                                <p class="mb-0 animated fadeInUp">{{ $banner->subTitle }} <br></p>
                                <div
                                    class="btns-group d-flex flex-wrap justify-content-center align-items-center animated fadeInUp">
                                    <a class="theme-btn bg-color1" href="{{ $banner->Link }}" title="">See
                                        now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!-- Slider Area Wrap ok -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-60 bg-color5 pb-60 position-relative">
            <div class="container">
                <div class="services-wrap position-relative text-center w-100">
                    <div class="row mrg30">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-truck-side"></i></span>
                                <h4 class="mb-0">Free Shipping</h4>
                                <p class="mb-0">On all orders over $50 CAD/USD</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-time-forward"></i></span>
                                <h4 class="mb-0">10 days return</h4>
                                <p class="mb-0">Possibility of returning goods</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-heart"></i></span>
                                <h4 class="mb-0">We are Inclusive</h4>
                                <p class="mb-0">Representing all</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-plane"></i></span>
                                <h4 class="mb-0">International warrantly</h4>
                                <p class="mb-0">Postal items to countries</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Services Wrap ok -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <h2 class="mb-0"><span class="text-color4">Best-selling </span>products </h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        @foreach ($topViewedProducts as $topViewedProduct)
                        <div class="col-md-4 col-sm-6 col-lg-2">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="{{ route('product.detail',$topViewedProduct->ProductID) }}" title=""><img
                                            class="img-fluid w-100" src="{{ asset($topViewedProduct->Image) }}"
                                            alt="Product Image 7"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="cart-btn" href="{{ route('product.detail',$topViewedProduct->ProductID) }}" title=""><i
                                                class="fi-rr-shopping-bag"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="{{ route('product.detail',$topViewedProduct->ProductID) }}"
                                            title="">{{ $topViewedProduct->ProductName }}</a></h4>
                                    <div style="display: flex; justify-content: center;margin-top:10px">
                                        <div style="margin-right: 10px"><span class="price"
                                                style="text-decoration: line-through">{{ $topViewedProduct->Price }}
                                                VND</span></div>
                                        <div><span class="price"
                                                style="color: #ff0003;font-weight:bold;">{{ $topViewedProduct->SalePrice }}
                                                VND</span></div>
                                    </div>
<p style="text-align: right"><i class="fas fa-eye"></i> : {{$topViewedProduct->View  }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div><!-- Products Wrap -->

            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">

                    <h2 class="mb-0"><span class="text-color4">The Blogs</span> Fasshion</h2>
                </div><!-- Section Title -->
                <div class="featured-products-wrap res-row position-relative w-100">
                    <div class="row mrg20">
                        @foreach ($blogs as $blog )
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="featured-product-box overflow-hidden position-relative w-100">
                                <div class="featured-product-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="{{ asset($blog->ImageURL) }}" alt="Featured Product Image 1">
                                </div>
                                <div class="featured-product-cap position-absolute w-100">
                                    <h2 class="mb-0"><a href="product-detail3.html" title="">{{ $blog->Title }}</a></h2>
                                    <p class="mb-0">{{ $blog->Summary }}</p>
                                    <a class="theme-btn mid-btn bg-white" href="product-detail3.html">See Now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div><!-- Featured Itemss Wrap -->
            </div>
        </div>
    </section>

    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <h2 class="mb-0"><span class="text-color4">New </span>Arrivals</h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        @foreach ($newProduct as $newproduct)
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="product-box position-relative w-100">
                                    <div class="product-img overflow-hidden position-relative w-100">
                                        <a href="{{ route('product.detail',$newproduct->ProductID) }}" title=""><img
                                                class="img-fluid w-100" src="{{ asset($newproduct->Image) }}"
                                                alt="Product Image 7"></a>
                                        <div class="product-btns position-absolute">
                                            <a class="cart-btn" href="{{ route('product.detail',$newproduct->ProductID) }}" title=""><i
                                                    class="fi-rr-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info w-100">
                                        <h4 class="mb-0"><a href="{{ route('product.detail',$newproduct->ProductID) }}"
                                                title="">{{ $newproduct->ProductName }}</a></h4>
                                        <div style="display: flex; justify-content: center;margin-top:10px">
                                            <div style="margin-right: 10px"><span class="price"
                                                    style="text-decoration: line-through">{{ $newproduct->Price }}
                                                    VND</span></div>
                                            <div><span class="price"
                                                    style="color: #ff0003;font-weight:bold;">{{ $newproduct->SalePrice }}
                                                    VND</span></div>
                                        </div>
<p style="text-align: right"><i class="fas fa-eye"></i> : {{$newproduct->View  }}</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div><!-- Products Wrap -->
                <div class="view-more d-block mt-60 position-relative text-center w-100">
                    <a class="theme-btn bg-color4 brd-btn" href="{{ route('product.all') }}" title="">View All
                        Products<span></span><span></span><span></span><span></span></a>
                </div><!-- View More -->
            </div>
        </div>
    </section>


    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="container">
                <div class="sponsors-wrap position-relative w-100">
                    <div class="row align-items-center mrg30">
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-1.png" alt="Sponsor Image 1"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-2.png" alt="Sponsor Image 2"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-3.png" alt="Sponsor Image 3"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-4.png" alt="Sponsor Image 4"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-5.png" alt="Sponsor Image 5"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Sponsors Wrap ok -->
            </div>
        </div>
    </section>
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
@endsection
