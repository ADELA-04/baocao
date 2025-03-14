@extends('layouts.master')
@section('title')
    <title>Product detail</title>
@endsection
@section('css')
    <link rel="stylesheet" href="assets/css/all.min.css">
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
@endsection
@section('content')
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="product-detail position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-7">
                            <div class="product-detail-imgs position-relative w-100">
                                <span
                                    class="bg-color4 rounded-pill position-absolute">{{ round((($product->Price - $product->SalePrice) / $product->Price) * 100) }}%
                                    OFF</span>
                                <ul class="product-detail-img-nav list-unstyled mb-0">
                                    <li>
                                        <div class="product-detail-mini-img overflow-hidden"><img class="img-fluid w-100"
                                                src="{{ asset($product->Image) }}" alt="Product Detail Mini Image 1"></div>
                                    </li>


                                </ul>
                                <ul class="product-detail-big-imgs list-unstyled mb-0">
                                    <li>
                                        <div class="product-detail-big-img overflow-hidden"><a
                                                href="{{ asset($product->Image) }}" data-fancybox="gallery"
                                                title=""><img class="img-fluid w-100"
                                                    src="{{ asset($product->Image) }}" alt="Product Detail Big Image 1"><i
                                                    class="fi fi-rr-eye rounded-circle"></i></a></div>
                                    </li>

                                </ul>
                            </div><!-- Product Detail Images -->
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="product-detail-info position-relative w-100">
                                {{-- <div class="product-rate-review d-flex flex-wrap align-items-center">
                                <span class="d-inline-block rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star off"></i></span>
                                <a class="d-inline-block review-link" href="javascript:void(0);" title="">(1 customer review)</a>
                            </div> --}}
                                <h2 class="mb-0">{{ $product->ProductName }}</h2>
                                <span class=" mb-3 d-block price"><span
                                        style="text-decoration: line-through">{{ $product->Price }} VNĐ</span><span> -
                                    </span><span style="color: #ff0003;font-weight:bold; ">{{ $product->SalePrice }}
                                        VNĐ</span> </span>
                                <p class="mb-4">{{ $product->Summary }}</p>
                                <div class="mb-3 products-size d-flex flex-wrap align-items-center w-100">
                                    <span>Colors:</span>
                                    @foreach (explode(',', $product->Color) as $color)
                                        <a href="javascript:void(0);" title="">{{ trim($color) }}</a>
                                    @endforeach
                                </div>
                                <div class="mb-4 products-size d-flex flex-wrap align-items-center w-100">
                                    <span>Size:</span>
                                    @foreach (explode(',', $product->Size) as $size)
                                        <a href="javascript:void(0);" title="">{{ trim($size) }}</a>
                                    @endforeach
                                </div>
                                <div class="product-bottom d-flex flex-wrap align-items-center w-100">
                                    {{-- <div class="product-quanty">
                                    <input type="number" class="qty" value="01">
                                </div> --}}
                                    <button class="theme-btn bg-color1" type="submit">Mua hàng liên hệ Zalo:
                                        0963215791<span></span><span></span><span></span><span></span></button>
                                    {{-- <a class="heart-btn d-inline-block rounded-circle" href="{{ asset('wishlist.html') }}" title=""><i class="fi-rr-heart"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Product Detail -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 bg-color5 pb-120 position-relative">
            <div class="container">
                <div class="product-tabs position-relative w-100">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#product-detail-tab1-1" type="button">Description</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#product-detail-tab1-2" type="button">Additional Information</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-detail-tab1-1">
                            <div class="product-detail-tab-content w-100">
                                <div class="row mrg30">
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <h4 class="mb-0">Specifications:</h4>
                                        <p class="mb-0">{!! nl2br(e($product->Description)) !!}</p>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-lg-4">
                                        @foreach ($settings as $setting)
                                            <h4 class="mb-0">Any questions please contact:</h4>
                                            <p class="mb-1">Hotline: {{ $setting->Phone }}</p>
                                            <p class="mb-1">Email: {{ $setting->Email }}</p>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-detail-tab1-2">
                            <div class="product-detail-tab-content w-100">
                                <div class="product-detail-info-table w-100">
                                    <table>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{ $product->Price }} VNĐ</td>
                                        </tr>
                                        <tr>
                                            <th>Sale Price</th>
                                            <td>{{ $product->SalePrice }} VNĐ</td>
                                        </tr>
                                        <tr>
                                            <th>Size</th>
                                            <td>{{ $product->Size }}</td>
                                        </tr>
                                        <tr>
                                            <th>Color</th>
                                            <td>{{ $product->Color }}</td>
                                        </tr>
                                        <tr>
                                            <th>Material</th>
                                            <td>{{ $product->Material }}</td>
                                        </tr>
                                        <tr>
                                            <th>Weight (kg)</th>
                                            <td>{{ $product->Weigh }}</td>
                                        </tr>

                                        <tr>
                                            <th>Brand</th>
                                            <td>{{ $product->Brand }}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>{{ $product->category->CategoryName }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- Product Tabs -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <h2 class="mb-0"><span class="text-color4">Related </span>Product</h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        @foreach ($relatedProducts as $relatedProduct)
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="product-box position-relative w-100">
                                    <div class="product-img overflow-hidden position-relative w-100">
                                        <a href="{{ route('product.detail', $relatedProduct->ProductID) }}"
                                            title=""><img class="img-fluid w-100"
                                                src="{{ asset($relatedProduct->Image) }}" alt="Product Image 7"></a>
                                        <div class="product-btns position-absolute">
                                            <a class="cart-btn"
                                                href="{{ route('product.detail', $relatedProduct->ProductID) }}"
                                                title=""><i class="fi-rr-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info w-100">
                                        <h4 class="mb-0"><a
                                                href="{{ route('product.detail', $relatedProduct->ProductID) }}"
                                                title="">{{ $relatedProduct->ProductName }}</a></h4>
                                        <div style="display: flex; justify-content: center;margin-top:10px">
                                            <div style="margin-right: 10px"><span class="price"
                                                    style="text-decoration: line-through">{{ $relatedProduct->Price }}
                                                    VND</span></div>
                                            <div><span class="price"
                                                    style="color: #ff0003;font-weight:bold;">{{ $relatedProduct->SalePrice }}
                                                    VND</span></div>
                                        </div>
                                        <p style="text-align: right"><i class="fas fa-eye"></i> :
                                            {{ $relatedProduct->View }}</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div><!-- Products Wrap -->
                <div class="mb-5 view-more d-block mt-60 position-relative text-center w-100">
                    <a class="theme-btn bg-color4 brd-btn" href="{{ route('product.all') }}" title="">View All
                        Products<span></span><span></span><span></span><span></span></a>
                </div><!-- View More -->
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
