<?php
$title_;
?>

<!DOCTYPE html>
<html>

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <title>Admin Manager</title>

    <link href="css/application.min.css" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      https://code.google.com/p/chromium/issues/detail?id=332189
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        */
    </script>

    <style>
        #account-info::before , #menu-design-page::before {
            content: "";
        }

        th,td{
            text-align: <center>;</center>
        }

        a{
            text-decoration: none; 
            color: #fff;
        }
        option {
            background-color: #4E5451;
            border: none;
        }
        
        #cke_1_bottom,
        #cke_1_top,
        #cke_2_top,
        #cke_2_bottom {
            background-color: #9BA893;
        }
        
        .cke_editable {
            background-color: #F3F3F3;
        }
        
        .inline-group {
            display: inline-flex;
        }
    </style>
    
</head>

<body class="background-dark">
    <div class="logo" style="display: inline-flex; width: auto;">
        <h4><a href="index.php?user=<?php $_SESSION['username']; ?>">Light <strong>Blue</strong></a></h4>
        <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu" style="margin-left: 20px;">
            <i class="fa fa-reorder" style="align-items: center; display: flex; margin: 5px;"></i>
        </a>
        <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen">
            <i class="fa fa-arrows-alt" style="align-items: center; display: flex; margin: 5px;"></i>
        </a>
    </div>
    <nav id="sidebar" class="sidebar nav-collapse collapse">
        <ul id="side-nav" class="side-nav">
            <li class="active">
                <a href="index.php"><i class="fa fa-dashboard"></i> <span class="name">Tổng quan</span></a>
            </li>
            <li class="panel ">
                <a id="account-info" class="accordion-toggle collapsed" href="index.php?com=user&act=man"><i class="fa fa-leaf"></i> <span class="name">Quản lý tài khoản</span></a>
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#product-collapse"><i class="fa fa-pencil"></i> <span class="name">Sản phẩm</span></a>
                <ul id="product-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="index.php?com=sanpham&act=man">Sản phẩm</a></li>
                    <li class=""><a href="index.php?com=danhmucsanpham&act=man">Danh mục sản phẩm</a></li>
                    <li class=""><a href="index.php?com=tonkho&act=man">Tồn kho</a></li>
                </ul>
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#news-collapse"><i class="fa fa-newspaper-o"></i><i class="far fa-newspaper"></i> <span class="name">Tin tức</span></a>
                <ul id="news-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="index.php?com=tintuc&act=add">Thêm mới tin tức</a></li>
                    <li class=""><a href="index.php?com=tintuc&act=man">Danh sách tin tức</a></li>
                    <li class=""><a href="index.php?com=nhomtintuc&act=man">Nhóm tin tức</a></li>
                </ul>
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#order-collapse"><i class="fa fa-pencil-square-o"></i> <span class="name">Đơn hàng</span></a>
                <ul id="order-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="index.php?com=donhang&act=man">Đơn hàng</a></li>
                    <li class=""><a href="index.php?com=vanchuyendonhang&act=man">Vận chuyển</a></li>
                    <li class=""><a href="index.php?com=donhangnhap&act=man">Đơn hàng nháp</a></li>
                </ul>
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#customer-collapse"><i class="fa fa-users"></i> <span class="name">Khách hàng</span></a>
                <ul id="customer-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="index.php?com=khachhang&act=man">Danh sách khách hàng</a></li>
                    <li class=""><a href="index.php?com=lienhekhachhang&act=man" data-no-pjax>Liên hệ từ khách hàng</a></li>
                    <li class=""><a href="index.php?com=danhsachemaildangky&act=man">Danh sách Email đăng ký</a></li>
                </ul>
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#content-collapse"><i class="fa fa-file-text-o"></i> <span class="name">Nội dung</span></a>
                <ul id="content-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="tables_static.html">Giới thiệu <sup class="text-danger fw-bold">upd</sup></a></li>
                    <li class=""><a href="tables_dynamic.html">Quảng cáo</a></li>
                    <li class=""><a href="tables_dynamic.html">Đối tác</a></li>
                    <li class=""><a href="tables_dynamic.html">Hỗ trợ trực tuyến</a></li>
                </ul>
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#website-collapse"><i class="fa fa-fw fa-list-alt"></i> <span class="name">Website</span></a>
                <ul id="website-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="grid_basic.html">Quản lý mẫu giao diện</a></li>
                    <li class=""><a href="grid_live.html">Quản lý menu</a></li>
                    <li class=""><a href="grid_live.html">Slideshow ảnh</a></li>
                    <li class=""><a href="grid_live.html">Thiết lập Banner</a></li>
                    <li class=""><a href="grid_live.html">Thiết lập hình nền</a></li>
                    <li class=""><a href="grid_live.html">Chỉnh sửa CSS</a></li>
                    <li class=""><a href="grid_live.html">Trang nội dung</a></li>
                    <li class=""><a href="grid_live.html">Trang hệ thống</a></li>
                </ul>
            </li>
            <li class="panel ">
                <a id="menu-design-page" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#special-collapse"><i class="fa fa-leaf"></i> <span class="name">Thiết kế trang</span></a>
                <!-- <ul id="special-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="special_search.html">Search <sup class="text-warning fw-bold">new</sup></a></li>
                    <li class=""><a href="special_invoice.html">Invoice</a></li>
                    <li class=""><a href="special_inbox.html">Inbox &nbsp; <span class="label label-important">3</span></a></li>
                    <li><a target="_blank" href="login.html">Login</a></li>
                    <li><a target="_blank" href="error.html">Error Page</a></li>
                    <li><a href="landing.html" data-no-pjax>Landing</a></li>
                    <li><a href="http://demo.flatlogic.com/3.1/white/index.html" data-no-pjax>White <sup class="text-warning fw-bold">new</sup></a></li>
                </ul> -->
            </li>
            <li class="panel">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#config-collapse"><i class="fa fa-cog"></i> <span class="name">Cấu hình</span></a>
                <ul id="config-collapse" class="panel-collapse collapse">
                    <!-- <li><a href="#">Item 1.1</a></li>
                    <li><a href="#">Item 1.2</a></li>
                    <li class="panel">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
                        <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
                            <li class="panel">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#sub-menu-1-collapse" href="#sub-menu-3-collapse">Item 2.1</a>
                                <ul id="sub-menu-3-collapse" class="panel-collapse collapse">
                                    <li><a href="#">Item 3.1</a></li>
                                    <li><a href="#">Item 3.2</a></li>
                                    <li><a href="#">Item 3.3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Item 2.2</a></li>
                            <li class="panel">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#sub-menu-1-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                                <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                                    <li><a href="#">Item 3.4</a></li>
                                    <li><a href="#">Item 3.5</a></li>
                                    <li><a href="#">Item 3.6</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <li class=""><a href="grid_basic.html">Cấu hình website</a></li>
                    <li class=""><a href="grid_basic.html">Cấu hình chung</a></li>
                    <li class=""><a href="grid_basic.html">Cấu hình sản phẩm</a></li>
                    <li class=""><a href="grid_basic.html">Cấu hình tin tức</a></li>
                    <li class=""><a href="grid_basic.html">Bản đồ</a></li>
                    <li class=""><a href="grid_basic.html">Tên miền riêng</a></li>
                    <li class=""><a href="grid_basic.html">Thanh toán</a></li>
                    <li class=""><a href="grid_basic.html">Vận chuyển</a></li>
                </ul>
            </li>
            <li class="visible-xs">
                <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
            </li>
        </ul>

        <h5 class="sidebar-nav-title">Projects</h5>
        <!-- A place for sidebar notifications & alerts -->
        <div class="sidebar-alerts">
            <div class="alert fade in">
                <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                <span class="text-white fw-semi-bold">Sales Report</span> <br>
                <div class="progress progress-xs mt-xs mb-0">
                    <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
                </div>
                <small>Calculating x-axis bias... 65%</small>
            </div>
            <div class="alert fade in">
                <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
                <div class="progress progress-xs mt-xs mb-0">
                    <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
                </div>
                <small>Provide required notes</small>
            </div>
        </div>
    </nav>