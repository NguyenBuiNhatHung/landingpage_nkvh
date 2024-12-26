<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        overflow-x: hidden;
    }

    #nk-dathen {
        margin-top: 40px;
        padding: 40px 20px;
        width: 100%;
        background-image: 
        linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url(../../asset/images/nk_bg_an.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .img-imp {
        width: 100%;
        height: auto;
    }

    .appointment-form {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .form-control,
    .form-select {
        border: 1px solid #007bff;
        background-color: transparent;
        color: black;
    }

    button {
        background-color: #007bff;
        border: none;
        color: white;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    #text-ud {
        font-size: 2rem;
        font-weight: bold;
        color: white;
    }

    #nk-dathen-uudai {
        background-color: #004c76;
        color: white;
        padding: 2%;
        border-radius: 5px;
    }

    @media screen and (max-width: 768px) {
        #text-ud {
            font-size: 1.7rem;
        }
        .appointment-form {
            margin-top: 20px;
        }
    }

    @media screen and (max-width: 465px) {
        #text-ud {
            font-size: 1.2rem;
        }
        .appointment-form {
            padding: 15px;
        }
    }
</style>

<div class="col-12 text-center">

<img class="img-imp col-12 col-md-10 wow animate__animated animate__fadeInUp" src="../../asset/images/csmm.png" alt="">

</div>

<div id="nk-dathen">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-md-4 my-auto wow animate__animated animate__fadeInUp">
            <div id="nk-dathen-uudai" class="col-10 mx-auto text-center mb-3">
                <div id="text-ud" class="display-4">ƯU ĐÃI CHỈ CÒN</div>
                <div class="d-flex justify-content-center">
                    <div class="mx-2 text-center">
                        <h1 id="hours1" class="display-4">00</h1>
                        Giờ
                    </div>
                    <div class="mx-2 text-center">
                        <h1 id="minutes1" class="display-4">00</h1>
                        Phút
                    </div>
                    <div class="mx-2 text-center">
                        <h1 id="seconds1" class="display-4">00</h1>
                        Giây
                    </div>
                </div>
            </div>
        </div>

        <div id="dathen" class="col-lg-3 col-md-4 col-10 wow animate__animated animate__fadeInUp">
            <div class="appointment-form">
                <h5 class="text-center nk-font-weight-700" style="color: rgb(26, 119, 224);">
                    ĐĂNG KÝ ĐỂ NGHIỆM DỊCH VỤ ĐẲNG CẤP TẠI NHA KHOA VIỆT HÀN
                </h5>
                <form method="POST" action="../../controller/register/register.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Họ và tên (*)" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email của bạn" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" class="form-control" placeholder="Quốc gia" required>
                    </div>
                    <div class="form-group">
                        <select name="service" class="form-control" required>
                            <option value="" disabled selected>Dịch vụ cần tư vấn</option>
                            <option value="Trồng răng Implant">Trồng răng Implant</option>
                            <option value="Bọc răng sứ">Bọc răng sứ</option>
                            <option value="Dán răng Veneer">Dán răng Veneer</option>
                            <option value="Niềng răng Invisalign">Niềng răng Invisalign</option>
                            <option value="Khám tổng quát">Khám tổng quát</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="date" name="timedathen" class="form-control" required>
                        <small class="text-danger">(Thời gian đặt hẹn)</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary w-100">ĐẶT HẸN VỚI BÁC SĨ NGAY</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-12 text-center">
    <img class="img-imp wow animate__animated animate__fadeInUp" src="../../asset/images/banggia.png" alt="Bảng giá">
</div>