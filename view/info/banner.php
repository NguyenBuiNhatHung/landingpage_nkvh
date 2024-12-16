<style>
    .nk-banner{
        width: 100%;
        padding-top: 20px;
    }
    .time-line div {
        font-size: 3rem;
        width: 80px;
        height: 80px; 
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #nk-title-dk{
        font-size: 26px;
        margin-top: 20px;
        font-weight: 700;
    }
    @media (max-width: 768px) {
        #nk-title-dk{
            font-size: 15px;
        }
        .time-line div {
            font-size: 2rem;
            width: 60px;
            height: 60px; 
        }
    }

    @media (max-width: 576px) {
        #nk-title-dk{
            font-size: 15px;
        }
        .time-line div {
            font-size: 1rem;
            width: 40px;
            height: 40px; 
           
        }
        .nk-banner{
            padding-top: 35px;
        }
    }
    #gioithieu{
        padding-top: 40px;
    }
    #nk-uudai{
        margin-top: 20px;
        margin-bottom: 10px;
    }

</style>
<div id="gioithieu1"></div>
<img class="nk-banner d-none d-md-block animate__animated animate__fadeInUp rounded" src="../../asset/images/banner.jpg" alt="">
<img class="nk-banner d-block d-md-none animate__animated animate__fadeInUp rounded" src="../../asset/images/banner_dt.jpg" alt="">


<div id="gioithieu" class=" fadeInUp">
    <div id="dk"
        class="col-9 col-md-5 row justify-content-center wow fadeInLeft mx-auto d-flex align-items-center justify-content-center margin-vertical">
        <div class="col-12 col-md-auto mb-2 text-center">
            <a id="nk-title-dk" href="#dathen" 
                class=" btn btn-primary fadeInUp button-submit animate__animated animate__fadeInLeft">ĐĂNG
                KÝ NGAY - NHẬN VÉ MÁY BAY KHỨ HỒI MIỄN PHÍ</a>
        </div>
        <div class="col-12 col-md-auto text-center">
            <p id="nk-uudai" class="h6 animate__animated animate__fadeInLeft">Thời gian có hạn, chỉ giành cho 19 khách hàng đăng ký sớm nhất</p>
            <div class="d-flex flex-row justify-content-center time-line animate__animated animate__fadeInLeft">
                <div class="p-2 border rounded bg-white m-2" id="hours">00</div>
                <div class="p-2 border rounded bg-white m-2" id="minutes">00</div>
                <div class="p-2 border rounded bg-white m-2" id="seconds">00</div>
            </div>
        </div>
    </div>
</div>

<script>
    let countdown = 25200 + 420 + 34;

    function updateCountdown() {
        const hours = Math.floor(countdown / 3600);
        const minutes = Math.floor((countdown % 3600) / 60);
        const seconds = countdown % 60;

        document.getElementById('hours').innerText = String(hours).padStart(2, '0');
        document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
        document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');

        document.getElementById('hours1').innerText = String(hours).padStart(2, '0');
        document.getElementById('minutes1').innerText = String(minutes).padStart(2, '0');
        document.getElementById('seconds1').innerText = String(seconds).padStart(2, '0');

        if (countdown > 0) {
            countdown--;
        } else {
            clearInterval(interval);
            alert("Thời gian ưu đãi đã kết thúc!");
        }
    }

    const interval = setInterval(updateCountdown, 1000);
</script>