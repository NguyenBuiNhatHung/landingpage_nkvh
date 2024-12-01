<!DOCTYPE html>
<html lang="en">
<?php require "css/style.php"; ?>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo1.jpg" type="image/x-icon">
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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <button id="myBtn" class="d-none">Open Popup</button>
    <div id="myPopup" class="popup col-12">
        <div class="popup-content col-10 col-md-5" style="background-image: url('img/popup.jpg')"> <span
                class="close">&times;</span>
            <h2><span class="yellow">SCHEDULE</span> A FREE <br> X-RAY AND DENTAL CHECK-UP</h2>
            <form class="form-container" method="POST" action="process.php"> <input type="text" name="name"
                    placeholder="Your Name" required> <input type="text" name="phone" placeholder="Phone number"
                    required> <input type="email" name="email" placeholder="Your Email" required> <input type="text"
                    name="country" placeholder="Your Current Country" required> <select name="app" required>
                    <option value="" disabled selected>Your Available App</option>
                    <option style="color:black" value="WhatsApp">WhatsApp</option>
                    <option style="color:black" value="Viber">Viber</option>
                    <option style="color:black" value="Skype">Skype</option>
                    <option style="color:black" value="Zoom">Zoom</option>
                    <option style="color:black" value="Teams">Teams</option>
                </select> <button type="submit">REGISTER NOW</button> </form>
        </div>
    </div>
    <script>
        var popup = document.getElementById("myPopup");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            popup.style.display = "block";
        }
        span.onclick = function() {
            popup.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
        window.onload = function() {
            popup.style.display = "block";
        }
    </script>
    <div class="elementor-widget-container">
        <div class="hotline-phone-ring-wrap">
            <div class="hotline-phone-ring">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div>
                <div class="hotline-phone-ring-img-circle">
                    <a href="tel:0787505577" class="pps-btn-img">
                        <img src="img/icon_call.jpg" alt="Gọi điện thoại" width="50">
                    </a>
                </div>
            </div>

        </div>


        <div class="hotline-face-ring-wrap">
            <div class="hotline-phone-ring">
                <div class="hotline-face-ring-circle"></div>
                <div class="hotline-face-ring-circle-fill"></div>
                <div class="hotline-face-ring-img-circle">
                    <a href="https://www.facebook.com/NhakhoaVietHanNhaTrangKhanhHoa" class="pps-btn-img">
                        <img src="img/icon_messenger.jpg" alt="Chat Messenger" width="50">

                    </a>
                </div>
            </div>

        </div>

        <div class="hotline-zalo-ring-wrap">
            <div class="hotline-phone-ring">
                <div class="hotline-zalo-ring-circle"></div>
                <div class="hotline-zalo-ring-circle-fill"></div>
                <div class="hotline-zalo-ring-img-circle">
                    <a href="https://zalo.me/1797913117798518130" class="pps-btn-img">
                        <img src="img/icon_zalo.jpg" alt="Chat Zalo" width="50">
                    </a>
                </div>
            </div>

        </div>

    </div>

    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav style="background: linear-gradient(to right, #add8e6, white, #add8e6);"
            class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <img src="img/logo.jpg" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#gioithieu" class="nav-item nav-link active">GIỚI THIỆU</a>
                    <a href="#bacsi" class="nav-item nav-link">BÁC SĨ</a>
                    <a href="#rangsu" class="nav-item nav-link">RĂNG SỨ</a>
                    <a href="#implant" class="nav-item nav-link">IMPLANT</a>
                    <a href="#dathen" class="nav-item nav-link">ĐẶT HẸN</a>
                    <a href="#khachhang" class="nav-item nav-link">KHÁCH HÀNG</a>
                </div>
            </div>
        </nav>
    </div>


    <div id="gioithieu">
        <img class="w-100 wow fadeInRight" src="img/carousel-4.jpg" alt="">
    </div>

    <!-- Giá trị cốt lõi -->
    <div style="background:linear-gradient(to right, #add8e6, white, #add8e6);" class="pb-5 fadeInUp pt-3">
        <div id="dk"
            class="col-9 col-md-5 row justify-content-center wow fadeInLeft mx-auto d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-auto mb-2 text-center">
                <button style="font-family: Arial, Helvetica, sans-serif;"
                    class="btn btn-primary btn-lg fadeInUp button-submit">ĐĂNG
                    KÝ NHẬN ƯU ĐÃI NGAY</button>
            </div>
            <div class="col-12 col-md-auto text-center">
                <p class="h5 fadeInUp">Thời gian ưu đãi có hạn</p>
                <div class="d-flex flex-row justify-content-center fadeInUp time-line">
                    <div class="p-2 border rounded">00</div>
                    <div class="p-2 border rounded">07</div>
                    <div class="p-2 border rounded">34</div>
                    <div class="p-2 border rounded">09</div>
                </div>
            </div>
        </div>
        <h3 style="font-family: Arial, Helvetica, sans-serif;" class="col-12 text-center pt-3 pt-md-5 "><b
                class="font-size-3"> 5 GIÁ TRỊ CỐT LÕI TẠI NHA KHOA VIỆT HÀN</b></h3>
        <div style="font-family: Arial, Helvetica, sans-serif;"
            class="col-11 d-flex d-inline-block justify-content-between p-1 text-center mx-auto">
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Chuyên môn hàng đầu</h5>
                <p style="text-align: justify;">Chúng tôi tự hào vì 100% bác sĩ tại Nha Khoa Việt Hàn đều là những
                    chuyên gia chính quy chuyên khoa Răng
                    Hàm Mặt. Điều này đảm bảo rằng mỗi dịch vụ chúng tôi cung cấp đều đạt tiêu chuẩn y tế cao nhất, mang
                    lạiD
                    sự an tâm cho khách hàng.</p>
            </div>
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Sức khỏe bệnh nhân là ưu tiên tuyệt đối</h5>
                <p style="text-align: justify;">Chúng tôi luôn đặt sức khỏe và sự an toàn của bệnh nhân lên hàng đầu.
                    Mọi quyết định, mọi hành động đều
                    hướng tới việc mang lại giải pháp điều trị tốt nhất cho khách hàng.</p>
            </div>
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Tận tâm và trung thực</h5>
                <p style="text-align: justify;">Chúng tôi cam kết phục vụ khách hàng với sự chân thành, minh bạch. Chăm
                    sóc khách hàng như chính người
                    thân trong gia đình mình.</p>
            </div>
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Luôn đổi mới và phát triển</h5>
                <p style="text-align: justify;">Chúng tôi không ngừng học hỏi, cải tiến trang thiết bị và công nghệ.
                    Nâng cao năng lực bản thân để đáp
                    ứng nhu cầu ngày càng cao của khách hàng và thị trường.</p>
            </div>
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Đề cao trách nhiệm xã hội </h5>
                <p style="text-align: justify;">
                    Chúng tôi tự hào khi được đóng góp tích cực vào cộng đồng và xã hội. Bằng việc thực hiện các hoạt
                    động
                    thiện nguyện, chia sẻ yêu thương với những hoàn cảnh khó khăn.
                </p>
            </div>
        </div>
    </div>
    <!--Hết giá trị cốt lõi -->
    <!-- cam kết -->
    <div style="background-color:rgb(0, 166, 218);" class="pb-5 fadeInUp pt-1 wow fadeInRight col-12">
        <h3 style="font-family: Arial, Helvetica, sans-serif;font-size: 2.5rem; color:white;"
            class="col-12 text-center pt-3 pt-md-5"> <b class="wow fadeInLeft">CAM KẾT CỦA CHÚNG TÔI VỚI KHÁCH HÀNG</b>
        </h3>
        <div class="container">
            <div class="row justify-content-around wow fadeInRight">
                <div class="col-md-5 col-10 mt-5"> <img src="img/ck1.jpg" class="img-fluid" alt="Ảnh Cam Kết 1"> </div>
                <div class="col-md-5 col-10 mt-5"> <img src="img/ck2.jpg" class="img-fluid" alt="Ảnh Cam Kết 2"> </div>
            </div>
            <div class="row justify-content-around wow fadeInRight">
                <div class="col-md-5 col-10 mt-5"> <img src="img/ck3.jpg" class="img-fluid" alt="Ảnh Cam Kết 3"> </div>
                <div class="col-md-5 col-10 mt-5"> <img src="img/ck4.jpg" class="img-fluid" alt="Ảnh Cam Kết 4"> </div>
            </div>
        </div>
    </div>
    <!-- hết cam kết -->

    <div class="m-2">
        <h2 style="color: #0072C6; text-align: center;font-weight: bold; margin-top: 10px;font-family: Arial, Helvetica, sans-serif;"
            class="wow fadeInLeft">
            DỊCH VỤ NHA KHOA CHUYÊN SÂU</h2>
        <div class="owl-carousel owl-dv wow fadeInRight">
            <div class="item"><img width="100%" height="315" src="img/dv1.jpg"></div>
            <div class="item"><img width="100%" height="315" src="img/dv2.jpg"></div>
            <div class="item"><img width="100%" height="315" src="img/dv3.jpg"></div>
            <div class="item"><img width="100%" height="315" src="img/dv4.jpg"></div>
        </div>
    </div>

    <!-- Team Start -->


    <div id="rangsu">
        <img class="w-100 wow fadeInLeft" src="img/rang-su.jpg" alt="">
    </div>
    <div>
        <img class="w-100 wow fadeInRight" src="img/banggia.jpg" alt="">
    </div>

    <div>
        <img class="w-100 wow fadeInLeft" src="img/quytrinh.jpg" alt="">
    </div>

    <div id="implant">
        <img class="w-100 wow fadeInRight" src="img/implant.jpg" alt="">
    </div>

    <div>
        <img class="w-100 wow fadeInLeft" src="img/khuyenmai.jpg" alt="">
    </div>
    <div>
        <img class="w-100 wow fadeInRight" src="img/implant2.jpg" alt="">
    </div>

    <!-- Team End -->
    <div id="bacsi" class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 fadeInUp">
                <h5 class="display-6 mb-4">ĐỘI NGŨ BÁC SĨ CHUYÊN SÂU</h5>
            </div>
            <div class="owl-carousel owl-bs">
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs1.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5 class="team-title">Bác sĩ: Khổng Văn Quân</h5>
                            <p class="team-description mb-0">Tốt nghiệp Chuyên khoa RHM Đại học Y dược TP. Hồ Chí Minh
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs2.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5 class="team-title">Bác sĩ: Khổng Văn Quân</h5>
                            <p class="team-description mb-0">Tốt nghiệp Chuyên khoa RHM Đại học Y dược TP. Hồ Chí Minh
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs3.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5 class="team-title">Bác sĩ: Khổng Văn Quân</h5>
                            <p class="team-description mb-0">Tốt nghiệp Chuyên khoa RHM Đại học Y dược TP. Hồ Chí Minh
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs4.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5 class="team-title">Bác sĩ: Khổng Văn Quân</h5>
                            <p class="team-description mb-0">Tốt nghiệp Chuyên khoa RHM Đại học Y dược TP. Hồ Chí Minh
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs5.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5 class="team-title">Bác sĩ: Khổng Văn Quân</h5>
                            <p class="team-description mb-0">Tốt nghiệp Chuyên khoa RHM Đại học Y dược TP. Hồ Chí Minh
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs6.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5 class="team-title">Bác sĩ: Khổng Văn Quân</h5>
                            <p class="team-description mb-0">Tốt nghiệp Chuyên khoa RHM Đại học Y dược TP. Hồ Chí Minh
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Book Appointment Start -->
    <div id="dathen" style="background: linear-gradient(135deg,#00AEEF, #0072C6 );"
        class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                    <div style="color: white;" class="section-title text-start">
                        <h2 style="color: rgb(241, 238, 15);font-family: Arial, Helvetica, sans-serif;"
                            class="pe-3 mb-0 display-4 wow fadeInLeft">OUR COMMITMENT</h2>
                        <h6 style="color: white; font-family: Arial, Helvetica, sans-serif;"
                            class="display-6 mb-4 wow fadeInLeft">ALL
                            OUR EFFORTS ARE FOR THE CUSTOMER
                            SATISFACTION</h6>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <div style="background-color: white; border-radius: 15px; padding: 15%; color: rgb(33, 108, 221); height: 40%;"
                                        class="mb-4 d-flex d-inline-block">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                        </h5>
                                        <p style="font-family: Arial, Helvetica, sans-serif" class="mb-0">Commitment to
                                            100% genuine embryo porcelain teeth.</p>
                                    </div>
                                    <div style="background-color: white; border-radius: 15px; padding: 15%; color: rgb(33, 108, 221);height: 40%;"
                                        class="mb-4 d-flex d-inline-block">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                        </h5>
                                        <p style="font-family: Arial, Helvetica, sans-serif;" class="mb-0">Commitment
                                            not to grind teeth too small, to protect teeth ass
                                            much as possible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <div style="background-color: white; border-radius: 15px; padding: 15%; color: rgb(33, 108, 221);height: 40%;"
                                        class="mb-4 d-flex d-inline-block">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                        </h5>
                                        <p style="font-family: Arial, Helvetica, sans-serif;" class="mb-0">Commitment to
                                            not incur additional costs.</p>
                                    </div>
                                    <div style="background-color: white; border-radius: 15px; padding: 15%; color: rgb(33, 108, 221);height: 40%;"
                                        class="mb-4 d-flex d-inline-block">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                        </h5>
                                        <p style="font-family: Arial, Helvetica, sans-serif;" class="mb-0">One-for-one
                                            warranty when teeth are cracked, broken, or chipped.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center align-items-center col-12 col-md-6 mx-auto my-auto countdown-timer"
                                style="background-color: white; border-radius: 10px; padding: 20px;">
                                <h3 style="font-family: Arial, Helvetica, sans-serif; color:red;">CHỈ CÒN 30 SUẤT ƯU ĐÃI
                                    CUỐI CÙNG</h3>
                                <p style="color:green;">Thời hạn đăng ký chỉ còn</p>
                                <div class="d-flex flex-row justify-content-around flex-wrap fadeInUp countdown-container"
                                    style="color: green; font-weight: bold;">
                                    <div id="countdown" class="countdown-container">
                                        <div id="days" class="countdown-item">00<br><span>Ngày</span></div>
                                        <div id="hours" class="countdown-item">00<br><span>Giờ</span></div>
                                        <div id="minutes" class="countdown-item">00<br><span>Phút</span></div>
                                        <div id="seconds" class="countdown-item">00<br><span>Giây</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div style="background-color: white;" class="appointment-form rounded p-5">
                        <h3 style="color: rgb(26, 119, 224); text-align: center;font-family: Arial, Helvetica, sans-serif;"
                            class="display-5 mb-4">Register to
                            experience Shark Dental
                            Services
                        </h3>
                        <form>
                            <div class="row gy-3 gx-4">
                                <div class="col-xl-12">
                                    <input type="text"
                                        class="form-control py-3 border-primary bg-transparent text-white"
                                        placeholder="Your Name">
                                </div>
                                <div class="col-xl-12">
                                    <input type="text"
                                        class="form-control py-3 border-primary bg-transparent text-white"
                                        placeholder="Phone Number">
                                </div>
                                <div class="col-xl-12">
                                    <input type="email" class="form-control py-3 border-primary bg-transparent"
                                        placeholder="Your Email">
                                </div>
                                <div class="col-xl-12">
                                    <input type="text" class="form-control py-3 border-primary bg-transparent"
                                        placeholder="Your Current Country">
                                </div>
                                <div class="col-xl-12">
                                    <select class="form-select py-3 border-primary bg-transparent"
                                        aria-label="Default select example">
                                        <option selected>Your Avialable App</option>
                                        <option value="1">Physiotherapy</option>
                                        <option value="2">Physical Helth</option>
                                        <option value="2">Treatments</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary text-white w-100 py-3 px-5">REGISTER
                                        NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img class="w-100 wow fadeInRight" src="img/trongoi.jpg" alt="">
    </div>
    <div>
        <img class="w-100 wow fadeInLeft" src="img/experience.jpg" alt="">
    </div>
    <!-- Book Appointment End -->
    <!-- Modal Video Youtube 3 rows -->
    <div id="khachhang" class="m-2">
        <h2 style="color: #0072C6; text-align: center; font-weight: bold; margin-top: 10px; font-family: Arial, Helvetica, sans-serif;"
            class="wow fadeInLeft"> TRẢI NGHIỆM CỦA KHÁCH HÀNG </h2>
        <div class="owl-carousel owl-theme owl-vd wow fadeInRight">
            <div class="item"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/e7RpXUUAEP4"
                    frameborder="0" allowfullscreen></iframe> </div>
            <div class="item"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/2brNKbAMA9c"
                    frameborder="0" allowfullscreen></iframe> </div>
            <div class="item"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/JQX2d6N6Ye0"
                    frameborder="0" allowfullscreen></iframe> </div>
            <div class="item"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/CzWkYoqz2Kw"
                    frameborder="0" allowfullscreen></iframe> </div>
            <div class="item"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/h6ypjKqPaR0"
                    frameborder="0" allowfullscreen></iframe> </div>
            <div class="item"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/kGrK7IzXwH4"
                    frameborder="0" allowfullscreen></iframe> </div>
        </div>
        <!-- Testimonial Start -->
        <div id="bacsi" style="background-color:rgb(0, 174, 239)" class="container-fluid team py-5 mt-2">
            <div class="container py-5">
                <div class="section-title mb-5 fadeInUp">
                    <h2 style="color: rgb(241, 238, 15)" class="mb-4">HÌNH ẢNH KHÁCH HÀNG TRƯỚC VÀ SAU ĐIỀU TRỊ</h2>
                </div>
                <div class="owl-carousel owl-bs">
                    <div class="item">
                        <div class="team-item rounded overflow-hidden">
                            <div class="team-img rounded-top h-100">
                                <img src="img/before_after1.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item rounded overflow-hidden">
                            <div class="team-img rounded-top h-100">
                                <img src="img/before_after2.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item rounded overflow-hidden">
                            <div class="team-img rounded-top h-100">
                                <img src="img/before_after3.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item rounded overflow-hidden">
                            <div class="team-img rounded-top h-100">
                                <img src="img/before_after1.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item rounded overflow-hidden">
                            <div class="team-img rounded-top h-100">
                                <img src="img/before_after2.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item rounded overflow-hidden">
                            <div class="team-img rounded-top h-100">
                                <img src="img/before_after3.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img class="w-100 wow fadeInRight" src="img/full_month_restoration_cost.jpg" alt="">
        </div>
        <div class="container-fluid py-2 wow fadeInLeft" style="background-color: #00AEEF;">
            <h3 class="text-center text-white font-weight-bold my-4"> NỤ CƯỜI TRƯỚC VÀ SAU KHI ĐIỀU TRỊ CỦA KHÁCH HÀNG
            </h3>
            <div class="d-flex justify-content-center align-items-center flex-wrap" style="height: calc(100% - 70px);">
                <div class="col-md-6 text-center text-white mb-3">
                    <p class="px-3 custom-paragraph"> Bác sĩ Tính chữa trị tốt, nhân viên nhiệt tình. Phòng khám sạch sẽ. Máy dụng cụ để bác sĩ làm việc thấy rất chỉnh chu, sạch. Nhân viên phụ tá nhẹ nhàng với mình. Cảm giác thoải mái khi đến đây. Tôi rất vui và sẽ giới thiệu người thân, bạn bè đến đây ủng hộ. </p>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="row w-100">
                        <div style="text-align: center; color:white; font-weight: bold;margin-bottom: 10px;">
                            <p class="font-weight-bold mb-1">Chú Hoàng Văn Sửu</p>
                            <p class="mb-1">64 tuổi, Nha Trang</p>
                        </div>
                        <div class="col-6 d-flex justify-content-center mb-3"> <img class="img-fluid"
                                src="img/khach1.jpg" alt="Khách hàng trước điều trị"> </div>
                        <div class="col-6 d-flex justify-content-center mb-3"> <img class="img-fluid"
                                src="img/khach2.jpg" alt="Khách hàng sau điều trị"> </div>

                    </div>
                </div>
            </div>
            <div style="height: 400px;" class="container-fluid py-5 position-relative">
                <img class="w-100 h-100" src="img/kientao.jpg" alt=""
                    style="object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1;">
                <div class="overlay position-absolute w-100 h-100"
                    style="background: rgba(255, 255, 255, 0.5); top: 0; left: 0; z-index: 2;"></div>
                <div class="container position-relative text-center text-black mt-5" style="z-index: 3;">
                    <h4 style="font-weight: bold; font-size: large;" class="display-6 mt-5">KIẾN TẠO NỤ CƯỜI RẠNG RỠ
                        CÙNG
                        NHA
                        KHOA VIỆT HÀN</h4>
                    <p style="color:black" class="lead mt-5">Đặt lịch hẹn tư vấn chuyên sâu và thăm khám miễn phí với các chuyên gia nha
                        khoa
                        hàng
                        đầu của chúng tôi tại đây.</p>
                    <a href="#dathen" style="margin-top: 30px;" class="btn btn-primary btn-lg">ĐẶT HẸN NGAY</a>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <img style="height: auto; width: 50%;" src="img/logo.jpg" alt="">
                            <p style="font-family: Arial, Helvetica, sans-serif; text-align: justify;">
                                Nha Khoa Việt Hàn được xây
                                dựng đúng theo
                                tiêu chuẩn Hiệp hội Nha Khoa Quốc tế và là Trung
                                Tâm Nha Khoa Nha Trang hiện đại nhất. Đảm bảo quy trình khoa học vô trùng theo tiêu
                                chuẩn
                                Châu Âu, với các phòng điều trị siêu vô trùng đem đến một không gian thoáng đãng an toàn
                                tuyệt đối.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Thông tin liên hệ</h4>
                            <a href=""><i class="bi bi-geo-alt-fill me-2 text-primary"></i>60 Quang Trung - Nha
                                Trang</a>
                            <a href="tel:0787505577"><i class="bi bi-telephone-fill me-2 text-primary"></i>Hotline: 0787
                                505
                                577</a>
                            <a href="tel:0989668818"><i class="bi bi-telephone-fill me-2 text-primary"></i>Tư vấn khách
                                Việt
                                Kiều:
                                0989 66
                                88 18</a>
                            <a href="mailto:booking@nhakhoaviethan.vn">
                                <i class="bi bi-envelope-fill me-2 text-primary"></i>
                                booking@nhakhoaviethan.vn
                            </a>
                            <a href=""><i class="bi bi-clock-fill me-2 text-primary"></i>Thứ 2 - Thứ 7: Từ 8:00 -
                                18:30</a>
                            <a href=""><i class="bi bi-clock-fill me-2 text-primary"></i>Chủ nhật: Từ 8:00 - 17:00</a>
                        </div>
                        <div class="d-flex flex-row mt-3 social-icons">
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1"
                                href="https://www.facebook.com/NhakhoaVietHanNhaTrangKhanhHoa/"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1"
                                href="https://www.instagram.com/nhakhoaviethan.nhatrang/"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1"
                                href="https://www.youtube.com/channel/UCQyVTyBNw_IhF2Dnmpd33NA"><i
                                    class="fab fa-youtube"></i></a>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Dịch vụ</h4>
                            <a href="#implant"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Trồng răng
                                Implant</a>
                            <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i> Niềng răng thẩm
                                mỹ</a>
                            <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Phục hình sứ</a>
                            <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Tẩy trắng
                                răng</a>
                            <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Nha khoa tổng
                                quát</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <iframe
                                src="https://maps.google.com/maps?q=Nha%20Khoa%20Vi%E1%BB%87t%20H%C3%A0n%20Nha%20Trang&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near"
                                class="footer-map" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Nha Khoa
                                Viet
                                Han</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        Designed By <a class="border-bottom" href="https://devttt.com/">DEVTTT</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <!-- Template Javascript -->
        <!-- <script src="js/main.js"></script> -->
        <?php require "js/main.php"; ?>
</body>

</html>