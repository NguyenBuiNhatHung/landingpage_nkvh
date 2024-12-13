<style>
    .custom-paragraph {
        font-size: 1.2rem; /* Kích thước chữ */
        margin: 20px 0;
        background-color: #0056b3; /* Màu nền cho câu nói */
        border-radius: 10px; /* Bo viền */
        padding: 15px; /* Khoảng cách bên trong */
    }
    .customer-info {
        text-align: center;
        color: white;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .img-fluid {
        border-radius: 5px; /* Bo viền hình ảnh */
    }
    .testimonial-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap; /* Cho phép gói nội dung */
    }
    @media (max-width: 768px) {
        .custom-paragraph {
            font-size: 1rem; /* Kích thước chữ nhỏ hơn trên di động */
        }
        .testimonial-section {
            flex-direction: column; /* Chuyển thành cột trên di động */
            align-items: center; /* Căn giữa nội dung */
        }
        .col-md-6 {
            width: 100%; /* Chiếm toàn bộ chiều rộng */
        }
    }
    @media (min-width: 992px) {
        .testimonial-section {
            width: 80%; /* Chiều rộng 80% trên máy tính */
            margin: 0 auto; /* Căn giữa */
        }
    }
    #text-vct{
        color:white;
        font-size: 2rem;
        font-weight: 1000;
    }
    @media screen and (max-width: 768px) {
        #text-vct {
            font-size: 1.7rem; /* Kích thước chữ lớn hơn */
        }
        
       
    }
    @media screen and (max-width: 465px) {
        #text-vct {
            font-size: 1.2rem; /* Kích thước chữ lớn hơn */
        }
    }
</style>
<div class="mt-3 mt-lg-5 wow">
    <p id="text-vct" class="text-center">KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI?</p>
    <div class="testimonial-section">
        <div class="col-md-6 d-flex justify-content-center flex-wrap wow animate__animated animate__fadeInLeft">
            <div class="col-6 d-flex justify-content-center mb-3">
                <img class="img-fluid" src="../../asset/images/khach1.jpg" alt="Khách hàng trước điều trị">
            </div>
            <div class="col-6 d-flex justify-content-center mb-3">
                <img class="img-fluid" src="../../asset/images/khach2.jpg" alt="Khách hàng sau điều trị">
            </div>
        </div>
        <div class="col-md-6 text-center wow animate__animated animate__fadeInRight">
            <p class="px-3 custom-paragraph">Bác sĩ Tính chữa trị tốt, nhân viên nhiệt tình. Phòng khám sạch sẽ. Máy
                dụng cụ để bác sĩ làm việc thấy rất chỉnh chu, sạch. Nhân viên phụ tá nhẹ nhàng với mình. Cảm giác thoải
                mái khi đến đây. Tôi rất vui và sẽ giới thiệu người thân, bạn bè đến đây ủng hộ.</p>
            <div class="customer-info">
                <p class="font-weight-bold mb-1">Chú Hoàng Văn Sửu</p>
                <p class="mb-1">64 tuổi, Nha Trang</p>
            </div>
        </div>
        
    </div>
</div>