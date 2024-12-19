<style>
    #nk-dathen {
        margin-top: 40px;
    }

    .appointment-form {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .form-control,
    .form-select {
        border: 1px solid #007bff;
        background-color: transparent;
        color: black;
    }

    button {
        background-color: #007bff;
    }

    button:hover {
        background-color: #0056b3;
    }

    #text-ud {
        font-size: 2rem;
        font-weight: 1000;
    }

    #nk-dathen-uudai {
        background-color: #004c76;
        color: white;
        padding: 2%;
        border-radius: 2%;


    }

    @media screen and (max-width: 768px) {
        #text-ud {
            font-size: 1.7rem;
        }
        .appointment-form {
            margin-top: 40px;
        }
        
    }

    @media screen and (max-width: 465px) {
        #text-ud {
            font-size: 1.2rem;
        }
    }
</style>

<div class="col-12 text-center">
    <img class="img-imp col-12 col-md-10 wow animate__animated animate__fadeInUp" src="../../asset/images/csmm.png" alt="">
</div>
<div id="nk-dathen" class="container">
    <div class="row">
        <div class="col-lg-6 my-auto wow animate__animated animate__fadeInUp">
            <div id="nk-dathen-uudai" class="col-8 col-md-6 mx-auto text-center mb-2">
                <div id="text-ud" class="display-4">ƯU ĐÃI CHỈ CÒN</div>
                <div class="d-flex justify-content-center">
                    <div class="mx-2">
                        <h1 id="hours1" class="display-4">00</h1>
                        Giờ
                    </div>
                    <div class="mx-2">
                        <h1 id="minutes1" class="display-4">00</h1>
                        Phút
                    </div>
                    <div class="mx-2">
                        <h1 id="seconds1" class="display-4">00</h1>
                        Giây
                    </div>
                </div>
            </div>
        </div>

        <div id="dathen" class="col-lg-6 col-10 mx-auto wow animate__animated animate__fadeInUp">
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
    <img class="img-imp col-12 col-md-10 wow animate__animated animate__fadeInUp" src="../../asset/images/banggia.png" alt="">
</div>