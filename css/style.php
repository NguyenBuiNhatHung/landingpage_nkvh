<style>
    /*** Spinner Start ***/
    /*** Spinner ***/
    body {
        width: 100%;
        margin: 0;
        background-color: rgb(177, 218, 232);
        font-family: Arial, Helvetica, sans-serif;
    }

    .hover-effect {
        position: relative;
        text-align: center;
        margin-top: 20px;
        color: black;
    }

    .hover-effect img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .hover-effect .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 10px;
        box-sizing: border-box;
        background-color: rgba(255, 255, 255, 0.7);
        /* Điều chỉnh độ mờ của lớp phủ */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s ease, background-color 0.3s ease;
    }

    .hover-effect:hover img {
        filter: none;
        transform: scale(1.1);
    }

    .hover-effect:hover .overlay {
        background-color: rgba(0, 0, 0, 0.7);
        opacity: 0;
    }

    .icon-key {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
        font-size: 1.2rem;
    }

    .icon-key i {
        margin-right: 5px;
        font-size: 1.5rem;
    }

    .overlay-text {
        font-size: 1.2rem;
        text-align: justify;
        margin-top: 10px;
    }

    @media (max-width: 767.98px) {
        .icon-key {
            font-size: 1rem;
        }

        .icon-key i {
            font-size: 0.9rem;
        }

        .overlay-text {
            font-size: 0.7rem;
        }

        .team-content {
            font-size: 0.6rem;
        }

        .team-title {
            font-size: 0.8rem;
        }
    }

    .custom-paragraph {
        background-color: #0072C6;
        color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        line-height: 1.6;
    }

    .custom-paragraph::before {
        content: "“";
        font-size: 30px;
        color: white;
        position: absolute;
        top: 10px;
        left: 10px;
    }

    #messageBox {
        position: fixed;
        bottom: 260px;
        left: 20px;
        width: 350px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        z-index: 1000;
        display: none;
        opacity: 0;
        transition: opacity 1s ease;
    }

    #messageBox.show {
        display: block;
        opacity: 1;
        /* Fully visible */
    }

    .img-messageBox {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-top: 50px;
    }

    .header-messageBox {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        color: black;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .header-messageBox span {
        font-weight: bold;
        font-size: 14px;
    }

    .header-messageBox .close {
        font-size: 20px;
        cursor: pointer;
        margin-left: auto;
    }

    .body-messageBox {
        padding: 10px;
        font-size: 14px;
        color: #333;
    }

    #messageBox a {
        display: block;
        text-align: center;
        color: #00AEEF;
        padding: 10px;
        border-radius: 0 0 10px 10px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    #messageBox a:hover {
        transform: scale(1.2);
    }

    .notification {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 100px;
        right: 20px;
        width: 300px;
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1001;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .notification.show {
        opacity: 1;
    }

    .notification-icon {
        margin-left: 10px;
        color: #39b828;
    }

    .popup {
        display: none;
        position: fixed;
        z-index: 9;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Popup content */
    .popup-content {
        background-color: rgba(255, 255, 255, 0.8);
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
        height: 85%;
        max-width: 400px;
        /* Max width */
        position: relative;
        background-size: cover;
        border-radius: 15px;
        overflow: hidden;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Form styling */
    .form-container {
        display: flex;
        flex-direction: column;
    }

    .form-container input,
    .form-container select {
        margin: 10px 0;
        padding: 10px;
        font-size: 16px;
        background-color: rgba(255, 255, 255, 0.5);
        /* Semi-transparent */
        border: 1px solid #ccc;
        border-radius: 10px;
        /* Rounded corners */
        color: white;
        /* Text color */
    }

    .form-container input::placeholder,
    .form-container select::placeholder {
        color: white;
        /* Placeholder text color */
    }

    .form-container input:focus,
    .form-container select:focus {
        background-color: rgba(255, 255, 255, 0.7);
        /* Slightly less transparent on focus */
        outline: none;
        /* Remove default outline */
        color: white;
        /* Text color on focus */
    }

    .form-container button {
        padding: 10px 20px;
        background-color: yellow;
        color: #00AEEF;
        border: none;
        cursor: pointer;
        border-radius: 15px;
        width: fit-content;
        margin: 0 auto;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .form-container button:hover {
        background-color: #ffd700;
    }

    .popup-content h2 {
        text-align: center;
        color: white;
    }

    .popup-content h2 .yellow {
        color: yellow;
    }


    .owl-theme .nav-btn {
        color: #fff;
        background-color: #0072C6;
        padding: 15px;
        border-radius: 50%;
        font-size: 18px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .owl-theme .prev-slide {
        left: -8px;
    }

    .owl-theme .next-slide {
        right: -8px;
    }

    #spinner {
        opacity: 0;
        visibility: hidden;
        transition: opacity .5s ease-out, visibility 0s linear .5s;
        z-index: 99999;
    }

    .cl {
        background-color: white;
        border-radius: 10px;
    }

    #spinner.show {
        transition: opacity .5s ease-out, visibility 0s linear 0s;
        visibility: visible;
        opacity: 1;
    }


    #dk {
        background-color: white;
        padding: 0.5rem;
        border-radius: 1rem;
    }

    .back-to-top {
        position: fixed;
        right: 30px;
        bottom: 30px;
        display: flex;
        width: 45px;
        height: 45px;
        align-items: center;
        justify-content: center;
        transition: 0.5s;
        z-index: 99;
    }

    /*** Button Start ***/
    .btn {
        font-weight: 600;
        transition: .5s;
    }

    .btn-square {
        width: 32px;
        height: 32px;
    }

    .btn-sm-square {
        width: 34px;
        height: 34px;
    }

    .btn-md-square {
        width: 44px;
        height: 44px;
    }

    .btn-lg-square {
        width: 56px;
        height: 56px;
    }

    .btn-square,
    .btn-sm-square,
    .btn-md-square,
    .btn-lg-square {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: normal;
        border-radius: 50%;
    }

    .btn.btn-primary {
        box-shadow: inset 0 0 0 0 var(--bs-primary);
    }

    .btn.btn-primary:hover {
        box-shadow: inset 600px 0 0 0 var(--bs-light) !important;
        color: var(--bs-primary) !important;
    }

    .btn.btn-primaryy:hover {
        background-color: #0072C6;
        color: white;
        box-shadow: inset 0 0 0 2px #0072C6;
    }

    .btn.btn-light {
        box-shadow: inset 0 0 0 0 var(--bs-primary);
    }

    .btn.btn-light:hover {
        box-shadow: inset 300px 0 0 0 var(--bs-primary);
        color: var(--bs-light) !important;
    }

    .btn-hover {
        transition: 0.5s;
    }

    .btn-hover:hover {
        color: var(--bs-secondary) !important;
    }

    /*** Section Title Start ***/
    .section-title {
        max-width: 900px;
        text-align: center;
        margin: 0 auto;
    }

    .section-title .sub-style {
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        color: var(--bs-primary);
    }

    .section-title .sub-style::before {
        content: "";
        width: 100px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        margin-top: 8px;
        margin-left: -100px;
        border: 1px solid var(--bs-primary) !important;
    }

    .section-title .sub-style::after {
        content: "";
        width: 50px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        margin-bottom: 5px;
        margin-left: -50px;
        border: 1px solid var(--bs-primary) !important;
    }

    .sub-title {
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        color: var(--bs-primary);
    }

    .sub-title::before {
        content: "";
        width: 100px;
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        margin-top: 8px;
        margin-right: -100px;
        border: 1px solid var(--bs-primary) !important;
    }

    .sub-title::after {
        content: "";
        width: 50px;
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        margin-bottom: 8px;
        margin-right: -50px;
        border: 1px solid var(--bs-primary) !important;
    }


    /*** Topbar Start ***/
    .fixed-top .container {
        transition: 0.5s;
    }

    .topbar {
        padding: 2px 10px 2px 20px;
        background: var(--bs-primary) !important;
    }

    .topbar a,
    .topbar a i {
        transition: 0.5s;
    }

    .topbar a:hover,
    .topbar a i:hover {
        color: var(--bs-secondary) !important;
    }


    @media (max-width: 576px) {
        .topbar {
            display: none;
        }

        #messageBox {
            width: 250px;
            left: 5px;
            bottom: 50px;
        }


    }

    /*** Topbar End ***/


    /*** Navbar ***/
    .navbar-light .navbar-nav .nav-link {
        font-family: Arial, Helvetica, sans-serif;
        position: relative;
        margin-right: 50px;
        padding: 20px 0px;
        color: var(--bs-dark) !important;
        font-size: 25px;
        font-weight: 700;
        outline: none;
        transition: .5s;
    }

    .sticky-top.navbar-light .navbar-nav .nav-link {
        padding: 20px 0px;
        color: var(--dark) !important;
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link.active {
        color: var(--bs-primary) !important;
    }

    .navbar-light .navbar-brand img {
        max-height: 50px;
        transition: .5s;
        flex-shrink: 0;
        margin-right: auto;
    }

    .sticky-top.navbar-light .navbar-brand img {
        max-height: 45px;
    }

    .navbar .dropdown-toggle::after {
        border: none;
        content: "\f107";
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 600;
        vertical-align: middle;
        margin-left: 8px;
    }

    @media (min-width: 1200px) {
        .navbar .nav-item .dropdown-menu {
            display: block;
            visibility: hidden;
            top: 100%;
            transform: rotateX(-75deg);
            transform-origin: 0% 0%;
            border: 0;
            border-radius: 10px;
            transition: .5s;
            opacity: 0;
        }
    }

    .dropdown .dropdown-menu a:hover {
        background: var(--bs-primary);
        color: var(--bs-white);
    }

    .navbar .nav-item:hover .dropdown-menu {
        transform: rotateX(0deg);
        visibility: visible;
        background: var(--bs-light) !important;
        transition: .5s;
        opacity: 1;
    }

    @media (max-width: 991.98px) {
        .sticky-top.navbar-light {
            position: relative;
            background: var(--bs-white);
        }


        .navbar.navbar-expand-lg .navbar-toggler {
            padding: 10px 20px;
            border: 1px solid var(--bs-primary);
            color: var(--bs-primary);
        }

        .navbar-light .navbar-collapse {
            margin-top: 15px;
            border-top: 1px solid #DDDDDD;
            flex-grow: 1;
            justify-content: center;
        }

        .navbar-light .navbar-nav .nav-link,
        .sticky-top.navbar-light .navbar-nav .nav-link {
            padding: 10px 0;
            margin-left: 0;
            color: var(--bs-dark) !important;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .navbar-light .navbar-brand img {
            max-height: 45px;
        }
    }

    @media (min-width: 992px) {
        .navbar-light {
            position: absolute;
            width: 100%;
            top: 0;
            left: 0;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
            z-index: 999;
        }

        .sticky-top.navbar-light {
            position: fixed;
            background: var(--bs-light) !important;
        }

        .navbar-light .navbar-nav .nav-link::before {
            position: absolute;
            content: "";
            width: 0;
            height: 2px;
            bottom: -1px;
            left: 50%;
            background: var(--bs-primary);
            transition: .5s;
        }

        .navbar-light .navbar-nav .nav-link:hover::before,
        .navbar-light .navbar-nav .nav-link.active::before {
            width: calc(100% - 2px);
            left: 1px;
        }

        .navbar-light .navbar-nav .nav-link.nav-contact::before {
            display: none;
        }
    }

    /*** Carousel Hero Header Start ***/
    .header-carousel {
        position: relative;
    }

    .header-carousel .owl-nav .owl-prev {
        position: absolute;
        width: 70px;
        height: 70px;
        top: 50%;
        left: 20px;
        transform: translateY(-50%);
        border-radius: 50%;
        background: var(--bs-primary);
        color: var(--bs-white);
        font-size: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.5s;
    }

    .header-carousel .owl-nav .owl-next {
        position: absolute;
        width: 70px;
        height: 70px;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
        border-radius: 50%;
        background: var(--bs-primary);
        color: var(--bs-white);
        font-size: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.5s;
    }

    .header-carousel .owl-nav .owl-prev,
    .header-carousel .owl-nav .owl-next {
        transition: 0.5s;
    }



    .header-carousel .owl-nav .owl-prev:hover,
    .header-carousel .owl-nav .owl-next:hover {
        box-shadow: inset 150px 0 0 0 var(--bs-light) !important;
        color: var(--bs-primary) !important;
    }

    @media (max-width: 576px) {

        .header-carousel .owl-nav .owl-prev,
        .header-carousel .owl-nav .owl-next {
            top: 630px;
            transition: 0.5s;
        }

        .header-carousel .header-carousel-item .carousel-caption .carousel-caption-content {
            width: 95% !important;
        }

    }

    .header-carousel .header-carousel-item,
    .header-carousel .header-carousel-item img {
        position: relative;
        width: 100%;
        height: 700px;
        margin-top: 95px;
        display: block;
        object-fit: cover;
        transition: 0.5s;

    }

    @media (max-width: 992px) {

        .header-carousel .header-carousel-item,
        .header-carousel .header-carousel-item img {
            margin-top: 0;
            transition: 0.5s;
        }

    }

    @media (min-width: 992px) {

        .header-carousel .owl-nav .owl-prev,
        .header-carousel .owl-nav .owl-next {
            margin-top: 50px;
        }
    }

    .header-carousel .header-carousel-item .carousel-caption {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        padding: 100px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, .5);
    }

    .header-carousel .header-carousel-item .carousel-caption .carousel-caption-content {
        position: relative;
        width: 75%;

    }

    /*** Carousel Hero Header End ***/


    /*** Single Page Hero Header Start ***/
    .bg-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../img/carousel-2.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 160px 0 60px 0;
    }

    .bg-breadcrumb .breadcrumb-item a {
        color: var(--bs-white) !important;
    }

    /*** Single Page Hero Header End ***/


    /*** Service Start ***/
    .service .service-item {
        box-shadow: 0 0 45px rgba(0, 0, 0, .2);
    }

    .service .service-item .service-img {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .service .service-item .service-img img {
        transition: 0.5s;
    }

    .service .service-item .service-img::before {
        width: 100%;
        height: 0;
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        transition: 0.5s;
        z-index: 5;

    }

    .hotline-face-ring-wrap {
        position: fixed;
        bottom: 80px;
        left: 0px;
        z-index: 999999;
    }

    .hotline-zalo-ring-wrap {
        position: fixed;
        bottom: 160px;
        left: 0px;
        z-index: 999999;
    }

    .hotline-phone-ring-wrap {
        position: fixed;
        bottom: 0px;
        left: 0px;
        z-index: 999999;
    }

    .hotline-phone-ring {
        position: relative;
        visibility: visible;
        background-color: transparent;
        width: 110px;
        height: 110px;
        cursor: pointer;
        z-index: 11;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        transition: visibility .5s;
        left: 0;
        bottom: 0;
        display: block;
    }

    .hotline-phone-ring-circle {
        width: 85px;
        height: 85px;
        top: 10px;
        left: 10px;
        position: absolute;
        background-color: transparent;
        border-radius: 100%;
        border: 2px solid #186998;
        -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        opacity: 0.5;
    }

    .hotline-face-ring-circle {
        width: 85px;
        height: 85px;
        top: 10px;
        left: 10px;
        position: absolute;
        background-color: transparent;
        border-radius: 100%;
        border: 2px solid #186998;
        -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        opacity: 0.5;
    }

    .hotline-zalo-ring-circle {
        width: 85px;
        height: 85px;
        top: 10px;
        left: 10px;
        position: absolute;
        background-color: transparent;
        border-radius: 100%;
        border: 2px solid #186998;
        -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        opacity: 0.5;
    }

    .hotline-phone-ring-circle-fill {
        width: 55px;
        height: 55px;
        top: 25px;
        left: 25px;
        position: absolute;
        background-color: #186998;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }

    .hotline-face-ring-circle-fill {
        width: 55px;
        height: 55px;
        top: 25px;
        left: 25px;
        position: absolute;
        background-color: #186998;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }

    .hotline-zalo-ring-circle-fill {
        width: 55px;
        height: 55px;
        top: 25px;
        left: 25px;
        position: absolute;
        background-color: #186998;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }

    .hotline-phone-ring-img-circle {
        background-color: #186998c9;
        width: 33px;
        height: 33px;
        top: 37px;
        left: 37px;
        position: absolute;
        background-size: 20px;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hotline-face-ring-img-circle {
        background-color: #186998c9;
        width: 33px;
        height: 33px;
        top: 37px;
        left: 37px;
        position: absolute;
        background-size: 20px;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hotline-zalo-ring-img-circle {
        background-color: #186998c9;
        width: 33px;
        height: 33px;
        top: 37px;
        left: 37px;
        position: absolute;
        background-size: 20px;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .countdown-container {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .countdown-item {
        padding: 5px;
        border: 2px solid #ccc;
        border-radius: 5px;
        text-align: center;
        font-size: 20px;
    }

    .hotline-phone-ring-img-circle .pps-btn-img {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .hotline-phone-ring-img-circle .pps-btn-img img {
        width: 20px;
        height: 20px;
    }

    .hotline-bar {
        position: absolute;
        background: #a33782c9;
        height: 40px;
        width: 180px;
        line-height: 40px;
        border-radius: 3px;
        padding: 0 10px;
        background-size: 100%;
        cursor: pointer;
        transition: all 0.8s;
        -webkit-transition: all 0.8s;
        z-index: 9;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
        border-radius: 50px !important;
        /* width: 175px !important; */
        left: 33px;
        bottom: 37px;
    }

    .hotline-bar>a {
        color: #fff;
        text-decoration: none;
        font-size: 15px;
        font-weight: bold;
        text-indent: 50px;
        display: block;
        letter-spacing: 1px;
        line-height: 40px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .hotline-bar>a:hover,
    .hotline-bar>a:active {
        color: #fff;
    }

    @-webkit-keyframes phonering-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(0.5) skew(1deg);
            -webkit-opacity: 0.1;
        }

        30% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            -webkit-opacity: 0.5;
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: 0.1;
        }
    }

    @-webkit-keyframes phonering-alo-circle-fill-anim {
        0% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.6;
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            opacity: 0.6;
        }

        100% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.6;
        }
    }

    @-webkit-keyframes phonering-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }

        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
        }

        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
        }

        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
        }

        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }
    }

    @media (max-width: 768px) {

        .hotline-face-ring-wrap,
        .hotline-zalo-ring-wrap,
        .hotline-phone-ring-wrap {
            position: fixed;
            bottom: 20px;
            width: 40px;
            /* Adjust the size of the icons */
            height: 40px;
            /* Adjust the size of the icons */
            margin-bottom: 10px;
            /* Space between the icons */
        }

        .hotline-face-ring-wrap {
            bottom: 110px;
        }

        .hotline-zalo-ring-wrap {
            bottom: 160px;
        }

        .hotline-phone-ring-wrap {
            bottom: 60px;
        }

        #messageBox {
            width: 250px;
            left: 10px;
            bottom: 200px;
        }
    }


    .service .service-item:hover .service-img::before {
        height: 100%;
        background: rgba(21, 185, 217, .3);
    }

    .service .service-item .service-img:hover img {
        transform: scale(1.3);
    }

    .service .service-item .service-content {
        position: relative;
        z-index: 2;

    }

    .service .service-item .service-content::before {
        width: 100%;
        height: 8px;
        position: absolute;
        content: "";
        bottom: 0;
        left: 0;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        background: rgba(21, 185, 217, .5);
        transition: 0.5s;
        z-index: 3;
    }

    .service .service-item:hover .service-content::before {
        background: rgba(21, 185, 217, .5);
        height: 100%;
    }

    .service .service-item .service-content .service-content-inner {
        transition: 0.5s;
    }


    .service .service-item:hover .service-content .service-content-inner {
        position: relative;
        color: var(--bs-white) !important;
        z-index: 9;
    }

    .service .service-item:hover .service-content .service-content-inner h5 {
        color: var(--bs-secondary);
    }

    /*** Service End ***/

    /*** About Start ***/
    .about .about-img {
        position: relative;
        overflow: hidden;
        height: 100%;
        border-radius: 10px;
    }

    .about .about-img .about-img-inner {
        position: absolute;
        left: 0;
        bottom: 0;
        border: 10px solid;
        border-color: var(--bs-white) var(--bs-white) var(--bs-white) var(--bs-white);
        border-radius: 50%;

    }

    .about .about-img .about-experience {
        position: absolute;
        top: 125px;
        left: -125px;
        transform: rotate(-90deg);
        background: transparent;
        color: var(--bs-primary);
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 4px;
    }

    /*** About End ***/

    /*** Feature Start ***/
    .feature .feature-item {
        position: relative;
        display: flex;
        border: 1px solid var(--bs-primary);
        border-radius: 10px;
        background: var(--bs-light);
        transition: 0.5s;

    }

    .feature .feature-item::before {
        width: 0;
        height: 100%;
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 10px;
        transition: 0.5s;
    }

    .feature .feature-item:hover::before {
        width: 100%;
        background: var(--bs-primary);
    }

    .feature .feature-item .feature-icon {
        display: inline-flex;
        border-radius: 10px;
        transition: 0.5s;
    }

    .feature .feature-item:hover .feature-icon {
        position: relative;
        z-index: 2;
    }

    .feature .feature-item:hover .feature-content {
        position: relative;
        color: var(--bs-white);
        z-index: 2;
    }

    .feature .feature-item:hover .feature-content h5 {
        color: var(--bs-dark);
    }

    /*** Feature End ***/


    /*** Appointment Start ***/
    .appointment {
        background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(../img/carousel-2.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    .appointment .appointment-form {
        background: rgba(239, 162, 134, 0.3);
    }

    .appointment .appointment-form .btn.btn-primary {
        box-shadow: inset 0 0 0 0 var(--bs-primary);
    }

    .appointment .appointment-form .btn.btn-primary:hover {
        box-shadow: inset 600px 0 0 0 var(--bs-light) !important;
        color: var(--bs-primary) !important;
    }

    /*** Youtube Video start ***/
    .video {
        position: relative;
    }

    .video .btn-play {
        position: absolute;
        z-index: 3;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-sizing: content-box;
        display: block;
        width: 33px;
        height: 44px;
        border-radius: 50%;
        transition: 0.5s;


    }

    .video .btn-play:before {
        content: "";
        position: absolute;
        z-index: 0;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        display: block;
        width: 115px;
        height: 115px;
        background: var(--bs-primary);
        border-radius: 50%;
        animation: pulse-border 1500ms ease-out infinite;
        transition: 0.5s;
    }

    .video .btn-play:after {
        content: "";
        position: absolute;
        z-index: 1;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        display: block;
        width: 100px;
        height: 100px;
        background: var(--bs-secondary);
        border-radius: 50%;
        transition: all 300ms;
    }

    .video .btn-play span {
        display: block;
        position: relative;
        z-index: 3;
        width: 0;
        height: 0;
        border-left: 33px solid var(--bs-white);
        border-top: 22px solid transparent;
        border-bottom: 22px solid transparent;
        margin-left: 5px;
    }

    @keyframes pulse-border {
        0% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
            opacity: 1;
        }

        100% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
            opacity: 0;
        }
    }

    #videoModal {
        z-index: 99999;
    }

    #videoModal .modal-dialog {
        position: relative;
        max-width: 800px;
        margin: 60px auto 0 auto;
    }

    #videoModal .modal-body {
        position: relative;
        padding: 0px;
    }

    #videoModal .close {
        position: absolute;
        width: 30px;
        height: 30px;
        right: 0px;
        top: -30px;
        z-index: 999;
        font-size: 30px;
        font-weight: normal;
        color: #ffffff;
        background: #000000;
        opacity: 1;
    }

    /*** Youtube Video End ***/
    /*** Appointment End ***/


    /*** Team Start ***/
    .team .team-item .team-img {
        position: relative;
        overflow: hidden;
    }

    .team .team-item .team-img::before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        transition: 0.5s;
    }

    .team .team-item .team-img .team-icon {
        position: absolute;
        bottom: -125px;
        left: 50%;
        transform: translateX(-50%);
        transition: 0.5s;
    }

    .team .team-item .team-img:hover .team-icon {
        margin-bottom: 145px;
    }

    .team .team-item:hover .team-img::before {
        background: rgba(21, 185, 217, .3);
    }

    .team .team-item .team-content {
        color: var(--bs-primary);
        transition: 0.5s;
    }

    .team .team-item .team-content h5 {
        color: var(--bs-secondary);
        transition: 0.5s;
    }

    .team .team-item:hover .team-content h5 {
        color: var(--bs-dark);
    }

    .team .team-item:hover .team-content {
        background: var(--bs-primary);
        color: var(--bs-white);
    }

    /*** Team End ***/


    /*** testimonial Start ***/
    .testimonial {
        background: linear-gradient(rgba(21, 185, 217, 0.9), rgba(21, 185, 217, 0.9)), url(../img/carousel-1.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    .testimonial .testimonial-item .testimonial-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        border-radius: 10px;
        background: transparent;
    }

    .testimonial .testimonial-item .testimonial-inner .testimonial-inner-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 5px solid var(--bs-white);
    }

    .testimonial .testimonial-carousel.owl-carousel {
        position: relative;
    }

    .testimonial .testimonial-carousel .owl-nav .owl-prev {
        position: absolute;
        top: 50%;
        left: -20px;
        transform: translateY(-50%);
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        background: var(--bs-light);
        color: var(--bs-primary);
        transition: 0.5s;
    }

    .testimonial .testimonial-carousel .owl-nav .owl-next {
        position: absolute;
        top: 50%;
        right: -20px;
        transform: translateY(-50%);
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        background: var(--bs-light);
        color: var(--bs-primary);
        transition: 0.5s;
    }


    .testimonial .testimonial-carousel .owl-nav .owl-prev:hover,
    .testimonial .testimonial-carousel .owl-nav .owl-next:hover {
        box-shadow: inset 100px 0 0 0 var(--bs-primary) !important;
        color: var(--bs-white) !important;
    }


    @media (max-width: 900px) {
        .testimonial .testimonial-carousel .owl-nav .owl-prev {
            margin-top: -190px;
            margin-left: 40px;
        }

        .testimonial .testimonial-carousel .owl-nav .owl-next {
            margin-top: -190px;
            margin-right: 40px;
        }

    }

    .testimonial-carousel .owl-dots {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .testimonial-carousel .owl-dots .owl-dot {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        margin-right: 15px;
        border: 1px solid var(--bs-white);
        background: transparent;
        transition: 0.5s;
    }

    .testimonial-carousel .owl-dots .owl-dot.active {
        width: 20px;
        height: 20px;
        background: var(--bs-secondary) !important;
    }

    .testimonial-carousel .owl-dots .owl-dot span {
        position: relative;
        margin-top: 50%;
        margin-left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .testimonial-carousel .owl-dots .owl-dot span::after {
        content: "";
        position: absolute;
        top: 50%;
        right: 1px;
        transform: translateY(-50%);
        width: 8px;
        height: 8px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: var(--bs-white);
    }

    .testimonial .testimonial-carousel .testimonial-item .testimonial-inner p.fs-7 {
        transition: 0.5s;
    }

    @media (min-width: 900px) {
        .testimonial .testimonial-carousel .testimonial-item .testimonial-inner p.fs-7 {
            font-size: 20px;
        }
    }


    /* Testimonial Section Title Start */
    .testimonial .section-title {
        max-width: 900px;
        text-align: center;
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
    }

    .testimonial .section-title .sub-style {
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        color: var(--bs-primary);
    }

    .testimonial .section-title .sub-style::before {
        content: "";
        width: 100px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        margin-top: 8px;
        margin-left: -100px;
        border: 1px solid var(--bs-white) !important;
    }

    .testimonial .section-title .sub-style::after {
        content: "";
        width: 50px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        margin-bottom: 5px;
        margin-left: -50px;
        border: 1px solid var(--bs-white) !important;
    }

    .testimonial .section-title .sub-title {
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        color: var(--bs-primary);
    }

    .testimonial .section-title .sub-title::before {
        content: "";
        width: 100px;
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        margin-top: 8px;
        margin-right: -100px;
        border: 1px solid var(--bs-white) !important;
    }

    .testimonial .section-title .sub-title::after {
        content: "";
        width: 50px;
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        margin-bottom: 8px;
        margin-right: -50px;
        border: 1px solid var(--bs-white) !important;
    }

    /*** Testimonial End ***/


    /*** Blog Start ***/
    .blog .blog-item .blog-img {
        position: relative;
        overflow: hidden;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }

    .blog .blog-item .blog-img::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        transition: 0.5s;
    }

    .blog .blog-item .blog-img img {
        transition: 0.5s;
    }

    .blog .blog-item .blog-img:hover img {
        transform: scale(1.3);
    }

    .blog .blog-item:hover .blog-img::after {
        background: rgba(21, 185, 217, .5);
    }

    .blog .blog-item .blog-centent {
        background: var(--bs-light);
        border: 1px solid var(--bs-primary);
        border-top: 0;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    /*** Blog End ***/


    /*** Contact Start ***/
    .contact {
        background: linear-gradient(rgba(21, 185, 217, 0.9), rgba(21, 185, 217, 0.9)), url(../img/carousel-1.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }


    .contact .contact-form .btn.btn-light {
        box-shadow: inset 0 0 0 0 var(--bs-primary);
    }

    .contact .contact-form .btn.btn-light:hover {
        box-shadow: inset 600px 0 0 0 var(--bs-primary) !important;
        color: var(--bs-white) !important;
    }

    .contact .contact-form .form-floating input,
    .contact .contact-form .form-floating textarea,
    .contact .contact-form .form-floating label {
        color: var(--bs-light);
    }



    /* Testimonial Section Title Start */
    .contact .section-title {
        max-width: 900px;
        text-align: center;
        margin: 0 auto;
    }

    .contact .section-title .sub-style {
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        color: var(--bs-primary);
    }

    .contact .section-title .sub-style::before {
        content: "";
        width: 100px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        margin-top: 8px;
        margin-left: -100px;
        border: 1px solid var(--bs-white) !important;
    }

    .contact .section-title .sub-style::after {
        content: "";
        width: 50px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        margin-bottom: 5px;
        margin-left: -50px;
        border: 1px solid var(--bs-white) !important;
    }

    .contact .section-title .sub-title {
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        color: var(--bs-primary);
    }

    .contact .section-title .sub-title::before {
        content: "";
        width: 100px;
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        margin-top: 8px;
        margin-right: -100px;
        border: 1px solid var(--bs-white) !important;
    }

    .contact .section-title .sub-title::after {
        content: "";
        width: 50px;
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        margin-bottom: 8px;
        margin-right: -50px;
        border: 1px solid var(--bs-white) !important;
    }

    @media (max-width: 768px) {
        .d-flex {
            flex-direction: column;
            align-items: center;
        }

        .col-md-7,
        .col-md-5 {
            width: 100%;
            text-align: center;
        }

        .col-md-7,
        .col-md-5 {
            width: 100%;
            text-align: center;
        }

        .col-6 {
            width: 100%;
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
        }

        .col-6 img {
            width: 100%;
            /* Adjust this value as needed */
            height: 100%;
            /* Maintain aspect ratio */
        }

        .container.position-relative.text-center.text-black.mt-5 {
            margin-top: 0;
        }

        .display-6.mt-5 {

            font-size: 1.5rem;
        }

        .lead.mt-5 {
            margin-top: 15px;
            font-size: 1rem;
        }

        .social-icons {
            justify-content: center;
        }

        .button-submit {
            margin-top: 20px;
        }



    }


    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        /* Adjust size as needed */
        height: 40px;
        /* Adjust size as needed */
        text-align: center;
        border-radius: 50%;
        margin: 0 5px;
        /* Adjust spacing as needed */
        background-color: #007bff;
        /* Ensure background color matches */
        color: white;
        /* Ensure text color is white */
    }

    .social-icons a i {
        font-size: 20px;
        /* Adjust icon size as needed */
        line-height: 1;
        /* Ensure line height is appropriate */
    }



    .time-line {
        margin-bottom: 20px;
    }


    /*** Contact End ***/


    /*** Footer Start ***/
    .footer {
        background: linear-gradient(rgba(0, 0, 51, 0.9), rgba(0, 0, 51, 0.9)), url(../img/carousel-2.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }



    .footer .footer-item a {
        line-height: 35px;
        color: var(--bs-body);
        transition: 0.5s;
    }

    .footer .footer-item p {
        line-height: 35px;
    }

    /* .footer .footer-item a:hover {
        letter-spacing: 2px;
        color: var(--bs-primary);
    } */

    /*** Footer End ***/

    /*** copyright Start ***/
    .copyright {
        background: var(--bs-dark) !important;
    }

    @media (max-width: 768px) {
        .h-md-25 {
            height: 25%;
        }

        .w-md-25 {
            width: 25%;
        }

    }

    .footer-map {
        height: 250px;
        width: 100%;
    }

    /*** copyright end ***/
</style>