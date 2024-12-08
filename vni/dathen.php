<style>
    .section-box {
        padding: 15%;
        color: rgb(33, 108, 221);
        height: auto;
        /* Ensure the box height adjusts to the image size */
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .section-box {
            padding: 10%;
            /* Adjust padding for smaller screens */
        }

        .countdown-timer {
            margin-top: 20px;
            /* Add margin for better spacing */
        }
    }
</style>
<div style="background: linear-gradient(135deg,#00AEEF, #0072C6 );" class="container-fluid appointment py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
    <div style="color: white;" class="section-title text-start">
        <div style="background-color: red;">
            <p style="color: white; font-family: Arial, Helvetica, sans-serif;"
               class="pe-3 mb-0 display-6 wow fadeInLeft">CƠ SỞ VẬT CHẤT HIỆN ĐẠI, MÁY MÓC CÔNG NGHỆ TIÊN TIẾN</p>
            <h2 style="color: rgb(241, 238, 15); font-family: Arial, Helvetica, sans-serif;"
                class="display-3 mb-4 wow fadeInLeft">NHA KHOA ĐẠT CHUẨN QUỐC TẾ</h2>
            <p style="color: white; font-family: Arial, Helvetica, sans-serif;" class="pe-3 mb-5 display-6 wow fadeInLeft">
                5 STAR CLASS
                <span style="color: gold;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span>
            </p>
        </div>
        <div class="container">
            <div class="row g-4">
                <!-- First Row with 3 Images -->
                <div class="col-4">
                    <div class="section-box">
                        <img src="../img/bs1.jpg" class=" " alt="Image 1">
                    </div>
                </div>
                <div class="col-4">
                    <div class="section-box">
                        <img src="../img/bs2.jpg" class=" " alt="Image 2">
                    </div>
                </div>
                <div class="col-4">
                    <div class="section-box">
                        <img src="../img/bs3.jpg" class=" " alt="Image 3">
                    </div>
                </div>

                <!-- Second Row with 2 Images -->
                <div class="col-4">
                    <div class="section-box">
                        <img src="../img/bs4.jpg" class=" " alt="Image 4">
                    </div>
                </div>
                <div class="col-4">
                    <div class="section-box">
                        <img src="../img/bs5.jpg" class="" alt="Image 5">
                    </div>
                </div>

                <!-- Countdown Timer Column -->
                <div class="col-8 mx-auto my-auto text-center align-items-center countdown-timer" 
                     style="background-color: white; border-radius: 10px; padding: 15px;">
                    <h3 style="font-family: Arial, Helvetica, sans-serif; color:red;">CHỈ CÒN 19 SUẤT ƯU ĐÃI CUỐI CÙNG</h3>
                    <p style="color:green;">Thời hạn đăng ký chỉ còn</p>
                    <div class="d-flex flex-row justify-content-around flex-wrap fadeInUp countdown-container" 
                         style="color: green; font-weight: bold;">
                        <div id="countdown" class="countdown-container">
                            <div id="gio" class="countdown-item">00<br><span>Giờ</span></div>
                            <div id="phut" class="countdown-item">00<br><span>Phút</span></div>
                            <div id="giay" class="countdown-item">00<br><span>Giây</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            <div id="dathen" class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div style="background-color: white;" class="appointment-form rounded p-5">
                    <h3 style="color: rgb(26, 119, 224); text-align: center;font-family: Arial, Helvetica, sans-serif;"
                        class="display-5 mb-4">ĐĂNG KÝ ĐỂ TRẢI NGHIỆM DỊCH VỤ ĐẲNG CẤP TẠI NHA KHOA VIỆT HÀN
                    </h3>
                    <form>
                        <div class="row gy-3 gx-4">
                            <div class="col-xl-12">
                                <input type="text"
                                    class="form-control py-3 border-primary bg-transparent text-white"
                                    placeholder="Họ và tên">
                            </div>
                            <div class="col-xl-12">
                                <input type="text"
                                    class="form-control py-3 border-primary bg-transparent text-white"
                                    placeholder="Số điện thoại">
                            </div>
                            <div class="col-xl-12">
                                <input type="email" class="form-control py-3 border-primary bg-transparent"
                                    placeholder="Email của bạn">
                            </div>
                            <div class="col-xl-12">
                                <input type="text" class="form-control py-3 border-primary bg-transparent"
                                    placeholder="Quốc gia">
                            </div>

                            <div class="col-xl-12">
                                <select name="service" class="form-select py-3 border-primary bg-transparent">
                                    <option value="" disabled selected>Dịch vụ cần tư vấn</option>
                                    <option style="color:black" value="All on 4">All on 4</option>
                                    <option style="color:black" value="All on 6">All on 6</option>
                                    <option style="color:black" value="Titanium Implant">Titanium Implant</option>
                                    <option style="color:black" value="Zicronium Implant">Zicronium Implant</option>
                                    <option style="color:black" value="Full Denture">Full Denture</option>
                                </select>
                            </div>
                            <div class="col-xl-12">
                                <input type="date" class="form-control py-3 border-primary bg-transparent"
                                    placeholder="Thời gian đặt hẹn">
                                <p style="color: red;">(Thời gian đặt hẹn)</p>
                            </div>

                            <div class="col-12">
                                <button type="button" class="btn btn-primary text-white w-100 py-3 px-5">ĐẶT HẸN VỚI BÁC SĨ NGAY</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>