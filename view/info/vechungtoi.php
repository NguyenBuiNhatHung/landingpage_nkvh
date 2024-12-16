<style>
    .custom-paragraph {
        font-size: 1.2rem;
        margin: 20px 0;
        background-color: #0056b3;
        border-radius: 10px;
        padding: 15px;
    }
    .customer-info {
        text-align: center;
        color: white;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .img-fluid {
        border-radius: 5px;
    }
    .testimonial-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }
    #khachhang{
        margin-top: 40px;
    }
    #nk-vct-nd{
        margin-top: 20px;
    }
    @media (max-width: 768px) {
        .custom-paragraph {
            font-size: 1rem;
        }
        .testimonial-section {
            flex-direction: column;
            align-items: center;
        }
        .col-md-6 {
            width: 100%;
        }
    }
    @media (min-width: 992px) {
        .testimonial-section {
            width: 80%;
            margin: 0 auto;
        }
    }
    #text-vct{
        color:white;
        font-size: 2rem;
        font-weight: 1000;
    }
    @media screen and (max-width: 768px) {
        #text-vct {
            font-size: 1.7rem;
        }
        
       
    }
    @media screen and (max-width: 465px) {
        #text-vct {
            font-size: 1.2rem;
        }
    }
</style>
<div id="khachhang" class="wow">
    <p id="text-vct" class="text-center">KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI?</p>
    <div id="nk-vct-nd" class="testimonial-section">
        <div class="col-md-6 d-flex justify-content-center flex-wrap wow animate__animated animate__fadeInLeft">
            <div class="col-6 d-flex justify-content-center">
                <img class="img-fluid" src="../../asset/images/khach1.jpg" alt="Khách hàng trước điều trị">
            </div>
            <div class="col-6 d-flex justify-content-center">
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