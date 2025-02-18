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
                <img class="" id="logo_header" alt="" src="assets/images/logo.svg" data-light="images/logo/logo.png" data-dark="images/logo/logo-dark.png" >
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
                        <li class="menu-item ">
                            <a href="gallery.html" class="">
                                <div class="icon"><i class="icon-grid"></i></div>
                                <div class="text">Dashboard</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="center-item">
                    <div class="center-heading">Manager</div>
                    <ul class="menu-list">
                        <li class="menu-item has-children">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-file-plus"></i></div>
                                <div class="text">Order</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="oder-list.html" class="">
                                        <div class="text">Order list</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="oder-detail.html" class="">
                                        <div class="text">Unfinnish Order </div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="oder-tracking.html" class="">
                                        <div class="text">Manager COD</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="oder-tracking.html" class="">
                                        <div class="text">Delive</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item has-children">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-shopping-cart"></i></div>
                                <div class="text">Products</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="{{ asset('products/product_list') }}" class="">
                                        <div class="text">Product List</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="product-list.html" class="">
                                        <div class="text">Category List</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="product-detail-1.html" class="">
                                        <div class="text">Inventory Managrment</div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item ">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-user"></i></div>
                                <div class="text">User</div>
                            </a>

                        </li>
                        <li class="menu-item has-children">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-layers"></i></div>
                                <div class="text">Category</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="category-list.html" class="">
                                        <div class="text">Category list</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="new-category.html" class="">
                                        <div class="text">New category</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item has-children">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-box"></i></div>
                                <div class="text">Attributes</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="attributes.html" class="">
                                        <div class="text">Attributes</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="add-attributes.html" class="">
                                        <div class="text">Add attributes</div>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="menu-item has-children">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-user-plus"></i></div>
                                <div class="text">Roles</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="all-roles.html" class="">
                                        <div class="text">All roles</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="create-role.html" class="">
                                        <div class="text">Create role</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="report.html" class="">
                                <div class="icon"><i class="icon-pie-chart"></i></div>
                                <div class="text">Report</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="center-item">
                    <div class="center-heading">Setting</div>
                    <ul class="menu-list">
                        <li class="menu-item has-children">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-edit"></i></div>
                                <div class="text">Quản lý cấu hình</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="all-roles.html" class="">
                                        <div class="text">Cấu hình chung</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="create-role.html" class="">
                                        <div class="text">Cấu hình vị trí</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="all-roles.html" class="">
                                        <div class="text">Thông báo</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="create-role.html" class="">
                                        <div class="text">Cấu hình phí vận chuyển</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="all-roles.html" class="">
                                        <div class="text">Phương thức thanh toán</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="create-role.html" class="">
                                        <div class="text">Cấu hình tên miền</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="create-role.html" class="">
                                        <div class="text">Tài khoản</div>
                                    </a>
                                </li>
                            </ul>

                        </li>

                    </ul>
                </div>
              <div class="center-item">
                    <div class="center-heading">Components</div>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="components.html" class="">
                                <div class="icon"><i class="icon-database"></i></div>
                                <div class="text">Components</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="center-item">
                    <div class="center-heading">Support</div>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="#" class="">
                                <div class="icon"><i class="icon-help-circle"></i></div>
                                <div class="text">Help center</div>
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
