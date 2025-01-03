<style>
    #text-cl{
        color:white;
        font-size: 2rem;
        font-weight: 1000;
        padding-top: 40px;
        padding-bottom: 20px;
    }
    .cl{
        color:rgb(0, 166, 218);
        min-height: 275px;
        border-radius: 2%;
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.8);
        text-align: justify;
    }
    .owl-cl{
        margin-top: -16px;
    }
    .nk-title-cl{
        text-align: center;
    }
    @media screen and (max-width: 1700px) {
        .cl{
            min-height: 370px;
        }
    }
    @media screen and (max-width: 768px) {
        #text-cl {
            font-size: 1.7rem;
        }
        
        .cl{
            min-height: 290px;
        }
        .nk-title-cl{
            font-size: 15px;
        }
    }

    @media screen and (max-width: 465px) {
        #text-cl {
            font-size: 1.2rem;
        }
        .cl{
            color:rgb(0, 166, 218);
            min-height: 100px;
        }
        .nk-title-cl{
            font-size: 20px;
        }
    }
    .nk-font-weight-700{
        font-weight: 700;
    }
    
    .nk-bg-cl{
        background-image: 
        linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url(../../asset/images/nk_bg_an.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        /* background-attachment: fixed; */
        padding-bottom: 40px;
    }
</style>
<div class="nk-bg-cl text-center col-12 wow animate__animated animate__fadeInLeft">
    <p id="text-cl">5 GIÁ TRỊ CỐT LÕI TẠI NHA KHOA VIỆT HÀN</p>
    <div class="owl-carousel owl-cl col-10 mx-auto">
        <div class="cl p-4 border bg-white shadow custom-margin">
            <h5 class="nk-title-cl nk-font-weight-700">1. Chuyên môn hàng đầu</h5>
            Chúng tôi tự hào vì 100% bác sĩ tại Nha Khoa Việt Hàn đều là những
                chuyên gia chính quy chuyên khoa Răng Hàm Mặt. Điều này đảm bảo rằng mỗi dịch vụ chúng tôi cung cấp đều đạt tiêu chuẩn y tế cao nhất, mang lại sự an tâm cho khách hàng.
        </div>
        <div class="cl p-4 border bg-white shadow custom-margin">
            <h5 class="nk-title-cl nk-font-weight-700">2. Sức khỏe bệnh nhân là ưu tiên tuyệt đối</h5>
            Chúng tôi luôn đặt sức khỏe và sự an toàn của bệnh nhân lên hàng đầu.
                Mọi quyết định, mọi hành động đều hướng tới việc mang lại giải pháp điều trị tốt nhất cho khách hàng.
        </div>
        <div class="cl p-4 border bg-white shadow custom-margin">
            <h5 class="nk-title-cl nk-font-weight-700">3. Tận tâm và trung thực</h5>
            Chúng tôi cam kết phục vụ khách hàng với sự chân thành, minh bạch. Chăm sóc khách hàng như chính người thân trong gia đình mình.
        </div>
        <div class="cl p-4 border bg-white shadow custom-margin">
            <h5 class="nk-title-cl nk-font-weight-700">4. Luôn đổi mới <br> và phát triển</h5>
            Chúng tôi không ngừng học hỏi, cải tiến trang thiết bị và công nghệ.
                Nâng cao năng lực bản thân để đáp ứng nhu cầu ngày càng cao của khách hàng và thị trường.
        </div>
        <div class="cl p-4 border bg-white shadow custom-margin">
            <h5 class="nk-title-cl nk-font-weight-700">5. Đề cao trách nhiệm <br> xã hội</h5>
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