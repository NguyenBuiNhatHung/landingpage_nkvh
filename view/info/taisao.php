<style>
    .hover-effect {
        position: relative;
        /* Để các phần tử con có thể được đặt tương đối */
        overflow: hidden;
        /* Giúp ẩn các phần tử bên ngoài */
        transition: transform 0.3s ease;
        /* Thêm hiệu ứng chuyển tiếp cho ảnh */
    }

    .hover-effect:hover {
        transform: scale(1.05);
        /* Tăng kích thước ảnh lên 5% khi hover */
    }

    .overlay {
        position: absolute;
        /* Đặt lớp phủ lên trên hình ảnh */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.9);
        /* Lớp phủ trắng với độ trong suốt */
        display: flex;
        /* Sử dụng flex để căn giữa nội dung */
        align-items: center;
        /* Căn giữa theo chiều dọc */
        justify-content: center;
        /* Căn giữa theo chiều ngang */
        opacity: 1;
        /* Bắt đầu với độ mờ 1 */
        transition: opacity 0.3s ease;
        /* Hiệu ứng chuyển tiếp cho lớp phủ */
        border-radius: 1%;
    }

    .hover-effect:hover .overlay {
        opacity: 0;
        /* Hiện lớp phủ khi hover, làm biến mất chữ */
    }

    .icon-key {
        text-align: center;
        /* Căn giữa văn bản trong icon */
        color: #0072C6;
        /* Màu chữ cho icon */
        font-size: 1.2rem;
        /* Kích thước chữ cho icon */
        margin-bottom: 10px;
        /* Khoảng cách dưới icon */
    }

    .overlay-text {
        color: #0072C6;
        /* Màu chữ cho văn bản */
        padding: 10px;
        /* Khoảng cách cho văn bản */
        transition: opacity 0.3s ease;
        text-align: justify;
        /* Hiệu ứng chuyển tiếp cho chữ */
    }

    .hover-effect:hover .icon-key,
    .hover-effect:hover .overlay-text {
        opacity: 0;
        /* Khi hover, chữ biến mất */
    }
    #text-ts{
        color:white;
        font-size: 2rem;
        font-weight: 1000;
    }

    @media screen and (max-width: 768px) {
        .overlay-text{
            font-size: 1.3rem;
        }
        #text-ts {
            font-size: 1.7rem; /* Kích thước chữ lớn hơn */
        }
    }

    @media screen and (max-width: 465px) {
        .overlay-text{
            font-size: 0.6rem;
            content: justify;
        }
        .icon-key{
            font-size: 0.8rem;
        }
        #text-ts {
            font-size: 1.1rem; /* Kích thước chữ lớn hơn */
        }
    }
</style>
<div class="wow fadeInRight col-12">
    <h2 style="color:white;"
        class="col-12 text-center"> <p id="text-ts">TẠI SAO NÊN CHỌN NHA KHOA VIỆT HÀN</p>
    </h2>
    <div class="container">
        <div class="row justify-content-around wow animate__animated animate__fadeInRight">
            <div class="col-lg-5 col-10 mt-lg-5 mt-3 hover-effect">
                <div class="overlay d-flex flex-column">
                    <div class="icon-key"> <i class="fas fa-user-md"></i> <span>ĐỘI NGŨ BÁC SĨ</span> </div>
                    <div class="overlay-text">Tại Nha Khoa Việt Hàn, Bác sĩ tốt nghiệp chính quy ngành Răng Hàm Mặt
                        tại những trường Đại học uy tín nhất tại Việt Nam về ngành y, như Đại Học Y Dược Thành Phố
                        Hồ Chí Minh, Đại Học Y Dược Hà Nội, Đại Học Y Dược Huế.
                        Với nhiều năm kinh nghiệm, liên tục học tập nâng cao nghiệp vụ. Các bác sĩ của chúng tôi làm
                        việc tận tâm với bệnh nhân, đề cao y đức và nhận được rất nhiều sự yêu mến của khách hàng
                        tại Nha Trang, Khánh Hòa cũng như khách hàng Quốc tế.</div>
                </div> <img src="../../asset/images/ck1.jpg" class="img-fluid" alt="Ảnh Cam Kết 1">
            </div>
            <div class="col-lg-5 col-10 mt-md-5 mt-4 hover-effect">
                <div class="overlay d-flex flex-column">
                    <div class="icon-key"> <i class="fas fa-users"></i> <span>CHĂM SÓC KHÁCH HÀNG 24/7</span> </div>
                    <div class="overlay-text"> Tại Nha khoa Việt Hàn, chúng tôi luôn sẵn sàng hỗ trợ khách hàng mọi lúc,
                        mọi nơi với dịch vụ chăm sóc khách hàng 24/7. Đội ngũ tư vấn viên tận tâm,
                        chuyên nghiệp sẽ giúp bạn giải đáp thắc mắc, đặt lịch hẹn,
                        hoặc hỗ trợ các trường hợp khẩn cấp như đau răng hay chấn thương răng miệng.
                        Chúng tôi cam kết theo sát hành trình điều trị của khách hàng,
                        nhắc lịch tái khám và lắng nghe ý kiến sau dịch vụ để mang đến trải nghiệm chăm sóc tốt nhất.
                    </div>
                </div> <img src="../../asset/images/ck2.jpg" class="img-fluid" alt="Ảnh Cam Kết 2">
            </div>
        </div>
        <div class="row justify-content-around wow animate__animated animate__fadeInLeft">
            <div class="col-lg-5 col-10 mt-md-5 mt-4 hover-effect">
                <div class="overlay d-flex flex-column">
                    <div class="icon-key"> <i class="fas fa-cogs"></i> <span>CÔNG NGHỆ, MÁY MÓC HIỆN ĐẠI</span> </div>
                    <div class="overlay-text"> Nha khoa Việt Hàn luôn chú trọng học hỏi, cập nhật và ứng dụng kỹ thuật
                        hiện đại vào quá trình điều trị (như hệ thống máy chụp film CT Conbeam Kavo , máy Piezotome,
                        công nghệ scan răng 3Shape Trios, …) giúp rút ngắn thời gian cũng như đảm bảo tính chính xác, an
                        toàn và thoải mái cho bệnh nhân.</div>
                </div> <img src="../../asset/images/ck3.jpg" class="img-fluid" alt="Ảnh Cam Kết 3">
            </div>
            <div class="col-lg-5 col-10 mt-md-5 mt-4 hover-effect">
                <div class="overlay d-flex flex-column">
                    <div class="icon-key"> <i class="fas fa-money-bill-wave"></i> <span>CHI PHÍ ĐIỀU TRỊ HỢP LÝ</span>
                    </div>
                    <div class="overlay-text">Nha khoa Việt Hàn cam kết luôn mang đến dịch vụ nha khoa chất lượng cao
                        với chi phí hợp lý, minh bạch và phù hợp với mọi khách hàng. Với bảng giá rõ ràng, hỗ trợ trả
                        góp 0% lãi suất và nhiều ưu đãi hấp dẫn, giúp Cô Chú/ Anh Chị an tâm chăm sóc răng miệng mà
                        không lo gánh nặng tài chính.</div>
                </div> <img src="../../asset/images/ck4.jpg" class="img-fluid" alt="Ảnh Cam Kết 4">
            </div>
        </div>
        <div class="row justify-content-around wow animate__animated animate__fadeInUp mt-md-5 mt-4">
            <div class="col-12 text-center">
                <div class="col-12 text-center">
                    <a href="#dathen" class="bg-white p-3 p-md-3 rounded font-weight-bolder">
                        ĐẶT HẸN NGAY
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>