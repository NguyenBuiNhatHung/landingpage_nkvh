<!DOCTYPE html>
<html lang="en">
<?php require "css/style.php"; ?>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo1.jpg" type="image/x-icon">
    <title>Viet Han Dentel - Nha Trang 5 Star Dental Clinic Meeting Standards and Trustworthiness</title>
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
                </select>
                <select name="service" required>
                    <option value="" disabled selected>Consulting Service</option>
                    <option style="color:black" value="All on 4">All on 4</option>
                    <option style="color:black" value="All on 6">All on 6</option>
                    <option style="color:black" value="Titanium Implant">Titanium Implant</option>
                    <option style="color:black" value="Zicronium Implant">Zicronium Implant</option>
                    <option style="color:black" value="Full Denture">Full Denture</option>
                </select>
                <button type="submit">REGISTER NOW</button>
            </form>
        </div>
    </div>
    <div class="elementor-widget-container">
        <div id="notification" class="notification">
            <span id="notification-text"></span>
        </div>
        <script>
            const messages = ["Customer Nguyen Van has registered for dental implant consultation",
                "Customer Jonathan Nguyen has booked an appointment for dental crowns",
            ];

            function showNotification(message) {
                const notification = document.getElementById('notification');
                const notificationText = document.getElementById('notification-text');
                notificationText.textContent = message;
                notification.classList.add('show');
                setTimeout(() => {
                    notification.classList.remove('show');
                }, 5000);
            }
            let currentIndex = 0;
            setInterval(() => {
                if (currentIndex < messages.length) {
                    showNotification(messages[currentIndex]);
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
            }, 10000);
        </script>
    </div>

    <div class="elementor-widget-container">
        <div class="hotline-phone-ring-wrap">
            <div class="hotline-phone-ring">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div>
                <div class="hotline-phone-ring-img-circle">
                    <a href="tel:0787505577" class="pps-btn-img">
                        <img src="img/icon_call.jpg" alt="Call Phone" width="50">
                    </a>
                </div>
            </div>
        </div>
        <div class="hotline-zalo-ring-wrap">
            <div class="hotline-phone-ring">
                <div class="hotline-zalo-ring-circle"></div>
                <div class="hotline-zalo-ring-circle-fill"></div>
                <div class="hotline-zalo-ring-img-circle"> <a href="https://zalo.me/1797913117798518130"
                        class="pps-btn-img" id="zaloIcon"> <img src="img/icon_zalo.jpg" alt="Chat Zalo" width="50"> </a>
                </div>
            </div>
        </div> <!-- Message Box -->
        <div id="messageBox" class="container">
            <div class="row no-gutters">
                <div class="col-auto"> <img class="img-messageBox" src="img/logo.jpg" alt=""> </div>
                <div class="col">
                    <div class="header-messageBox"> <span>VIET HAN DENTAL</span> <span class="close"
                            onclick="closeMessageBox()">&times;</span> </div>
                    <div class="body-messageBox"> Hello, esteemed customer, Viet Han Dental is always ready to assist you! </div>
                    <a href="https://zalo.me/1797913117798518130">Send Message</a>
                </div>
            </div>
        </div>
        <script>
            function showMessageBox() {
                const messageBox = document.getElementById('messageBox');
                messageBox.classList.add('show');
            }

            function closeMessageBox() {
                const messageBox = document.getElementById('messageBox');
                messageBox.classList.remove('show');
                setTimeout(showMessageBox, 60000);
            }

            document.getElementById('zaloIcon').onclick = function(event) {
                event.preventDefault();
                showMessageBox();
            }

            window.onload = function() {
                setTimeout(showMessageBox, 15000);
            }
        </script>



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
                    <a href="#gioithieu" class="nav-item nav-link">INTRODUCE</a>
                    <a href="#bacsi" class="nav-item nav-link">DENTIST</a>
                    <a href="#rangsu" class="nav-item nav-link">PORCELAIN TEETH</a>
                    <a href="#implant" class="nav-item nav-link">IMPLANT</a>
                    <a href="#dathen" class="nav-item nav-link">MAKE AN APPOINTMENT</a>
                    <a href="#khachhang" class="nav-item nav-link">CUSTOMER</a>
                    <a href="index.php" class="nav-item nav-link d-flex d-inline-block">
                        <p>VIE</p> <img style="max-height:15px" src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg" alt="Cờ Việt Nam" alt="Cờ Việt Nam">
                    </a>
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
                <a href="#dathen" style="font-family: Arial, Helvetica, sans-serif;"
                    class="btn btn-primary btn-lg fadeInUp button-submit">REGISTER NOW - RECEIVE FREE ROUND-TRIP FLIGHT TICKETS</a>
            </div>
            <div class="col-12 col-md-auto text-center">
                <p class="h5 fadeInUp">Limited time offer</p>
                <div class="d-flex flex-row justify-content-center fadeInUp time-line">
                    <div class="p-2 border rounded">00</div>
                    <div class="p-2 border rounded">07</div>
                    <div class="p-2 border rounded">34</div>
                    <div class="p-2 border rounded">09</div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:#a1e8ff;" class="pb-5 fadeInUp pt-1 wow fadeInRight col-12">
        <h3 style="font-family: Arial, Helvetica, sans-serif;font-size: 2.5rem; color:white;"
            class="col-12 text-center pt-3 pt-md-5"> <b class="wow fadeInLeft">SPECIALIZED DENTAL SERVICES</b>
        </h3>
        <div class="container">
            <div class="row justify-content-around wow fadeInRight">
                <div class="col-md-5 col-10 mt-5"> <img src="img/dv1.jpg" class="img-fluid" alt="Photo Commitment 1"> </div>
                <div class="col-md-5 col-10 mt-5"> <img src="img/dv2.jpg" class="img-fluid" alt="Photo Commitment 2"> </div>
            </div>
            <div class="row justify-content-around wow fadeInRight">
                <div class="col-md-5 col-10 mt-5"> <img src="img/dv3.jpg" class="img-fluid" alt="Photo Commitment 3"> </div>
                <div class="col-md-5 col-10 mt-5"> <img src="img/dv4.jpg" class="img-fluid" alt="Photo Commitment 4"> </div>
            </div>
        </div>
    </div>

    <div id="rangsu">
        <img class="w-100 wow fadeInLeft" src="img/rang-su.jpg" alt="">
    </div>

    <div>
        <img class="w-100 wow fadeInLeft" src="img/quytrinh.jpg" alt="">
    </div>

    <div id="implant">
        <img class="w-100 wow fadeInRight" src="img/implant.jpg" alt="">
    </div>

    <div>
        <img class="w-100 wow fadeInRight" src="img/implant2.jpg" alt="">
    </div>

    <div id="khachhang" class="m-2">
        <h2 style="color: #0072C6; text-align: center; font-weight: bold; margin-top: 10px; font-family: Arial, Helvetica, sans-serif;"
            class="wow fadeInLeft"> CUSTOMER EXPERIENCE </h2>
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
    </div>

    <div style="background:linear-gradient(to right, #add8e6, white, #add8e6);" class="pb-5 fadeInUp pt-3">
        <h3 style="font-family: Arial, Helvetica, sans-serif;" class="col-12 text-center pt-3 pt-md-5 "><b
                class="font-size-3"> 5 CORE VALUES AT VIET HAN DENTAL</b></h3>
        <div style="font-family: Arial, Helvetica, sans-serif;"
            class="col-11 d-flex d-inline-block justify-content-between p-1 text-center mx-auto">
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Top expertise</h5>
                <p style="text-align: justify;">We are proud that 100% of the doctors at Viet Han Dental Clinic are doctors
                    Official specialist in Dentistry
                    Face Jaw. This ensures that each service we provide meets the highest medical standards
                    again
                    peace of mind for customers.</p>
            </div>
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Patient health is an absolute priority</h5>
                <p style="text-align: justify;">We always put patient health and safety first.
                    Every decision, every action
                    Aiming to bring the best treatment solutions to customers.</p>
            </div>
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Dedicated and honest</h5>
                <p style="text-align: justify;">We are committed to serving customers with sincerity and transparency. We take care of customers as if they were our own family.</p>
            </div>
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Always innovate and develop</h5>
                <p style="text-align: justify;">We are constantly learning, improving equipment and technology.
                    Improving our own capacity to meet the increasing needs of customers and the market.</p>
            </div>
            <div class="col-8 col-md-2 text-center mt-3 border border-white p-3 shadow wow fadeInUp cl">
                <h5>Promote social responsibility </h5>
                <p style="text-align: justify;">
                    We are proud to contribute positively to the community and society. By carrying out volunteer activities, sharing love with those in difficult circumstances.
                </p>
            </div>
        </div>
    </div>
    <!--Hết giá trị cốt lõi -->
    <!-- cam kết -->
    <div style="background-color:rgb(0, 166, 218);" class="pb-5 fadeInUp pt-1 wow fadeInRight col-12">
        <h3 style="font-family: Arial, Helvetica, sans-serif;font-size: 2.5rem; color:white;"
            class="col-12 text-center pt-3 pt-md-5"> <b class="wow fadeInLeft">WHY CHOOSE VIET HAN DENTAL CLINIC?</b>
        </h3>
        <div class="container">
            <div class="row justify-content-around wow fadeInRight">
                <div class="col-lg-5 col-10 mt-5 hover-effect">
                    <div class="overlay">
                        <div class="icon-key"> <i class="fas fa-user-md"></i> <span>DENTIST TEAM</span> </div>
                        <div class="overlay-text">At Viet Han Dental, doctors graduated from the regular Faculty of Dentistry
                            at the most prestigious universities in Vietnam in the medical field, such as Ho Chi Minh City University of Medicine and Pharmacy, Hanoi University of Medicine and Pharmacy, Hue University of Medicine and Pharmacy.
                            With many years of experience, continuously studying to improve their skills. Our doctors work
                            dedicatedly with patients, uphold medical ethics and receive much love from customers
                            in Nha Trang, Khanh Hoa as well as international customers.</div>
                    </div> <img src="img/ck1.jpg" class="img-fluid" alt="Ảnh Cam Kết 1">
                </div>
                <div class="col-lg-5 col-10 mt-5 hover-effect">
                    <div class="overlay">
                        <div class="icon-key"> <i class="fas fa-users"></i> <span>CUSTOMER CARE</span> </div>
                        <div class="overlay-text"> At Viet Han Dental, doctors graduated from the regular Faculty of Dentistry
                            at the most prestigious universities in Vietnam in the medical field, such as Ho Chi Minh City University of Medicine and Pharmacy, Hanoi University of Medicine and Pharmacy, Hue University of Medicine and Pharmacy.
                            With many years of experience, continuously studying to improve their skills. Our doctors work
                            dedicatedly with patients, uphold medical ethics and receive much love from customers
                            in Nha Trang, Khanh Hoa as well as international customers.</div>
                    </div> <img src="img/ck2.jpg" class="img-fluid" alt="Ảnh Cam Kết 2">
                </div>
            </div>
            <div class="row justify-content-around wow fadeInRight">
                <div class="col-lg-5 col-10 mt-5 hover-effect">
                    <div class="overlay">
                        <div class="icon-key"> <i class="fas fa-cogs"></i> <span>TECHNOLOGY, MACHINERY</span> </div>
                        <div class="overlay-text"> At Viet Han Dental, doctors graduated from the regular Faculty of Dentistry
                            at the most prestigious universities in Vietnam in the medical field, such as Ho Chi Minh City University of Medicine and Pharmacy, Hanoi University of Medicine and Pharmacy, Hue University of Medicine and Pharmacy.
                            With many years of experience, continuously studying to improve their skills. Our doctors work
                            dedicatedly with patients, uphold medical ethics and receive much love from customers
                            in Nha Trang, Khanh Hoa as well as international customers.</div>
                    </div> <img src="img/ck3.jpg" class="img-fluid" alt="Ảnh Cam Kết 3">
                </div>
                <div class="col-lg-5 col-10 mt-5 hover-effect">
                    <div class="overlay">
                        <div class="icon-key"> <i class="fas fa-money-bill-wave"></i> <span>REASONABLE COST</span> </div>
                        <div class="overlay-text">At Viet Han Dental, doctors graduated from the regular Faculty of Dentistry
                            at the most prestigious universities in Vietnam in the medical field, such as Ho Chi Minh City University of Medicine and Pharmacy, Hanoi University of Medicine and Pharmacy, Hue University of Medicine and Pharmacy.
                            With many years of experience, continuously studying to improve their skills. Our doctors work
                            dedicatedly with patients, uphold medical ethics and receive much love from customers
                            in Nha Trang, Khanh Hoa as well as international customers.</div>
                    </div> <img src="img/ck4.jpg" class="img-fluid" alt="Ảnh Cam Kết 4">
                </div>
            </div>
            <div class="row justify-content-around wow fadeInRight mt-5">
                <div class="col-12 text-center">
                    <div class="col-12 text-center">
                        <a href="#dathen" class="bg-white p-3 p-md-3 rounded font-weight-bolder">
                            BOOK AN APPOINTMENT NOW
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- hết cam kết -->



    <!-- Team Start -->


    <!-- Team End -->
    <div id="bacsi" class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 fadeInUp">
                <h5 class="display-6 mb-4">TEAM OF SPECIALIZED DENTIST</h5>
            </div>
            <div class="owl-carousel owl-bs">
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs1.jpg" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                            <h5 class="team-title">Dentist: Khong Van Quan</h5>
                            <p class="team-description mb-0">Graduated from the Faculty of OHM, University of Medicine and Pharmacy, Ho Chi Minh City
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs2.jpg" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                            <h5 class="team-title">Dentist: Khong Van Quan</h5>
                            <p class="team-description mb-0">Graduated from the Faculty of OHM, University of Medicine and Pharmacy, Ho Chi Minh City
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs3.jpg" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                            <h5 class="team-title">Dentist: Khong Van Quan</h5>
                            <p class="team-description mb-0">Graduated from the Faculty of OHM, University of Medicine and Pharmacy, Ho Chi Minh City
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs4.jpg" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                            <h5 class="team-title">Dentist: Khong Van Quan</h5>
                            <p class="team-description mb-0">Graduated from the Faculty of OHM, University of Medicine and Pharmacy, Ho Chi Minh City
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs5.jpg" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                            <h5 class="team-title">Dentist: Khong Van Quan</h5>
                            <p class="team-description mb-0">
                            <p class="team-description mb-0">Graduated from the Faculty of OHM, University of Medicine and Pharmacy, Ho Chi Minh City
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item rounded overflow-hidden">
                        <div class="team-img rounded-top h-100">
                            <img src="img/bs6.jpg" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                            <h5 class="team-title">Dentist: Khong Van Quan</h5>
                            <p class="team-description mb-0">Graduated from the Faculty of OHM, University of Medicine and Pharmacy, Ho Chi Minh City
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <img class="w-100 wow fadeInRight" src="img/trongoi.jpg" alt="">
    </div>
    <!-- Book Appointment Start -->
    <div style="background: linear-gradient(135deg,#00AEEF, #0072C6 );" class="container-fluid appointment py-5">
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
                                        <p style="font-family: Arial, Helvetica, sans-serif" class="mb-0">
                                            Commitment
                                            to
                                            100% genuine embryo porcelain teeth.</p>
                                    </div>
                                    <div style="background-color: white; border-radius: 15px; padding: 15%; color: rgb(33, 108, 221);height: 40%;"
                                        class="mb-4 d-flex d-inline-block">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                        </h5>
                                        <p style="font-family: Arial, Helvetica, sans-serif;" class="mb-0">
                                            Commitment
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
                                        <p style="font-family: Arial, Helvetica, sans-serif;" class="mb-0">
                                            Commitment to
                                            not incur additional costs.</p>
                                    </div>
                                    <div style="background-color: white; border-radius: 15px; padding: 15%; color: rgb(33, 108, 221);height: 40%;"
                                        class="mb-4 d-flex d-inline-block">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                        </h5>
                                        <p style="font-family: Arial, Helvetica, sans-serif;" class="mb-0">
                                            One-for-one
                                            warranty when teeth are cracked, broken, or chipped.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center align-items-center col-12 col-md-6 mx-auto my-auto countdown-timer"
                                style="background-color: white; border-radius: 10px; padding: 20px;">
                                <h3 style="font-family: Arial, Helvetica, sans-serif; color:red;">ONLY 30 LAST PROMOTION SEATS LEFT</h3>
                                <p style="color:green;">Registration deadline is only</p>
                                <div class="d-flex flex-row justify-content-around flex-wrap fadeInUp countdown-container"
                                    style="color: green; font-weight: bold;">
                                    <div id="countdown" class="countdown-container">
                                        <div id="days" class="countdown-item">00<br><span>Days</span></div>
                                        <div id="hours" class="countdown-item">00<br><span>Hours</span></div>
                                        <div id="minutes" class="countdown-item">00<br><span>Mins</span></div>
                                        <div id="seconds" class="countdown-item">00<br><span>Secs</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dathen" class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
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
                                <div class="col-xl-12">
                                    <select name="service" class="form-select py-3 border-primary bg-transparent">
                                        <option value="" disabled selected>Consulting Service</option>
                                        <option style="color:black" value="All on 4">All on 4</option>
                                        <option style="color:black" value="All on 6">All on 6</option>
                                        <option style="color:black" value="Titanium Implant">Titanium Implant</option>
                                        <option style="color:black" value="Zicronium Implant">Zicronium Implant</option>
                                        <option style="color:black" value="Full Denture">Full Denture</option>
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
        <img class="w-100 wow fadeInLeft" src="img/experience.jpg" alt="">
    </div>
    <!-- Book Appointment End -->
    <!-- Modal Video Youtube 3 rows -->

    <!-- Testimonial Start -->
    <div id="bacsi" style="background-color:#0077fe" class="container-fluid team py-5 mt-2">
        <div class="container py-5">
            <div class="section-title mb-5 fadeInUp">
                <h2 style="color: white" class="mb-4">CUSTOMER'S SMILE BEFORE AND AFTER TREATMENT
                </h2>
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

    <div class="container-fluid py-2 wow fadeInLeft" style="background-color: #3babff;">
        <h3 style="font-size: 200%" class="text-center text-white font-weight-bold my-4"> WHAT DO CUSTOMERS SAY ABOUT US?
        </h3>
        <div class="d-flex justify-content-center align-items-center flex-wrap" style="height: calc(100% - 70px);">
            <div class="col-md-6 text-center text-white mb-3">
                <p class="px-3 custom-paragraph"> Doctor Tinh treats well, the staff is enthusiastic. The clinic is clean. The equipment used by the doctor is neat and clean. The assistants are gentle with me. I feel comfortable coming here. I am very happy and will introduce my relatives and friends to come here to support.
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <div class="row w-100">
                    <div style="text-align: center; color:white; font-weight: bold;margin-bottom: 10px;">
                        <p class="font-weight-bold mb-1">Mr Hoang Van Suu</p>
                        <p class="mb-1">64 years old, Nha Trang</p>
                    </div>
                    <div class="col-6 d-flex justify-content-center mb-3"> <img class="img-fluid" src="img/khach1.jpg"
                            alt="Khách hàng trước điều trị"> </div>
                    <div class="col-6 d-flex justify-content-center mb-3"> <img class="img-fluid" src="img/khach2.jpg"
                            alt="Khách hàng sau điều trị"> </div>

                </div>
            </div>
        </div>
    </div>

    <div>
        <img class="w-100 wow fadeInRight" src="img/full_month_restoration_cost.jpg" alt="">
    </div>

    <div class="container-fluid wow fadeInLeft">
        <div style="height: 400px;" class="container-fluid py-5 position-relative">
            <img class="w-100 h-100" src="img/kientao.jpg" alt=""
                style="object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1;">
            <div class="overlay position-absolute w-100 h-100"
                style="background: rgba(255, 255, 255, 0.5); top: 0; left: 0; z-index: 2;"></div>
            <div class="container position-relative text-center text-black mt-5" style="z-index: 3;">
                <h4 style="font-weight: bold; font-size: large;" class="display-6 mt-5">FLY BACK TO VIETNAM AND CREATE A BRIGHT SMILE WITH VIET HAN DENTAL CLINIC.</h4>
                <p style="color:black" class="lead mt-5">Schedule an in-depth consultation and free examination with our top dental experts here!</p>
                <a href="#" style="margin-top: 30px; color:white; height: 50px;" class="btn btn-primary btn-lg">FREE CONSULTATION CONTACT</a>
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
                            Viet Han Dental Clinic is built according to the standards of the International Dental
                            Association and is the most modern dental center in Nha Trang. Ensuring scientifically
                            sterile procedures according to European standards, with super-sterile treatment rooms
                            providing an absolutely safe and airy space.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contact Information</h4>
                        <a href=""><i class="bi bi-geo-alt-fill me-2 text-primary"></i>60 Quang Trung - Nha
                            Trang</a>
                        <a href="tel:0787505577"><i class="bi bi-telephone-fill me-2 text-primary"></i>Hotline: 0787
                            505
                            577</a>
                        <a href="tel:0989668818"><i class="bi bi-telephone-fill me-2 text-primary"></i>Consulting for
                            Overseas Vietnamese customers:
                            0989 66
                            88 18</a>
                        <a href="mailto:booking@nhakhoaviethan.vn">
                            <i class="bi bi-envelope-fill me-2 text-primary"></i>
                            booking@nhakhoaviethan.vn
                        </a>
                        <a href=""><i class="bi bi-clock-fill me-2 text-primary"></i>Monday - Saturday: From 8:00 AM to 6:30 PM</a>
                        <a href=""><i class="bi bi-clock-fill me-2 text-primary"></i>Sunday: From 8:00 AM to 5:00 PM</a>
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
                        <h4 class="mb-4 text-white">Services</h4>
                        <a href="#implant"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Dental
                            Implant</a>
                        <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Cosmetic Braces</a>
                        <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Porcelain
                            Restoration</a>
                        <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Teeth Whitening</a>
                        <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>General Dentistry</a>
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