<style>
    body {
        height: 100%;
        margin: 0;
    }

    .footer {
        text-align: start;
        padding: 20px 0;
    }

    hr {
        border-top: 1px solid #ccc;
        margin: 20px 0;
    }

    .footer {
        background-color: #17346b;

    }

    .footer-map {
        height: 350px;
        width: 100%;
        border: none;
    }


    .footer-item {
        margin-top: 20px;
    }


    .footer .footer-item a {
        line-height: 35px;
        color: var(--bs-body);
        transition: 0.5s;
        color: white;
        text-align: start;
    }

    .footer .footer-item p {
        line-height: 35px;
    }

    .btn-gradient-instagram {
        background: linear-gradient(45deg, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5);
        color: white;
        border: none;
    }

    .btn-gradient-instagram:hover {
        background: linear-gradient(45deg, #fa7e1e, #d62976, #962fbf, #4f5bd5, #feda75);
        color: white;
    }

    @media (max-width: 768px) {
        .h-md-25 {
            height: 25%;
        }

        .w-md-25 {
            width: 25%;
        }

        .footer-item {
            padding-left: 24px;
            padding-right: 24px;
        }

        @media (max-width: 450px) {
            .footer-item {
                padding-left: 12px;
                padding-right: 12px;
            }

        }

        .footer-map {
            height: 250px;
            width: 100%;
        }

        #nk-footer-icon {
            justify-content: center;
            align-items: center;
        }
    }
</style>
<div class="container-fluid footer wow fadeIn" data-wow-delay="0.2s">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <img style="height: auto; width: 50%;" src="../../asset/images/logo.jpg" alt="">
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
                    <a href="">
                        <i class="fas fa-map-marker-alt me-2 text-primary"></i> 60 Quang Trung - Nha Trang
                    </a>
                    <a href="tel:0787505577">
                        <i class="fas fa-phone-alt me-2 text-primary"></i> Hotline: 0787 505 577
                    </a>
                    <a href="tel:0989668818">
                        <i class="fas fa-phone-alt me-2 text-primary"></i> Tư vấn khách Việt Kiều: <br>0989 66 88 18
                    </a>
                    <a href="mailto:booking@nhakhoaviethan.vn">
                        <i class="fas fa-envelope me-2 text-primary"></i> booking@nhakhoaviethan.vn
                    </a>
                    <a href="">
                        <i class="fas fa-clock me-2 text-primary"></i> Thứ 2 - Thứ 7: Từ 8:00 - 18:30
                    </a>
                    <a href="">
                        <i class="fas fa-clock me-2 text-primary"></i> Chủ nhật: Từ 8:00 - 17:00
                    </a>

                </div>


            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Dịch vụ</h4>
                    <a href="#implant">
                        <i class="fas fa-arrow-circle-right me-2 text-primary"></i> Trồng răng Implant
                    </a>
                    <a href="#">
                        <i class="fas fa-arrow-circle-right me-2 text-primary"></i> Răng sứ thẩm mỹ
                    </a>
                    <a href="#">
                        <i class="fas fa-arrow-circle-right me-2 text-primary"></i> Phục hình sứ
                    </a>
                    <a href="#">
                        <i class="fas fa-arrow-circle-right me-2 text-primary"></i> Niềng răng Invisaligh
                    </a>
                    <a href="#">
                        <i class="fas fa-arrow-circle-right me-2 text-primary"></i> Điều trị tổng quát
                    </a>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <iframe
                        src="https://maps.google.com/maps?q=Nha%20Khoa%20Vi%E1%BB%87t%20H%C3%A0n%20Nha%20Trang&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near"
                        class="footer-map" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
                <div id="nk-footer-icon" class="d-flex flex-row mt-3 social-icons">
                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1"
                        href="https://www.facebook.com/NhakhoaVietHanNhaTrangKhanhHoa/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn-square btn btn-danger text-white rounded-circle mx-1"
                        href="https://www.youtube.com/channel/UCQyVTyBNw_IhF2Dnmpd33NA">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="btn-square btn btn-light text-primary rounded-circle mx-1" href="https://zalo.me/1797913117798518130">
                        <img src="../../asset/images/zalo.jpg" alt="Zalo" width="20" height="20" style="vertical-align: middle;">
                    </a>
                    <a class="btn-square btn btn-dark text-white rounded-circle mx-1" href="https://www.tiktok.com/@nhakhoa.viethan.nhatrang?lang=vi-VN">
                        <i class="fab fa-tiktok"></i>
                    </a>

                    <a class="btn-square btn btn-gradient-instagram text-white rounded-circle mx-1"
                        href="https://www.instagram.com/nhakhoaviethan.nhatrang/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <hr>
        <p class="mb-0">Designed by DEVTTT</p>
    </div>
</footer>