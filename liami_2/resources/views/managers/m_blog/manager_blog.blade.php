@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>Blog Manager</title>
@endsection

{{-- css --}}
@section('css')
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">
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
                                    <input type="text" placeholder="Search here..." name="name" required>
                                </fieldset>
                                <div class="button-submit">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <a class="tf-button style-1 w208" href="{{ route('managers.m_blog.add_blog') }}"><i
                                class="icon-plus"></i>Add new</a>
                    </div>

                    <div class="wg-table table-product-list">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Blog</div>
                            </li>
                            <li>
                                <div class="body-title">Author</div>
                            </li>
                            <li>
                                <div class="body-title">Created At</div>
                            </li>
                            <li>
                                <div class="body-title">Is Visible</div>
                            </li>
                            <li>
                                <div class="body-title">View</div>
                            </li>
                            <li>
                                <div class="body-title">Action</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            @foreach ($blogs as $blog)
                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        <img src="{{ asset($blog->ImageURL) }}" alt="Blog Image" >                                    </div>
                                    <div class="flex items-center justify-between gap20 flex-grow">
                                        <div class="name">
                                            <a href="{{ route('managers.m_blog.update_blog', $blog->Title) }}"
                                                class="body-title-2">{{ $blog->Title }}</a>
                                        </div>
                                        <div class="body-text">{{ $blog->AuthorID }}</div>
                                        <div class="body-text">{{ $blog->created_at->format('d/m/Y') }}</div>
                                        <div class="body-text">{{ $blog->IsVisible ? 'Hiển thị' : 'Ẩn' }}</div>
                                        <div class="body-text">{{ $blog->views }}</div>
                                        <div class="list-icon-function">
                                            <div class="item edit">
                                                <a href="{{ route('managers.m_blog.update_blog', $blog->PostID) }}"><i
                                                        class="icon-edit-3"></i></a>
                                            </div>
                                            <div class="item trash">
                                                <form action="" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        style="background:none; border:none; cursor:pointer;"><i
                                                            class="icon-trash-2"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Showing {{ $blogs->count() }} entries</div>
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
