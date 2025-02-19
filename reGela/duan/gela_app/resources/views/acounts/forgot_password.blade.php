@extends('layouts.master2')
@section('title')
<title>Forgot password</title>

@endsection
@section('css')
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
    <div class="lg-rg-wrap d-flex flex-wrap align-items-center position-relative w-100">
        <div class="lg-rg-img position-relative">
            <div class="fixed-bg" style="background-image: url('{{ asset('assets/images/lg-rg-bg.jpg') }}');"></div>
            <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img src="{{ asset('assets/images/logo.svg') }}" alt="Logo"></a></h1></div><!-- Logo -->
        </div>
        <div class="lg-rg-form d-flex flex-wrap align-items-center justify-content-center position-relative">
            <div class="lg-rg-form-top align-items-center justify-content-between d-flex flex-wrap w-100">
                <a class="back-btn rounded-circle" href="{{ asset('acounts/login') }}" title=""><i class="fi fi-rr-angle-small-left"></i></a>
                <p class="mb-0">Already a member? <a href="{{ asset('acounts/login') }}" title="">Sign In</a></p>
            </div>
            <div class="lg-rg-form-inner w-100">
                <h2 class="mb-0">Forgot Password?</h2>
                <p class="mb-0">Enter the email address you used when you joined and we’ll send you instructions to reset your password.</p>
                <form>
                    <div class="field-box v2 position-relative w-100">
                        <label>Email</label>
                        <input type="email">
                    </div>
                    <div class="field-btn d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                        <button class="theme-btn bg-color1" type="submit">Sent Reset Instructions<span></span><span></span><span></span><span></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- Login & Register Wrap -->
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
