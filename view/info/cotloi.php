<style>
    #text-cl{
        color:white;
        font-size: 2rem;
        font-weight: 1000;
    }
    .cl{
        color:rgb(0, 166, 218);
        min-height: 300px;
        border-radius: 2%;
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.8);
    }
    @media screen and (max-width: 768px) {
        #text-cl {
            font-size: 1.7rem; /* Kích thước chữ lớn hơn */
        }
        
        .cl{
            color:rgb(0, 166, 218);
        }
    }

    @media screen and (max-width: 465px) {
        #text-cl {
            font-size: 1.2rem; /* Kích thước chữ lớn hơn */
        }
    }
</style>
<div class="pb-5 text-center mt-3 mt-md-5 col-12">
    <p id="text-cl">5 GIÁ TRỊ CỐT LÕI TẠI NHA KHOA VIỆT HÀN</p>
    <div class="owl-carousel owl-cl col-10 mx-auto">
        <div class="cl border bg-white p-3 shadow cl custom-margin">
            <h5 style="font-family: Arial, Helvetica, sans-serif;">1. Chuyên môn hàng đầu</h5>
            Chúng tôi tự hào vì 100% bác sĩ tại Nha Khoa Việt Hàn đều là những
                chuyên gia chính quy chuyên khoa Răng Hàm Mặt. Điều này đảm bảo rằng mỗi dịch vụ chúng tôi cung cấp đều đạt tiêu chuẩn y tế cao nhất, mang lại sự an tâm cho khách hàng.
        </div>
        <div class="cl border bg-white p-3 shadow cl custom-margin">
            <h5 style="font-family: Arial, Helvetica, sans-serif;">2. Sức khỏe bệnh nhân là ưu tiên tuyệt đối</h5>
            Chúng tôi luôn đặt sức khỏe và sự an toàn của bệnh nhân lên hàng đầu.
                Mọi quyết định, mọi hành động đều hướng tới việc mang lại giải pháp điều trị tốt nhất cho khách hàng.
        </div>
        <div class="cl border bg-white p-3 shadow cl custom-margin">
            <h5 style="font-family: Arial, Helvetica, sans-serif;">3. Tận tâm và trung thực</h5>
            Chúng tôi cam kết phục vụ khách hàng với sự chân thành, minh bạch. Chăm sóc khách hàng như chính người thân trong gia đình mình.
        </div>
        <div class="cl border bg-white p-3 shadow cl custom-margin">
            <h5 style="font-family: Arial, Helvetica, sans-serif;">4. Luôn đổi mới và phát triển</h5>
            Chúng tôi không ngừng học hỏi, cải tiến trang thiết bị và công nghệ.
                Nâng cao năng lực bản thân để đáp ứng nhu cầu ngày càng cao của khách hàng và thị trường.
        </div>
        <div class="cl border bg-white p-3 shadow cl custom-margin">
            <h5 style="font-family: Arial, Helvetica, sans-serif;">5. Đề cao trách nhiệm xã hội</h5>
           Chúng tôi tự hào khi được đóng góp tích cực vào cộng đồng và xã hội. Bằng việc thực hiện các hoạt động
                thiện nguyện, chia sẻ yêu thương với những hoàn cảnh khó khăn.
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".owl-cl").owlCarousel({
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
                    items: 5 // Hiển thị 3 items cho màn hình lớn 
                }
            }
        });
    });
</script>