<!DOCTYPE html>
<html lang="en">
<?php require "../css/style.php"; ?>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/logo1.jpg" type="image/x-icon">
    <title>Nha Khoa Việt Hàn - Nha Trang 5 Sao Đạt Chuẩn Uy Tín Nha Trang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Đang tải...</span>
        </div>
    </div>
    <?php require "popup.php"; ?>

    <?php require "dadat.php"; ?>

    <?php require "hotro.php"; ?>

    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <?php require "menu.php"; ?>

    <?php require "banner.php"; ?>

    <!-- Giá trị cốt lõi -->
    <?php require "dichvucs.php"; ?>
    
    <div id="rangsu">
        <img class="w-100 wow fadeInLeft" src="../img/rang-su.jpg" alt="">
    </div>

    <div>
        <img class="w-100 wow fadeInLeft" src="../img/quytrinh.jpg" alt="">
    </div>

    <div id="implant">
        <img class="w-100 wow fadeInRight" src="../img/implant.jpg" alt="">
    </div>

    <div>
        <img class="w-100 wow fadeInRight" src="../img/implant2.jpg" alt="">
    </div>

    <?php require "khachhang.php"; ?>
    
    <?php require "cotloi.php"; ?>
   
    <?php require "taisao.php"; ?>

    
    <div>
        <img class="w-100 wow fadeInRight" src="../img/trongoi.jpg" alt="">
    </div>
    <!-- Book Appointment Start -->
    
    <?php require "dathen.php"; ?>

    <div>
        <img class="w-100 wow fadeInLeft" src="../img/experience.jpg" alt="">
    </div>
    <!-- Book Appointment End -->
    <!-- Modal Video Youtube 3 rows -->

    <!-- Testimonial Start -->
    
    <?php require "nucuoi.php"; ?>

    <?php require "vechungtoi.php"; ?>

    <div>
        <img class="w-100 wow fadeInRight" src="../img/full_month_restoration_cost.jpg" alt="">
    </div>

    <?php require "bayve.php"; ?>
    <!-- Footer Start -->
    
    <?php require "footer.php"; ?>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <!-- <script src="js/main.js"></script> -->
    <?php require "../js/main.php"; ?>
</body>

</html>