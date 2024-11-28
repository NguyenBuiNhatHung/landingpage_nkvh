<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <title>Contact Header</title>
    <?php require "../asset/css/style.php"; ?> <!-- import file css -->
</head>
<body>

    <!-- Biểu tượng loading -->
    <div class="loading-icon">
        <i class='bx bx-donate-heart'></i> <!-- Icon loading -->
    </div>

    <!-- thanh menu -->
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar sticky-top">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#">
                <img src="../asset/images/logo.png" alt="Medico Center" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Ưu đãi</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Dịch vụ</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Đặt hẹn</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Khách hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- hết thanh menu -->

    <!-- home -->
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="carousel-caption">
                <h3>Diagnosis</h3>
                <p>Personal care for your healthy living</p>
                <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>
        <div class="item">
            <div class="carousel-caption">
                <h3>Wellness</h3>
                <p>Your health is our priority</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
        <div class="item">
            <div class="carousel-caption">
                <h3>Care</h3>
                <p>Exceptional care for exceptional people</p>
                <a href="#" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- hết home -->




    <?php require "../asset/js/home.php"; ?><!-- import file javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>