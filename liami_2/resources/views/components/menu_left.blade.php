<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- section-menu-left -->
    <div class="section-menu-left">
        <div class="box-logo">
            <a href="index.html" id="site-logo-inner">
                <img class="" id="logo_header" alt="" src="{{ asset('assets/images/logo.svg') }}"
                    data-light="images/logo/logo.png" data-dark="images/logo/logo-dark.png">
            </a>
            <div class="button-show-hide">
                <i class="icon-menu-left"></i>
            </div>
        </div>
        <div class="section-menu-left-wrap">
            <div class="center">
                <div class="center-item">
                    <div class="center-heading">Main Home</div>
                    <ul class="menu-list">
                        <li class="menu-item {{ request()->is('admin') ? 'active' : '' }}">
                            <a href="{{ route('managers.manager') }}" class="">
                                <div class="icon"><i class="icon-grid"></i></div>
                                <div class="text">Dashboard</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="center-item">
                    <div class="center-heading">Manager</div>
                    <ul class="menu-list">
                        <li
                            class="menu-item {{ request()->is('managers/m_product/manager_product') || request()->is('managers/m_product*') || request()->is('managers/m_product/update_product') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_product.manager_product') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-shopping-cart"></i></div>
                                <div class="text">Products</div>
                            </a><!-- Menu item content -->
                        </li>


                        </li>
                        <li
                            class="menu-item {{ request()->is('managers/m_category/manager_category') || request()->is('managers/m_category*') || request()->is('managers/m_category/update_category') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_category.manager_category') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-layers"></i></div>
                                <div class="text">Category</div>
                            </a>

                        </li>
                        <li
                            class="menu-item {{ request()->is('managers/m_blog/manager_blog') || request()->is('managers/m_blog*') || request()->is('managers/m_blog/update_blog') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_blog.manager_blog') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-file-plus"></i></div>
                                <div class="text">Blog</div>
                            </a>

                        </li>

                        <li
                            class="menu-item {{ request()->is('managers/m_user/manager_user') || request()->is('managers/m_user*') || request()->is('managers/m_user/update_user') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_user.manager_user') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-user"></i></div>
                                <div class="text">User</div>
                            </a>

                        </li>
                        <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
                            <a href="report.html" class="">
                                <div class="icon"><i class="icon-pie-chart"></i></div>
                                <div class="text">Report</div>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
    <!-- /section-menu-left -->

</body>

</html>
