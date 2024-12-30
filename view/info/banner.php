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
        border-radius: 7px;
    }
    #nk-title-dk:hover{
        background-color: white;
        color:#00a6da;
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
        #gioithieu{
        padding-top: 20px;
        padding-bottom: 20px;
        }
    }
    #gioithieu{
        padding-top: 40px;
        padding-bottom: 40px;
    }
    #nk-uudai{
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .nk-bg{
        background-image: 
        linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url(../../asset/images/kientao.png);
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    
    #nk-dv-title{
        width: 100%;
        font-weight: 700;
        text-align: center;
        color: white;
        margin-top: 40px;
        font-size: 30px;
    }
    #nk-dv{
        display: flex;
        flex: row;
        width: 100%;
        height: 500px;
        justify-content: center;
        margin-top: 20px;
    }
    .nk-dv-item-1{
        display: flex;
        flex: row;
        width: 30%;
        height: 100%;
        justify-content: center;
    }
    .nk-dv-item-2{
        display: flex;
        flex:row;
        width: 50%;
        justify-content: center;
    }
    .nk-dv-item-1l{
        margin-right: 10px;
    }
    .nk-dv-item-1r{
        margin-left: 10px;
    }
    .nk-dv-item-2l{
        margin-right: 10px;
    }
    .nk-dv-item-2r{
        margin-left: 10px;
    }
    #nk-dvcs{
        margin-bottom: 40px;
    }
    @media screen and (max-width: 1750px) {
        .nk-dv-item-1{
            width: 40%;
        }
    }

    @media screen and (max-width: 1300px) {
        .nk-dv-item-1{
            width: 45%;
        }
    }

    @media screen and (max-width: 1000px) {
        #nk-dv{
            height: 400px;
        }
    }

    @media screen and (max-width: 800px) {
        #nk-dv{
            height: 330px;
        }
    }

    @media screen and (max-width: 500px) {
        #nk-dv{
            height: 180px;
        }
        #nk-dv-title{
            font-weight: 700;
            font-size: 20px;
        }
        .nk-dv-item-1l{
        margin-right: 7px;
        }
        .nk-dv-item-1r{
            margin-left: 7px;
        }
        .nk-dv-item-2l{
            margin-right: 7px;
        }
        .nk-dv-item-2r{
            margin-left: 7px;
        }
    }
    @media screen and (max-width: 400px) {
        #nk-dv{
            height: 160px;
        }
    }

</style>
<div id="gioithieu1"></div>
<img class="nk-banner animate__animated animate__fadeInUp rounded" src="../../asset/images/banner1.png" alt="">
<!-- <img class="nk-banner d-block d-md-none animate__animated animate__fadeInUp rounded" src="../../asset/images/banner_dienthoai.jpg" alt=""> -->


<div id="gioithieu" class="nk-bg fadeInUp">
    <div id="dk"
        class="col-9 col-md-5 row justify-content-center wow fadeInLeft mx-auto d-flex align-items-center justify-content-center margin-vertical">
        <div class="col-12 col-md-auto mb-2 text-center">
            <a id="nk-title-dk" href="#dathen"
                class="btn btn-primary fadeInUp button-submit animate__animated animate__fadeInLeft">ĐĂNG
                KÝ NGAY - NHẬN VÉ MÁY BAY KHỨ HỒI MIỄN PHÍ</a>
        </div>
        <div class="col-12 col-md-auto text-center">
            <p id="nk-uudai" class="nk-font-weight-700 h6 animate__animated animate__fadeInLeft">Thời gian có hạn, chỉ dành cho 19 khách hàng đăng ký sớm nhất</p>
            <div class="d-flex flex-row justify-content-center time-line animate__animated animate__fadeInLeft">
                <div class="p-2 border rounded bg-white m-2" id="hours">00</div>
                <div class="p-2 border rounded bg-white m-2" id="minutes">00</div>
                <div class="p-2 border rounded bg-white m-2" id="seconds">00</div>
            </div>
        </div>
    </div>  
</div>
<div id="nk-dvcs">
    <h3 id="nk-dv-title">DỊCH VỤ NHA KHOA CHUYÊN SÂU</h3>
    <div id="nk-dv">
        <div class="nk-dv-item-1 nk-dv-item-1l">
            <div class="nk-dv-item-2 nk-dv-item-2l">
                <img class="w-100" src="../../asset/images/dichvu1.jpg" alt="">
            </div>
            <div class="nk-dv-item-2 nk-dv-item-2r">
                <img class="w-100" src="../../asset/images/dichvu2.jpg" alt="">
            </div>
        </div>
        <div class="nk-dv-item-1 nk-dv-item-1r">
            <div class="nk-dv-item-2 nk-dv-item-2l">
                <img class="w-100" src="../../asset/images/dichvu3.jpg" alt="">
            </div>
            <div class="nk-dv-item-2 nk-dv-item-2r">
                <img class="w-100" src="../../asset/images/dichvu4.jpg" alt="">
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