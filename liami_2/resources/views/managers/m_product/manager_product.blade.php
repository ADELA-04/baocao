@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        Product Manager
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
                    <h3>Product Manager</h3>

                </div>
                <!-- product-list -->
                <div class="wg-box">

                    <div class="flex items-center justify-between gap10 flex-wrap">
                        <div class="wg-filter flex-grow">

                            <form class="form-search" method="GET" action="{{ route('managers.m_product.manager_product') }}">
                                <fieldset class="name">
                                    <input type="text" placeholder="Search by Product Name..." name="search" tabindex="2" value="{{ request('search') }}" aria-required="true" required="">
                                </fieldset>
                                <div class="button-submit">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <a class="tf-button style-1 w208" href="{{ route('products.create') }}"><i
                                class="icon-plus"></i>Add new</a>
                    </div>
                    <div class="wg-table table-product-list">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Product</div>
                            </li>
                            <li>
                                <div class="body-title">Category</div>
                            </li>


                            <li>
                                <div class="body-title">Create at</div>
                            </li>

                            <li>
                                <div class="body-title">Action</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            @if ($products->isEmpty())
            <li class="no-results">Không tìm thấy sản phẩm nào với từ khóa "{{ $search }}".</li>
        @else
                            @foreach ($products as $product)
                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        <img src="{{ asset($product->Image) }}" alt="Product Image" >
                                    </div>
                                    <div class="flex items-center justify-between gap20 flex-grow">
                                        <div class="name">
                                            <a href="{{ route('products.edit', $product->ProductID) }}" class="body-title-2">{{ $product->ProductName }}</a>
                                        </div>
                                        <div class="body-text">{{ $product->category->CategoryName }}</div> <!-- Hiển thị tên danh mục -->
                                        <div class="body-text">{{ $product->created_at }}</div> <!-- Hiển thị tên danh mục -->

                                        <div class="list-icon-function">
                                            <div class="item edit">
                                                <a href="{{ route('products.edit', $product->ProductID) }}">
                                                    <i class="icon-edit-3"></i>
                                                </a>
                                            </div>
                                            <div class="user-item">
                                                <form action="{{ route('products.destroy', $product->ProductID) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: none; background: none;">
                                                        <i class="icon-trash-2"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Hiện {{ $products->count() }}/10 mục</div>
                        <ul class="wg-pagination flex items-center">
                            <li>
                                @if ($products->onFirstPage())
                                    <span class="disabled"><i class="icon-chevron-left"></i></span>
                                @else
                                    <a href="{{ $products->previousPageUrl() }}"><i class="icon-chevron-left"></i></a>
                                @endif
                            </li>

                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class="{{ ($products->currentPage() == $i) ? 'active' : '' }}">
                                    <a href="{{ $products->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li>
                                @if ($products->hasMorePages())
                                    <a href="{{ $products->nextPageUrl() }}"><i class="icon-chevron-right"></i></a>
                                @else
                                    <span class="disabled"><i class="icon-chevron-right"></i></span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /product-list -->
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
@endsection
