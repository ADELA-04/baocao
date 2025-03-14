<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
</head>

<body>
    <header class="style2 w-100">
        <div class="topbar-pad bg-color5 position-relative w-100">
            <div class="container">
                <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="topbar-left d-flex flex-wrap align-items-center">

                    </div><!-- Top Left -->
                    <div class="topbar-mid">
                    </div>
                    <div class="topbar-right">
                        <ul class="links-list d-flex flex-wrap align-items-center mb-0 list-unstyled">

                            <li><a href="{{ route('login') }}" title="">Sign In</a></li>

                            {{-- <li><a href="{{ asset('acounts/login') }}" title="">Sign In</a></li> --}}
                        </ul>
                    </div><!-- Top Right -->
                </div><!-- Topbar Inner -->
            </div>
        </div><!-- Topbar -->
        <div class="logo-menu-wrap position-relative w-100">
            <div class="container">
                <div class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo-menu-inner-left d-flex flex-wrap align-items-center">

                        <div class="logo">
                            @foreach ($apparences as $apparence)
                                <h1 class="mb-0"><a href="{{ $apparence->NavigationLinks }}" title="Home"><img
                                            src="{{ asset($apparence->LogoURL) }}" alt="Logo"></a></h1>
                            @endforeach
                        </div><!-- Logo -->
                    </div>
                    <div class="logo-menu-inner-mid">
                        <nav>
                            <ul>
                                <li class=" {{ request()->is('') ? 'active_head' : '' }}"><a
                                        href="{{ route('home') }}" title="">Home</a></li>
                                <li
                                    class="menu-item-has-children megamenu-item {{ request()->is('products/product_list') ? 'active_head' : '' }}">
                                    <a href="{{ route('product.all') }}" title="">Products</a>
                                    <div class="megamenu-wrap position-absolute w-100">
                                        <div class="container">
                                            <div class="megamenu-inner position-relative w-100">
                                                <div class="row mrg30">
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <div class="megamenu-box-wrap position-relative w-100">
                                                            <div class="row mrg30">
                                                                @foreach ($categories as $category)
                                                                    <div class="col">
                                                                        <div class="megamenu-item w-100">

                                                                            <h4><a
                                                                                    href="{{ route('product_list_category', $category->CategoryID) }}">{{ $category->CategoryName }}</a>
                                                                            </h4>
                                                                            <ul class="list-unstyled mb-0 w-100">
                                                                                <li>
                                                                                    <ul class="list-unstyled">
                                                                                        @foreach ($category->children as $child)
                                                                                            <li>
                                                                                                <a href="{{ route('product_list_category', $child->CategoryID) }}">{{ $child->CategoryName }}</a>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div><!-- Megamenu Box Wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- Megamenu Inner -->
                                        </div>
                                    </div><!-- Megamenu Wrap -->
                                </li>

                                <li class="{{ request()->is('blogs')|| request()->is('blogs_detail/*') ? 'active_head' : '' }}"><a href="{{ route('blogs') }}"
                                        title="">Blogs</a>
                                </li>
                                <li class="{{ request()->is('contacts') ? 'active_head' : '' }}"><a href="{{ route('contacts') }}"
                                        title="">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li>
                                <form class="searchform position-relative" action="{{ route('search.products') }}" method="GET">
                                    <button type="submit"><i class="fi fi-rr-search"></i></button>
                                    <input type="search" name="search" placeholder="Search" value="{{ request()->input('search') }}">
                                </form>
                            </li>
                            {{-- <li>
                                <a class="cart-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-shopping-bag"></i></a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Logo Menu Wrap -->
    </header><!-- Header ok -->
    <div class="sticky-header w-100">
        <div class="container">
            <div class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <div class="logo-menu-inner-left d-flex flex-wrap align-items-center">
                    <div class="logo">
                        @foreach ($apparences as $apparence)
                            <h1 class="mb-0"><a href="{{ $apparence->NavigationLinks }}" title="Home"><img
                                        src="{{ asset($apparence->LogoURL) }}" alt="Logo"></a></h1>
                        @endforeach
                    </div><!-- Logo -->
                </div>
                <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                    <nav>
                        <ul>
                            <li class=" megamenu-item"><a href="{{ route('home') }}" title="">Home</a>
                            <li
                                class="menu-item-has-children megamenu-item {{ request()->is('products/product_list') ? 'active_head' : '' }}">
                                <a href="{{ route('product.all') }}" title="">Products</a>
                                <div class="megamenu-wrap position-absolute w-100">
                                    <div class="container">
                                        <div class="megamenu-inner position-relative w-100">
                                            <div class="row mrg30">
                                                @foreach ($categories as $category)
                                                    <div class="col">
                                                        <div class="megamenu-item w-100">

                                                            <h4><a href="{{ route('product_list_category', $category->CategoryID) }}">{{ $category->CategoryName }}</a>
                                                            </h4>
                                                            <ul class="list-unstyled mb-0 w-100">
                                                                <li>
                                                                    <ul class="list-unstyled">
                                                                        @foreach ($category->children as $child)
                                                                            <li>
                                                                                <a href="{{ route('product_list_category', $child->CategoryID) }}"
                                                                                    title="">{{ $child->CategoryName }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div><!-- Megamenu Inner -->
                                    </div>
                                </div><!-- Megamenu Wrap -->
                            </li>
                            <li class="{{ request()->is('blogs') || request()->is('blogs_detail/*') ? 'active_head' : '' }}"><a href="{{ route('blogs') }}"
                                    title="">Blogs</a>
                            </li>
                            <li class="{{ request()->is('contacts') ? 'active_head' : '' }}" megamenu-item"><a
                                    href="{{ route('contacts') }}" title="">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                        <li>
                            <form class="searchform position-relative" action="{{ route('search.products') }}" method="GET">
                                <button type="submit"><i class="fi fi-rr-search"></i></button>
                                <input type="search" name="search" placeholder="Search" value="{{ request()->input('search') }}">
                            </form>
                        </li>
                        {{-- <li>
                            <a class="cart-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-shopping-bag"></i></a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- Sticky Header ok -->

    <div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
        <span class="search-close-btn d-inline-flex flex-wrap justify-content-center align-items-center"><i
                class="fi fi-rr-cross-small"></i></span>
        <form action="{{ route('search.products') }}" method="GET">
            <button type="submit"><i class="fi fi-rr-search"></i></button>
            <input type="search" name="search" placeholder="Search" value="{{ request()->input('search') }}">
        </form>
    </div><!-- Header Search -->
    <div class="responsive-header position-relative w-100">
        <div class="responsive-topbar w-100">
            <div class="container">
                <div class="responsive-topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo">
                        @foreach ($apparences as $apparence)
                            <h1 class="mb-0"><a href="{{ $apparence->NavigationLinks }}" title="Home"><img
                                        src="{{ asset($apparence->LogoURL) }}" alt="Logo"></a></h1>
                        @endforeach

                    </div><!-- Logo -->
                    <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-center">
                        <form class="searchform position-relative" action="{{ route('search.products') }}" method="GET">
                            <button type="submit"><i class="fi fi-rr-search"></i></button>
                            <input type="search" name="search" placeholder="Search" value="{{ request()->input('search') }}">
                        </form>
                    </div>
                    <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li>
                                <a class="responsive-menu-trigger d-inline-block" href="javascript:void(0);"
                                    title=""><i class="fi fi-rr-align-justify"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Responsive Topbar -->
    </div><!-- Responsive Header -->
    <div class="responsive-menu w-100">
        <a class="responsive-menu-close position-absolute" href="javascript:void(0);" title=""><i
                class="fi fi-rr-cross-small"></i></a>
        <ul class="mb-0 list-unstyled w-100">
            <li class=""><a href="{{ route('home') }}" title="">Home</a>
            </li>
            <li class=""><a href="{{ route('product.all') }}" title="">All Product</a>

            @foreach ($categories as $category)
                <li class="menu-item-has-children"><a href="{{ route('product_list_category', $category->CategoryID) }}"
                        title="">{{ $category->CategoryName }}</a>
                    @foreach ($category->children as $child)
                        <ul class="children mb-0 list-unstyled w-100">
                            <li>
                                <a href="{{ route('product_list_category', $child->CategoryID) }}" title="">{{ $child->CategoryName }}</a>
                            </li>
                        </ul>
                    @endforeach
                </li>
            @endforeach
            <li class="{{ request()->is('blogs')|| request()->is('blogs_detail/*') ? 'active_head' : '' }}"><a href="{{ route('blogs') }}" title="">Blogs</a>

            </li>
            <li class="{{ request()->is('contacts') ? 'active_head' : '' }}"><a href="{{ route('contacts') }}" title="">Contact</a>

            </li>

            <li><a href="{{ route('login') }}" title="">Sign In</a></li>
        </ul>
    </div><!-- Responsive Menu -->
</body>

</html>
