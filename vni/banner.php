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
        top: 97%;
        left: 74%;
        transform: translate(-50%, -50%);
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.25em;
        color: yellow;
        background-color: #2ba1f0;
    }

    .countdown {
        position: absolute;
        top: 85%;
        left: 74%;
        transform: translateX(-50%);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .countdown-box {
        background-color: #007bff;
        color: yellow;
        font-size: 1em;
        padding: 10px;
        border-radius: 5px;
        display: inline-block;
        width: 60px;
        text-align: center;
    }

    .uudai {
        position: absolute;
        top: 92%;
        left: 74%;
        transform: translate(-50%, -50%);
        font-size: 1.25em;
        font-family: Arial, Helvetica, sans-serif;
    }

    .mx-1 {
        margin-left: 5px;
        margin-right: 5px;
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
        .countdown-box{
            display: none;
        }
        .uudai{
            display: none;
        }


    }
</style>
<div id="gioithieu" class="position-relative bg-banner">
    <p style="font-family: Arial, Helvetica, sans-serif;color: yellow;" class="text-center uudai ">Chỉ dành cho 19 khách hàng đăng ký sớm nhất</p>
    <div id="countdown" class="countdown position-absolute d-flex justify-content-center">
        <div class="countdown-box mx-1">00h</div>
        <div class="countdown-box mx-1">00m</div>
        <div class="countdown-box mx-1">00s</div>
    </div>
    <a href="#dathen" class="btn  btn-lg position-absolute center-button ">ĐĂNG KÝ NHẬN ƯU ĐÃI NGAY</a>
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