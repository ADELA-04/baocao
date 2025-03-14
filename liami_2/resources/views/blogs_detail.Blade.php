@extends('layouts.master')

@section('title')
    <title>
        Blogs Detail
    </title>
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
@endsection
@section('content')
    <section>
        <div class="page-top-wrap w-100 pt-20 bg-color22 pb-20 position-relative">

            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" title="">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogs') }}" title="">Blog</a></li>
                    <li class="breadcrumb-item active">{{ $blogs_detail->Title }}</li>
                </ol>

            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="row mrg30">
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <aside class="w-100">
                            <div class="widget w-100">
                                <h4>Recent post</h4>
                                <div class="mini-posts w-100">
                                    @foreach ($blogs as $blog)
                                        <div class="mini-post-box d-flex flex-wrap align-items-center w-100">
                                            <div class="mini-post-img overflow-hidden position-relative"><a
                                                    href="{{ route('blogs_detail',$blog->PostID) }}" title=""><img class="img-fluid w-100"
                                                        src="{{ asset($blog->ImageURL) }}"
                                                        alt="Mini Post Image 1"></a></div>
                                            <div class="mini-post-info">
                                                <h6 class="mb-0"><a href="{{ route('blogs_detail',$blog->PostID) }}" title="">{{ $blog->Title }}</a></h6>
                                                <span class="d-block">{{ $blog->created_at }} </span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-9">
                        <div class="post-detail position-relative w-100">
                            <div class="post-detail-info w-100">
                                <h1 class="mb-0">{{ $blogs_detail->Title }}</h1>
                                <div class="post-detail-mini-author align-items-center d-flex flex-wrap">

                                    <div class="post-detail-min-author-info">

                                        <span class="d-block">{{ $blogs_detail->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-detail-img position-relative w-100">
                                <img class="img-fluid w-100" src="{{ asset($blogs_detail->ImageURL) }}"
                                    alt="Post Detail Image 2">
                            </div>
                            <div class="post-detail-content w-100">
                                <p>{{ $blogs_detail->Content }}</p>
                                <p>Whether you’re kicking off a new campaign or looking to revamp your strategy, you’ll
                                    learn will be universal to all small business email marketing.</p>
                                <p>MailChimp is an email marketing service provider founded in 2001. It has 9 million users
                                    that collectively send over 15 billion emails through the service each month. Whether
                                    you’re kicking off a new campaign or looking to revamp your strategy.</p>
                                <h3>Habitasse per feugiat aliquam luctus</h3>
                                <p>Email is a crucial channel in any marketing mix, and never has this been truer than for
                                    today’s entrepreneur. Curious what to say? How to say it? How often to hit “send”? Each
                                    bite-sized lesson delivers core concepts, guiding questions, and tactical how-to
                                    resources.</p>
                                <p>Whether you’re kicking off a new campaign or looking to revamp your strategy, the lessons
                                    you’ll learn will be universal to all small business email marketing.</p>
                                <blockquote>
                                    <p>Email is a crucial channel in any marketing mix, and never has this been truer than
                                        for today’s entrepreneur. Curious what to say? How to say it? How often to hit
                                        “send”? Each bite-sized lesson delivers core concepts, guiding questions, and
                                        tactical how-to resources., nd never has this been truer than for today’s
                                        entrepreneur.</p>
                                </blockquote>
                                <h3>Habitasse per feugiat aliquam luctus accumsan curae</h3>
                                <p>Email is a crucial channel in any marketing mix, and never has this been truer than for
                                    today’s entrepreneur. Curious what to say? How to say it? How often to hit “send”? Each
                                    bite-sized lesson delivers core concepts, guiding questions, and tactical how-to
                                    resources. Email is a crucial channel in any marketing mix, and never has this been
                                    truer than for today’s entrepreneur.</p>
                                <p>Curious what to say? How to say it? How often to hit “send”? Each bite-sized lesson
                                    delivers core concepts, guiding questions, and tactical how-to resources. guiding
                                    questions, and tactical how-to resources.</p>
                                <div class="post-gallery position-relative w-100">
                                    <div class="row mrg30">
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <div class="post-gallery-box overflow-hidden position-relative w-100"><a
                                                    href="assets/images/resources/post-gallery-img1-1.jpg"
                                                    data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                        src="{{ asset($blogs_detail->ImageURL) }}"
                                                        alt="Post Gallery Image 1"></a></div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <div class="post-gallery-box overflow-hidden position-relative w-100"><a
                                                    href="assets/images/resources/post-gallery-img1-2.jpg"
                                                    data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                        src="{{ asset($blogs_detail->ImageURL) }}"
                                                        alt="Post Gallery Image 2"></a></div>
                                        </div>
                                    </div>
                                </div><!-- Post Gallery -->
                                <p>Email is a crucial channel in any marketing mix, and never has this been truer than for
                                    today’s entrepreneur. Curious what to say? How to say it? How often to hit “send”? Each
                                    bite-sized lesson delivers core concepts, guiding questions, and tactical how-to
                                    resources. Email is a crucial channel in any marketing mix, and never has this been
                                    truer than for today’s entrepreneur.</p>
                                <p>Curious what to say? How to say it? How often to hit “send”? Each bite-sized lesson
                                    delivers core concepts, guiding questions, and tactical how-to resources.</p>
                            </div>
                            <div class="post-detail-share d-flex flex-wrap align-items-center w-100">
                                <h5 class="mb-0">Share on:</h5>
                                <div class="share-links d-flex flex-wrap">
                                    <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                                            class="fab fa-facebook-f"></i>Facebook</a>
                                </div>
                            </div>
                        </div><!-- Post Detail -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="w-100 pb-100 position-relative">
            <div class="container">
                <div class="newsletter-wrap bg-color5 position-relative w-100"
                    style="background-image: url(assets/images/resources/newsletter-mockup.png);">
                    <div class="row mrg30">
                        <div class="col-md-9 col-sm-12 col-lg-7">
                            <div class="sec-title position-relative">

                                <h2 class="mb-0">New Product Notifications</h2>
                            </div><!-- Section Title -->
                            <form id="subscribe-form" method="post" action="#">
                                <div class="field-box position-relative">
                                    <i class="fi fi-rr-envelope"></i>
                                    <input class="email" type="email" placeholder="Enter your email" name="email"
                                        required>
                                </div>
                                <div class="field-btn">
                                    <button class="theme-btn bg-color1" type="submit"
                                        id="subscribe-button">Subscribe<span></span><span></span><span></span><span></span></button>
                                </div>
                                <div class="response w-100"></div>
                            </form>
                        </div>
                    </div>
                </div><!-- Newsletter Wrap -->
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
