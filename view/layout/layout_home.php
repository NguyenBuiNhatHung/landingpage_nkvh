<?php session_start();?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../asset/fonts/icomoon/style.css">

<link rel="stylesheet" href="../../asset/css/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<?php require "../../asset/css/style.php"; ?>

<style>
    .hd-icon{
        font-size: 1.7rem;
    }
    .hd-titile{
        font-size: 16px;
    }
    #nk-menu-text{
        align-items: center;
    }
    #nk-logo{
        height: 60px;
    }
    #nk-menu{
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #17346b;
    }
    @media (max-width: 576px) {
        #nk-logo{
            height: 45px;
        }
    }
</style>
<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex mr-auto">
                            <a href="#" class="d-flex align-items-center mr-4">
                                <span class="hd-icon icon-envelope mr-2"></span>
                                <span class="hd-titile d-none d-lg-inline-block">booking@nhakhoaviethan.vn</span>
                            </a>
                            <a href="#" class="d-flex align-items-center mr-auto">
                                <span class="hd-icon icon-phone mr-2"></span>
                                <span class="hd-titile d-none d-lg-inline-block">+84 787 505 577</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto">
                            <a href="https://www.youtube.com/channel/UCQyVTyBNw_IhF2Dnmpd33NA" class="hd-icon p-2 pl-0"><span class="icon-youtube"></span></a>
                            <a href="https://www.facebook.com/NhakhoaVietHanNhaTrangKhanhHoa/" class="hd-icon p-2 pl-0"><span class="icon-facebook"></span></a>
                            <!-- <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a> -->
                            <!-- <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="nk-menu" class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2">
                        <a href="../../index.php"><img id="nk-logo" src="../../asset/images/logo.jpg" alt=""></a>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                                <ul id="nk-menu-text" class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="active"><a href="#gioithieu1" class="nav-link">Giới thiệu</a></li>
                                    <li><a href="#bacsi" class="nav-link">Bác sĩ</a></li>
                                    <!-- <li class="has-children">
                                        <a href="#" class="nav-link">Răng sứ</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="#" class="nav-link">Team</a></li>
                                            <li><a href="#" class="nav-link">Pricing</a></li>
                                            <li><a href="#" class="nav-link">FAQ</a></li>
                                            <li class="has-children">
                                                <a href="#">More Links</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Menu </a></li>
                                                    <li><a href="#">Menu Two</a></li>
                                                    <li><a href="#">Menu Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li><a href="#rangsu" class="nav-link">Răng sứ</a></li>
                                    <li><a href="#implant" class="nav-link">Implant</a></li>
                                    <li><a href="#dathen" class="nav-link">Đặt hẹn</a></li>
                                    <li><a href="#khachhang" class="nav-link">Khách hàng</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-md-block" style="height:140px"></div>
    <div class="d-block d-md-none"  style="height:120px"></div>
    <script src="../../asset/js/jquery-3.3.1.min.js"></script>
    <script src="../../asset/js/popper.min.js"></script>
    <script src="../../asset/js/bootstrap.min.js"></script>
    <script src="../../asset/js/jquery.sticky.js"></script>
    <script src="../../asset/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> 
    <script> 
    new WOW().init(); 
    </script>
</body>