<style>
        /* phần menu */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px; /* Giới hạn chiều rộng */
        margin-top: 20px; /* Khoảng cách từ trên cùng */
        opacity: 0; /* Đặt độ mờ ban đầu cho nội dung */
        transition: opacity 1s ease; /* Hiệu ứng chuyển tiếp khi hiển thị */
    }

    .nav-link {
        color: blue; /* Thay đổi màu chữ thành màu xanh */
        font-size: 125%;
        font-weight: 700;
    }

    .nav-link:hover {
        color: darkblue; /* Thay đổi màu chữ khi hover */
    }

    .custom-navbar {
        background-color: #fff; /* Màu nền trắng */
    }

    /* Biểu tượng loading */
    .loading-icon {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw; /* Chiếm toàn bộ chiều rộng */
        height: 100vh; /* Chiếm toàn bộ chiều cao */
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white; /* Nền trắng */
        z-index: 9999; /* Để đảm bảo loading nằm trên cùng */
        transition: opacity 1s ease; /* Hiệu ứng biến mất */
    }

    .loading-icon i {
        font-size: 800%; /* Kích thước biểu tượng lớn */
        color: deepskyblue; /* Màu xanh nước biển */
    }
    .owl-carousel{
        height: 1000px;
    }

    .item {
        height: 90%;
        position: relative; /* Để có thể chèn hình ảnh đè lên nếu cần */
        text-align: left; /* Căn trái cho nội dung */
    }
    .carousel-caption {
        position: absolute;
        top: 50%; /* Đặt ở giữa theo chiều dọc */
        left: 0; /* Đặt ở bên trái */
        transform: translateY(-50%); /* Canh giữa theo chiều dọc */
        width: 50%; /* Chiếm một nửa chiều rộng bên trái */
        padding: 20px; /* Thêm khoảng cách bên trong */
        color: white;
    }
    .btn-primary {
    background-color: #223a66; /* Màu nền ban đầu */
    border: none; /* Bỏ viền */
    text-align: center;
    color: white; /* Màu chữ */
    position: relative; /* Để sử dụng cho hiệu ứng */
    border-radius: 50%; /* Đường viền tròn */
    padding: 15px 30px; /* Tăng kích thước nút */
    font-size: 16px; /* Kích thước chữ */
    transition: background-color 1s ease; /* Hiệu ứng chuyển màu nền */
}

.btn-primary:hover {
    background-color: #1aba9e; /* Chuyển thành màu xanh lá cây khi hover */
    color: white; /* Giữ màu chữ khi hover */
}
@media only screen and (max-width 768px) {
    .item img {
        height: 1000px; /* Tăng chiều cao tối đa trên màn hình di động */
        object-fit: cover; /*Đảm bảo hình ảnh bao phủ */
        object-position: right; /* Chỉ lấy phần bên phải của hình ảnh */
    }
    .owl-carousel{
        height: 1000px;
    }
}
</style>

