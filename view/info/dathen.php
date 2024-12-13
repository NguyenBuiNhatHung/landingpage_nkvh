<style>

    .appointment-form {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .form-control, .form-select {
        border: 1px solid #007bff; /* Màu viền */
        background-color: transparent; /* Nền trong suốt */
        color: black; /* Màu chữ */
    }

    button {
        background-color: #007bff; /* Màu nút */
    }

    button:hover {
        background-color: #0056b3; /* Màu nút khi hover */
    }
    #text-ud{
        color:white;
        font-size: 2rem;
        font-weight: 1000;
    }
    @media screen and (max-width: 768px) {
        #text-ud {
            font-size: 1.7rem; /* Kích thước chữ lớn hơn */
        }
    }

    @media screen and (max-width: 465px) {
        #text-ud {
            font-size: 1.2rem; /* Kích thước chữ lớn hơn */
        }
    }
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 my-auto wow animate__animated animate__fadeInUp">
            <div class="text-center text-white mb-4">
                <p id="text-ud">ƯU ĐÃI CHỈ CÒN</p>
                <div class="d-flex justify-content-center">
                    <div class="mx-3">
                        <h1 id="hours" class="display-5">22</h1>
                        <p>Giờ</p>
                    </div>
                    <div class="mx-3">
                        <h1 id="minutes" class="display-5">09</h1>
                        Phút
                    </div>
                    <div class="mx-3">
                        <h1 id="seconds" class="display-5">52</h1>
                        <p>Giây</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-10 mx-auto wow animate__animated animate__fadeInUp">
            <div class="appointment-form">
                <h5 class="text-center mb-4" style="color: rgb(26, 119, 224);">
                    ĐĂNG KÝ ĐỂ NGHIỆM DỊCH VỤ ĐẲNG CẤP TẠI NHA KHOA VIỆT HÀN
                </h5>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Họ và tên (*)" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email của bạn" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Quốc gia" required>
                    </div>
                    <div class="form-group">
                        <select name="service" class="form-control" required>
                            <option value="" disabled selected>Dịch vụ cần tư vấn</option>
                            <option value="All on 4">All on 4</option>
                            <option value="All on 6">All on 6</option>
                            <option value="Titanium Implant">Titanium Implant</option>
                            <option value="Zicronium Implant">Zicronium Implant</option>
                            <option value="Full Denture">Full Denture</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" required>
                        <small class="text-danger">(Thời gian đặt hẹn)</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">ĐẶT HẸN VỚI BÁC SĨ NGAY</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>