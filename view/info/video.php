<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<style>
    .owl-vd {
        max-width: 1300px;
        align-items: center;
        padding-bottom: 40px;
    }

    .item {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 12px;
        background: #004c76;
        border-radius: 5px;
    }

    .item iframe {
        width: 100%;
        height: auto;
    }
    #text-tn{
        color:white;
        font-size: 2rem;
        font-weight: 1000;
        padding-top: 40px;
        padding-bottom: 4px;
    }
    @media screen and (max-width: 768px) {
        #text-tn {
            font-size: 1.7rem; /* Kích thước chữ lớn hơn */
        }
    }

    @media screen and (max-width: 465px) {
        #text-tn {
            font-size: 1.2rem; /* Kích thước chữ lớn hơn */
        }
    }
    .nav-btn {
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
    .prev-slide {
        left: -8px;
    }
    .next-slide {
        right: -8px;
    }
</style>
<div class="container wow animate__animated animate__fadeInUp text-center">
    <p id="text-tn">TRẢI NGHIỆM CỦA KHÁCH HÀNG</p>
    <div class="owl-carousel owl-vd">
        <div class="item">
            <iframe src="https://www.youtube.com/embed/eQLMYtN1mYs" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe src="https://www.youtube.com/embed/_PoKw-rnCYg" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe src="https://www.youtube.com/embed/CYWOcJ7q5VM" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe src="https://www.youtube.com/embed/VBfFonj_BWY" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe src="https://www.youtube.com/embed/CzWkYoqz2Kw" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe src="https://www.youtube.com/embed/JQX2d6N6Ye0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe src="https://www.youtube.com/embed/e7RpXUUAEP4" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".owl-vd").owlCarousel({
            items: 1, // Hiển thị 1 item
            loop: true, // Tạo vòng lặp
            margin: 10, // Khoảng cách giữa các item
            nav: true, // Hiện nút điều hướng
            navText: ["<div class='nav-btn prev-slide'>&lt;</div>", "<div class='nav-btn next-slide'>&gt;</div>"],
            autoplay: false, // Tự động chạy
            autoplayTimeout: 3000, // Thời gian tự động chuyển tiếp
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1 // Hiển thị 1 item cho màn hình nhỏ 
                }, 
                600: { 
                    items: 2 // Hiển thị 2 items cho màn hình trung bình 
                }, 
                1000: { 
                    items: 3 // Hiển thị 3 items cho màn hình lớn 
                } 
            }
        });
    });
</script>