
<footer>
    <div class="w-100 position-relative">
        <div class="container">
            <hr class="mt-0 mb-70">
            <div class="footer-data position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        @foreach ($apparences as $apparence )
                        <div class="widget w-150">
                            <div class="logo">

                                <h1 class="mb-0"><a href="{{ $apparence->NavigationLinks }}" title="Home"><img
                                    src="{{ asset($apparence->LogoURL) }}" alt="Logo"></a></h1>

                            </div><!-- Logo -->
                            <div class="social-links d-flex flex-wrap">
                                <a href="{{ $apparence->LinkFB }}" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $apparence->LinkIN }}" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>


                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-2 col-sm-6 col-lg-2">
                        <div class="widget w-100">
                            <h5>Shop</h5>
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="{{ asset('product-detail.html') }}" title="">{{ $category->CategoryName }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-lg-2">
                        <div class="widget w-100">
                            <h5>Liami</h5>
                            <ul>
                                <li><a href="{{ asset('blog-detail.html') }}" title="">Blog</a></li>
                                <li><a href="{{ asset('audio.html') }}" title="">Contact</a></li>
                                <li><a href="{{ asset('quote.html') }}" title="">Help</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-lg-5">
                        <div class="widget w-100">
                            @foreach ($settings as $setting)
                            <h5>{{ $setting->BusinessName }}</h5>
                            <ul>
                                <li><span style="font-weight: bold">Representative: </span>{{ $setting->BossName }}</li>
                                <li><span style="font-weight: bold">Address: </span> {{ $setting->Address }}</li>
                                <li><span style="font-weight: bold">Hotline: </span> {{ $setting->Phone }}</li>
                                <li><span style="font-weight: bold">Email: </span>{{ $setting->Email }}</li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div><!-- Footer Data -->
            <hr class="mt-70 mb-0">
            <div class="bottom-bar d-flex flex-wrap align-items-center justify-content-between w-100">
                <ul class="bottom-links d-flex flex-wrap align-items-center list-unstyled mb-0">
                    <li><a href="javascript:void(0);" title="">Privacy Policy</a></li>
                    <li><a href="javascript:void(0);" title="">Terms of Service</a></li>
                    <li>&copy; <a href="{{ asset('index.html') }}" title="">Liami</a> All rights reserved.</li>
                </ul><!-- Bottom Links -->
                <div class="payment-opt d-flex flex-wrap align-items-center">
                    <span>Accept for</span>
                    <img class="img-fluid" src="{{ asset('assets/images/payment-opt-img.png') }}" alt="Payment Options Image">
                </div><!-- Payment Options -->
            </div><!-- Bottom Bar -->
        </div>
    </div>
</footer><!-- Footer ok -->

