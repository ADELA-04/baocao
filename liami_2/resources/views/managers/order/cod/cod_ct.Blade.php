@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        COD Detail
    </title>
@endsection

{{-- css --}}
@section('css')
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
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Transition #123783</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html">
                                <div class="text-tiny">Dashboard</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#">
                                <div class="text-tiny">Order</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#">
                                <div class="text-tiny">Order detail</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">Order #123783</div>
                        </li>
                    </ul>
                </div>
                <!-- order-detail -->
                <div class="wg-order-detail">
                    <div class="left flex-grow">
                        <div class="wg-box mb-20">
                            <div class="wg-table table-order-detail">
                                <ul class="table-title flex items-center justify-between gap20 mb-24">
                                    <li>
                                        <div class="body-title">All item</div>
                                    </li>
                                    <li>
                                        <div class="dropdown default">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="body-title-2 flex items-center gap8">Sort<i
                                                        class="h6 icon-chevron-down"></i></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);">Name</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Quantity</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Price</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="flex flex-column">
                                    <li class="product-item gap14">
                                        <div class="image no-bg">
                                            <img src="images/products/41.png" alt="">
                                        </div>
                                        <div class="flex items-center justify-between gap40 flex-grow">
                                            <div class="name">
                                                <div class="text-tiny mb-1">Product name</div>
                                                <a href="product-list.html" class="body-title-2">Kristin Watson</a>
                                            </div>
                                            <div class="name">
                                                <div class="text-tiny mb-1">Quantity</div>
                                                <div class="body-title-2">1</div>
                                            </div>
                                            <div class="name">
                                                <div class="text-tiny mb-1">Price</div>
                                                <div class="body-title-2">$50.47</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item gap14">
                                        <div class="image no-bg">
                                            <img src="images/products/44.png" alt="">
                                        </div>
                                        <div class="flex items-center justify-between gap40 flex-grow">
                                            <div class="name">
                                                <div class="text-tiny mb-1">Product name</div>
                                                <a href="product-list.html" class="body-title-2">Kristin Watson</a>
                                            </div>
                                            <div class="name">
                                                <div class="text-tiny mb-1">Quantity</div>
                                                <div class="body-title-2">1</div>
                                            </div>
                                            <div class="name">
                                                <div class="text-tiny mb-1">Price</div>
                                                <div class="body-title-2">$50.47</div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="wg-box">
                            <div class="wg-table table-cart-totals">
                                <ul class="table-title flex mb-24">
                                    <li>
                                        <div class="body-title">Cart Totals</div>
                                    </li>
                                    <li>
                                        <div class="body-title">Price</div>
                                    </li>
                                </ul>
                                <ul class="flex flex-column gap14">
                                    <li class="cart-totals-item">
                                        <span class="body-text">Subtotal:</span>
                                        <span class="body-title-2">$70.13</span>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="cart-totals-item">
                                        <span class="body-text">Shipping:</span>
                                        <span class="body-title-2">$10.00</span>
                                    </li>

                                    <li class="divider"></li>
                                    <li class="cart-totals-item">
                                        <span class="body-title">Total price:</span>
                                        <span class="body-title tf-color-1">$90.58</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">

                        <div class="wg-box mb-20 gap10">
                            <div class="body-title">Shipping Address</div>
                            <div class="body-text">Đỗ Thị Thơm</div>
                            <div class="body-text">Số 12-Ngõ 57-Bắc Hiên</div>
                            <div class="body-text">Hồng Kỳ</div>
                            <div class="body-text">Sóc Sơn</div>
                            <div class="body-text">Hà Nội</div>
                            <div class="body-text">Việt Nam</div>
                            <div class="body-text">0963215791</div>
                            <div class="body-text">dothom07082004@gmail.com</div>
                        </div>
                        <div class="wg-box mb-20 gap10">
                            <div class="body-title">Payment Status</div>
                            <div class="body-text">paid </div>
                        </div>
                        <div class="wg-box mb-20 gap10">
                            <div class="body-title">COD Status: <span class="body-text">collected</span></div>

                                <div class="body-text">
                                    <a href="" style="color: #2275fc">Update COD status</a> </div>
                        </div>

                    </div>
                </div>
                <!-- /order-detail -->

            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->

    </div>
    <!-- /main-content -->
@endsection


{{-- script --}}
@section('script')
    <!-- Javascript -->
    <script src="{{ asset('assets/js2/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js2/zoom.js') }}"></script>
    <script src="{{ asset('assets/js2/switcher.js') }}"></script>
    <script src="{{ asset('assets/js2/theme-settings.js') }}"></script>
    <script src="{{ asset('assets/js2/main.js') }}"></script>
    <script src="{{ asset('assets/js2/custom.js') }}"></script>
@endsection
