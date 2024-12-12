<style>
    body {
        height: 100%; /* Chiều cao 100% cho html và body */
        margin: 0; /* Bỏ margin mặc định */
    }

    .footer {
        text-align: center; /* Căn giữa nội dung trong footer */
        padding: 20px 0; /* Padding cho footer */
    }

    hr {
        border-top: 1px solid #ccc; /* Đường gạch ngang */
        margin: 20px 0; /* Khoảng cách cho đường gạch ngang */
    }

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
        color: white;
    }

    .footer .footer-item p {
        line-height: 35px;
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
</style>
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <img style="height: auto; width: 50%;" src="../img/logo.jpg" alt="">
                    <p style="font-family: Arial, Helvetica, sans-serif; text-align: justify;">
                        Nha Khoa Việt Hàn được xây
                        dựng đúng theo
                        tiêu chuẩn Hiệp hội Nha Khoa Quốc tế và là Trung
                        Tâm Nha Khoa Nha Trang hiện đại nhất. Đảm bảo quy trình khoa học vô trùng theo tiêu
                        chuẩn
                        Châu Âu, với các phòng điều trị siêu vô trùng đem đến một không gian thoáng đãng an toàn
                        tuyệt đối.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Thông tin liên hệ</h4>
                    <a href=""><i class="bi bi-geo-alt-fill me-2 text-primary"></i>60 Quang Trung - Nha
                        Trang</a>
                    <a href="tel:0787505577"><i class="bi bi-telephone-fill me-2 text-primary"></i>Hotline: 0787
                        505
                        577</a>
                    <a href="tel:0989668818"><i class="bi bi-telephone-fill me-2 text-primary"></i>Tư vấn khách
                        Việt
                        Kiều:
                        0989 66
                        88 18</a>
                    <a href="mailto:booking@nhakhoaviethan.vn">
                        <i class="bi bi-envelope-fill me-2 text-primary"></i>
                        booking@nhakhoaviethan.vn
                    </a>
                    <a href=""><i class="bi bi-clock-fill me-2 text-primary"></i>Thứ 2 - Thứ 7: Từ 8:00 -
                        18:30</a>
                    <a href=""><i class="bi bi-clock-fill me-2 text-primary"></i>Chủ nhật: Từ 8:00 - 17:00</a>
                </div>
                <!-- <div class="d-flex flex-row mt-3 social-icons">
                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1"
                        href="https://www.facebook.com/NhakhoaVietHanNhaTrangKhanhHoa/"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1"
                        href="https://www.instagram.com/nhakhoaviethan.nhatrang/"><i class="fab fa-instagram"></i></a>
                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1"
                        href="https://www.youtube.com/channel/UCQyVTyBNw_IhF2Dnmpd33NA"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="#"><i
                            class="fab fa-whatsapp"></i></a>
                </div> -->

            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Dịch vụ</h4>
                    <a href="#implant"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Trồng răng
                        Implant</a>
                    <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Răng sứ thẩm
                        mỹ</a>
                    <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Phục hình sứ</a>
                    <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Niềng răng Invisaligh</a>
                    <a href="#"><i class="bi bi-arrow-right-circle-fill me-2 text-primary"></i>Điều trị tổng
                        quát</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <iframe
                        src="https://maps.google.com/maps?q=Nha%20Khoa%20Vi%E1%BB%87t%20H%C3%A0n%20Nha%20Trang&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near"
                        class="footer-map" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <hr>
        <p class="mb-0">Power by DEVTTT</p>
    </div>
</footer>