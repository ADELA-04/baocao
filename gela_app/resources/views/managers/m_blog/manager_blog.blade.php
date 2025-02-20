@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
       Blog Manager
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
                <h3>Blog Manager</h3>

            </div>
            <!-- product-list -->
            <div class="wg-box">
                <div class="title-box">
                    <i class="icon-coffee"></i>
                    <div class="body-text">Tip search by Product ID: Each product is provided with a unique ID, which you can rely on to find the exact product you need.</div>
                </div>
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <div class="show">
                            <div class="text-tiny">Showing</div>
                            <div class="select">
                                <select class="">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
                            </div>
                            <div class="text-tiny">entries</div>
                        </div>
                        <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href="add-product.html"><i class="icon-plus"></i>Add new</a>
                </div>
                <div class="wg-table table-product-list">
                    <ul class="table-title flex gap20 mb-14">
                        <li>
                            <div class="body-title">Blog</div>
                        </li>
                        <li>
                            <div class="body-title">Blog ID</div>
                        </li>
                        <li>
                            <div class="body-title">Price</div>
                        </li>
                        <li>
                            <div class="body-title">Quantity</div>
                        </li>
                        <li>
                            <div class="body-title">Sale</div>
                        </li>
                        <li>
                            <div class="body-title">Stock</div>
                        </li>
                        <li>
                            <div class="body-title">Start date</div>
                        </li>
                        <li>
                            <div class="body-title">Action</div>
                        </li>
                    </ul>
                    <ul class="flex flex-column">
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/41.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Dog Food, Chicken & Chicken Liver Recipe...</a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/42.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Grain Free Dry Dog Food | Rachael Ray® Nutrish®</a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/43.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Weruva Pumpkin Patch Up! Pumpkin With Ginger...</a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/44.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Milk-Bone Mini's Flavor Snacks Dog Treats, 15 Ounce </a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/45.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Milk-Bone Mini's Flavor Snacks Dog Treats, 15 Ounce </a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/46.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Weruva Pumpkin Patch Up! Dog & Cat Food...</a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/47.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Kristin Watson</a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/48.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Kristin Watson</a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/49.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Kristin Watson</a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item gap14">
                            <div class="image no-bg">
                                <img src="images/products/50.png" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                    <a href="product-list.html" class="body-title-2">Kristin Watson</a>
                                </div>
                                <div class="body-text">#7712309</div>
                                <div class="body-text">$1,452.500</div>
                                <div class="body-text">1,638</div>
                                <div class="body-text">20</div>
                                <div>
                                    <div class="block-not-available">Out of stock</div>
                                </div>
                                <div class="body-text">$28,672.36</div>
                                <div class="list-icon-function">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10">
                    <div class="text-tiny">Showing 10 entries</div>
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
            <!-- /product-list -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    <!-- /main-content-wrap -->
    <!-- bottom-page -->
    <div class="bottom-page">
        <div class="body-text">Copyright © 2024 Remos. Design with</div>
        <i class="icon-heart"></i>
        <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights reserved.</div>
    </div>
    <!-- /bottom-page -->
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
@endsection
