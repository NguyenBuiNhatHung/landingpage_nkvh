<style>
    #dk {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .time-line .border {
        padding: 10px;
    }

    .time-line .rounded {
        margin: 0 5px;
    }

    .margin-vertical {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .bg-banner {
        background-image: url('../img/banner.jpg');
        background-size: cover;
        background-position: center;
        width: 100%;
        padding-top: 52%;
        position: relative;
    }

    .center-button {
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1em;
        /* Reduced button size for smaller screens */
    }

    .countdown {
        position: absolute;
        top: 93%;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        font-size: 1.2em;
        /* Reduced font size for smaller screens */
        background: rgba(0, 0, 0, 0.5);
        padding: 10px 20px;
        border-radius: 10px;
    }


    /* Responsive adjustments */
    @media (max-width: 768px) {
        .bg-banner {
            background-size: cover;
            background-position: center;
            width: 100%;
            padding-top: 52%;
            position: relative;
        }

        .center-button {
            display: none;
        }

        .countdown {
            display: none;
        }

        #gioithieu p {
            display: none;
        }
    }
</style>
<div id="gioithieu" class="position-relative bg-banner">
    <p style="font-family: Arial, Helvetica, sans-serif;" class="h5 text-center">Chỉ dành cho 19 khách hàng đăng ký sớm nhất</p>
    <div id="countdown" class="countdown position-absolute"></div>
    <a href="#dathen" class="btn btn-primary btn-lg position-absolute center-button ">ĐĂNG KÝ NHẬN ƯU ĐÃI NGAY</a>
</div>

<div style="background:linear-gradient(to right, #add8e6, white, #add8e6);" class="pb-3 fadeInUp pt-3">
    <div id="dk"
        class="col-9 col-md-5 row justify-content-center wow fadeInLeft mx-auto d-flex align-items-center justify-content-center margin-vertical">
        <div class="col-12 col-md-auto mb-2 text-center">
            <a href="#dathen" style="font-family: Arial, Helvetica, sans-serif;"
                class="btn btn-primary  fadeInUp button-submit">ĐĂNG
                KÝ NGAY - NHẬN VÉ MÁY BAY KHỨ HỒI MIỄN PHÍ</a>
        </div>
        <div class="col-12 col-md-auto text-center">
            <p style="font-family:Arial, Helvetica, sans-serif ;" class="h6 fadeInUp">Thời gian ưu đãi có hạn</p>
            <div style="font-family:Arial, Helvetica, sans-serif ;" class="d-flex flex-row justify-content-center fadeInUp time-line">
                <div class="p-2 border rounded">00</div>
                <div class="p-2 border rounded">07</div>
                <div class="p-2 border rounded">34</div>
                <div class="p-2 border rounded">09</div>
            </div>
        </div>
    </div>
</div>