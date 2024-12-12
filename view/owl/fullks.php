<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<style>
    .owl-carousel {
        max-width: 1000px;
        /* Kích thước tối đa cho carousel */
        margin: auto;
        /* Căn giữa carousel */
    }

    .item {
        display: flex;
        /* Sử dụng flexbox để căn chỉnh logo và thông tin */
        align-items: center;
        /* Căn giữa theo chiều dọc */
        padding: 20px;
        background: #4A90E2;
        color: white;
        border-radius: 5px;
        height: 200px;
        /* Chiều cao cố định */
    }

    .logo {
        flex: 1;
        /* Chiếm 1 phần không gian */
        text-align: center;
        /* Căn giữa logo */
    }

    .info {
        flex: 2;
        /* Chiếm 2 phần không gian */
        padding-left: 20px;
        /* Khoảng cách giữa logo và thông tin */
    }
</style>
<div class="container mt-5 animate__animated animate__fadeInUp">
    <div class="owl-carousel">
        <div class="item">
            <div class="logo"><strong>Logo 1</strong></div>
            <div class="info">Thông tin cơ bản về sản phẩm 1.</div>
        </div>
        <div class="item">
            <div class="logo"><strong>Logo 2</strong></div>
            <div class="info">Thông tin cơ bản về sản phẩm 2.</div>
        </div>
        <div class="item">
            <div class="logo"><strong>Logo 3</strong></div>
            <div class="info">Thông tin cơ bản về sản phẩm 3.</div>
        </div>
        <div class="item">
            <div class="logo"><strong>Logo 4</strong></div>
            <div class="info">Thông tin cơ bản về sản phẩm 4.</div>
        </div>
        <div class="item">
            <div class="logo"><strong>Logo 5</strong></div>
            <div class="info">Thông tin cơ bản về sản phẩm 5.</div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1, // Hiển thị 1 item
            loop: true, // Tạo vòng lặp
            margin: 10, // Khoảng cách giữa các item
            nav: false, // Hiện nút điều hướng
            autoplay: true, // Tự động chạy
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
                    items: 2 // Hiển thị 3 items cho màn hình lớn 
                } 
            } // Tạm dừng khi hover
        });
    });
</script>