@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        Trang admin
    </title>
@endsection

{{-- css --}}
@section('css')
    <meta charset="utf-8">

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">

    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.png') }}">
@endsection


{{-- content --}}
@section('content')
    <!-- main-content -->
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="tf-section-3">
                    <!-- top-product -->
                    <div class="wg-box">
                        <div class="flex items-center justify-between">
                            <h5>Top product</h5>
                            <div class="dropdown default">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="wg-table table-top-product-1">
                            <ul class="table-title flex gap10 mb-14">
                                <li>
                                    <div class="body-title">Product</div>
                                </li>
                                <li>
                                    <div class="body-title">Review</div>
                                </li>
                                <li>
                                    <div class="body-title">Sold</div>
                                </li>
                                <li>
                                    <div class="body-title">Profit</div>
                                </li>
                            </ul>
                            <ul class="flex flex-column gap18">
                                <li class="product-item">
                                    <div class="image small no-bg">
                                        <img src="images/products/36.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow">
                                        <div class="name">
                                            <a href="product-list.html" class="body-text">Prodotti per il
                                                tuo cane...</a>
                                        </div>
                                        <div>
                                            <div class="rating-number">
                                                <div class="icon">
                                                    <i class="icon-star1"></i>
                                                </div>
                                                <div class="number body-text">4.7</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="body-text">120</div>
                                        </div>
                                        <div>
                                            <div class="body-text">$16.960</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="image small no-bg">
                                        <img src="images/products/37.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow">
                                        <div class="name">
                                            <a href="product-list.html" class="body-text">Wholesome
                                                Pride...</a>
                                        </div>
                                        <div>
                                            <div class="rating-number">
                                                <div class="icon">
                                                    <i class="icon-star1"></i>
                                                </div>
                                                <div class="number body-text">4.7</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="body-text">120</div>
                                        </div>
                                        <div>
                                            <div class="body-text">$16.960</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="image small no-bg">
                                        <img src="images/products/38.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow">
                                        <div class="name">
                                            <a href="product-list.html" class="body-text">Beneful Baked
                                                Delights...</a>
                                        </div>
                                        <div>
                                            <div class="rating-number">
                                                <div class="icon">
                                                    <i class="icon-star1"></i>
                                                </div>
                                                <div class="number body-text">4.7</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="body-text">120</div>
                                        </div>
                                        <div>
                                            <div class="body-text">$16.960</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="image small no-bg">
                                        <img src="images/products/39.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow">
                                        <div class="name">
                                            <a href="product-list.html" class="body-text">Taste of the
                                                Wild...</a>
                                        </div>
                                        <div>
                                            <div class="rating-number">
                                                <div class="icon">
                                                    <i class="icon-star1"></i>
                                                </div>
                                                <div class="number body-text">4.7</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="body-text">120</div>
                                        </div>
                                        <div>
                                            <div class="body-text">$16.960</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="image small no-bg">
                                        <img src="images/products/40.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow">
                                        <div class="name">
                                            <a href="product-list.html" class="body-text">Canagan -
                                                Britain's...</a>
                                        </div>
                                        <div>
                                            <div class="rating-number">
                                                <div class="icon">
                                                    <i class="icon-star1"></i>
                                                </div>
                                                <div class="number body-text">4.7</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="body-text">120</div>
                                        </div>
                                        <div>
                                            <div class="body-text">$16.960</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- top-product -->
                    <!-- earnings -->
                    <div class="wg-box">
                        <div class="flex items-center justify-between">
                            <h5>Earnings</h5>
                            <div class="dropdown default">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="line-chart-9"></div>
                        <div class="flex flex-wrap gap40 justify-center">
                            <div>
                                <div class="mb-2">
                                    <div class="block-legend">
                                        <div class="dot t1"></div>
                                        <div class="text-tiny">Revenue</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap10">
                                    <h4>$37,802</h4>
                                    <div class="box-icon-trending up">
                                        <i class="icon-trending-up"></i>
                                        <div class="body-title number">0.56%</div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <div class="block-legend">
                                        <div class="dot t2"></div>
                                        <div class="text-tiny">Profit</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap10">
                                    <h4>$28,305</h4>
                                    <div class="box-icon-trending up">
                                        <i class="icon-trending-up"></i>
                                        <div class="body-title number">0.56%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- earnings -->
                    <!-- website-visitors -->
                    <div class="wg-box">
                        <div class="flex items-center justify-between">
                            <h5>Website visitors</h5>
                            <div class="dropdown default">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="line-chart-10"></div>
                    </div>
                    <!-- website-visitors -->
                </div>
                <div class="tf-section mb-30" style="margin-top: 20px">
                    <!-- orders -->
                    <div class="wg-box">
                        <div class="flex items-center justify-between">
                            <h5>Recent orders</h5>
                            <div class="dropdown default">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="view-all">View all<i
                                            class="icon-chevron-down"></i></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);">3 days</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">7 days</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="wg-table table-product-overview t2">
                            <ul class="table-title flex gap20 mb-14">
                                <li>
                                    <div class="body-title">Product</div>
                                </li>
                                <li>
                                    <div class="body-title">Customer</div>
                                </li>
                                <li>
                                    <div class="body-title">Product ID</div>
                                </li>
                                <li>
                                    <div class="body-title">Quantity</div>
                                </li>
                                <li>
                                    <div class="body-title">Price</div>
                                </li>
                                <li>
                                    <div class="body-title">Status</div>
                                </li>
                            </ul>
                            <div class="divider mb-14"></div>
                            <ul class="flex flex-column gap10">
                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        <img src="images/products/31.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow gap20">
                                        <div class="name">
                                            <a href="product-list.html" class="body-title-2">Taste of the
                                                Wild Formula Finder</a>
                                        </div>
                                        <div class="body-text">2,672</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div class="body-text">X1</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div>
                                            <div class="block-available">Delivered</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        <img src="images/products/32.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow gap20">
                                        <div class="name">
                                            <a href="product-list.html" class="body-title-2">Proden
                                                Plaqueoff Dental Bites Dog, 150 G</a>
                                        </div>
                                        <div class="body-text">2,672</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div class="body-text">X2</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div>
                                            <div class="block-available">Delivered</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        <img src="images/products/33.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow gap20">
                                        <div class="name">
                                            <a href="product-list.html" class="body-title-2">Zuke's Lil'
                                                Links Healthy Little Sausage Links for Dogs...</a>
                                        </div>
                                        <div class="body-text">2,672</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div class="body-text">X1</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div>
                                            <div class="block-available">Delivered</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        <img src="images/products/34.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow gap20">
                                        <div class="name">
                                            <a href="product-list.html" class="body-title-2">Rachael Ray
                                                Nutrish Grain Free Chicken Drumstick...</a>
                                        </div>
                                        <div class="body-text">2,672</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div class="body-text">X3</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div>
                                            <div class="block-available">Delivered</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        <img src="images/products/35.png" alt="">
                                    </div>
                                    <div class="flex items-center justify-between flex-grow gap20">
                                        <div class="name">
                                            <a href="product-list.html" class="body-title-2">Fruitables
                                                Dog Treats Sweet Potato & Pecan Flavor</a>
                                        </div>
                                        <div class="body-text">2,672</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div class="body-text">X2</div>
                                        <div class="body-text">$28,672.36</div>
                                        <div>
                                            <div class="block-available">Delivered</div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="divider"></div>
                        <div class="flex items-center justify-between flex-wrap gap10">
                            <div class="text-tiny">Showing 5 entries</div>
                            <ul class="wg-pagination">
                                <li>
                                    <a href="#"><i class="icon-chevron-left"></i></a>
                                </li>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li class="active">
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /orders -->
                </div>

            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->
        <!-- bottom-page -->
        <div class="bottom-page">
            <div class="body-text">Copyright © 2024 Remos. Design with</div>
            <i class="icon-heart"></i>
            <div class="body-text">by <a
                    href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights
                reserved.</div>
        </div>
        <!-- /bottom-page -->
    </div>
    <!-- /main-content -->

@endsection

{{-- script --}}
@section('script')
    <script src="assets/js2/jquery.min.js"></script>
    <script src="assets/js2/bootstrap.min.js"></script>
    <script src="assets/js2/bootstrap-select.min.js"></script>
    <script src="assets/js2/zoom.js"></script>
    <script src="assets/js2/jvectormap-1.2.2.min.js"></script>
    <script src="assets/js2/jvectormap-us-lcc.js"></script>
    <script src="assets/js2/jvectormap.js"></script>
    <script src="assets/js2/morris.min.js"></script>
    <script src="assets/js2/raphael.min.js"></script>
    <script src="assets/js2/morris.js"></script>
    <script src="assets/js2/apexcharts/apexcharts.js"></script>
    <script src="assets/js2/apexcharts/line-chart-1.js"></script>
    <script src="assets/js2/apexcharts/line-chart-2.js"></script>
    <script src="assets/js2/apexcharts/line-chart-3.js"></script>
    <script src="assets/js2/apexcharts/line-chart-4.js"></script>
    <script src="assets/js2/apexcharts/line-chart-8.js"></script>
    <script src="assets/js2/apexcharts/line-chart-9.js"></script>
    <script src="assets/js2/apexcharts/line-chart-10.js"></script>
    <script src="assets/js2/switcher.js"></script>
    <script src="assets/js2/theme-settings.js"></script>
    <script src="assets/js2/main.js"></script>
@endsection
