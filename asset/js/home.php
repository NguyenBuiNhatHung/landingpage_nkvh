<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Hiện nội dung sau 2 giây
    setTimeout(function() {
        const loadingIcon = document.querySelector('.loading-icon');
        const mainContent = document.querySelector('.container');

        loadingIcon.style.opacity = '0'; // Làm mờ biểu tượng loading
        
        setTimeout(function() {
            loadingIcon.style.display = 'none'; // Ẩn biểu tượng loading
            mainContent.style.opacity = '1'; // Hiện nội dung chính
        }, 1000); // Thời gian chờ để hoàn tất hiệu ứng
    }, 2000); // Thời gian chờ ban đầu 2000ms (2 giây)
</script>

<script>
    $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1, // Hiển thị 1 item
                loop: true, // Tạo vòng lặp
                margin: 10, // Khoảng cách giữa các item
                nav: false, // Hiện nút điều hướng
                autoplay: true, // Tự động chạy
                autoplayTimeout: 3000, // Thời gian tự động chuyển tiếp
                autoplayHoverPause: true // Tạm dừng khi hover
            });
        });
</script>