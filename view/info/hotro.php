<style>
    .service .service-item {
        box-shadow: 0 0 45px rgba(0, 0, 0, .2);
    }

    .service .service-item .service-img {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .service .service-item .service-img img {
        transition: 0.5s;
    }

    .service .service-item .service-img::before {
        width: 100%;
        height: 0;
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        transition: 0.5s;
        z-index: 5;

    }

    .hotline-face-ring-wrap {
        position: fixed;
        bottom: 80px;
        left: 0px;
        z-index: 999999;
    }

    .hotline-zalo-ring-wrap {
        position: fixed;
        bottom: 160px;
        left: 0px;
        z-index: 999999;
    }

    .hotline-phone-ring-wrap {
        position: fixed;
        bottom: 0px;
        left: 0px;
        z-index: 999999;
    }

    .hotline-phone-ring {
        position: relative;
        visibility: visible;
        background-color: transparent;
        width: 110px;
        height: 110px;
        cursor: pointer;
        z-index: 11;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        transition: visibility .5s;
        left: 0;
        bottom: 0;
        display: block;
    }

    .hotline-phone-ring-circle {
        width: 85px;
        height: 85px;
        top: 10px;
        left: 10px;
        position: absolute;
        background-color: transparent;
        border-radius: 100%;
        border: 2px solid #186998;
        -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        opacity: 0.5;
    }

    .hotline-face-ring-circle {
        width: 85px;
        height: 85px;
        top: 10px;
        left: 10px;
        position: absolute;
        background-color: transparent;
        border-radius: 100%;
        border: 2px solid #186998;
        -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        opacity: 0.5;
    }

    .hotline-zalo-ring-circle {
        width: 85px;
        height: 85px;
        top: 10px;
        left: 10px;
        position: absolute;
        background-color: transparent;
        border-radius: 100%;
        border: 2px solid #186998;
        -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        opacity: 0.5;
    }

    .hotline-phone-ring-circle-fill {
        width: 55px;
        height: 55px;
        top: 25px;
        left: 25px;
        position: absolute;
        background-color: #186998;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }

    .hotline-face-ring-circle-fill {
        width: 55px;
        height: 55px;
        top: 25px;
        left: 25px;
        position: absolute;
        background-color: #186998;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }

    .hotline-zalo-ring-circle-fill {
        width: 55px;
        height: 55px;
        top: 25px;
        left: 25px;
        position: absolute;
        background-color: #186998;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }

    .hotline-phone-ring-img-circle {
        background-color: #186998c9;
        width: 33px;
        height: 33px;
        top: 37px;
        left: 37px;
        position: absolute;
        background-size: 20px;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hotline-face-ring-img-circle {
        background-color: #186998c9;
        width: 33px;
        height: 33px;
        top: 37px;
        left: 37px;
        position: absolute;
        background-size: 20px;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hotline-zalo-ring-img-circle {
        background-color: #186998c9;
        width: 33px;
        height: 33px;
        top: 37px;
        left: 37px;
        position: absolute;
        background-size: 20px;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .countdown-container {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .countdown-item {
        padding: 5px;
        border: 2px solid #ccc;
        border-radius: 5px;
        text-align: center;
        font-size: 20px;
    }

    .hotline-phone-ring-img-circle .pps-btn-img {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .hotline-phone-ring-img-circle .pps-btn-img img {
        width: 20px;
        height: 20px;
    }

    .hotline-bar {
        position: absolute;
        background: #a33782c9;
        height: 40px;
        width: 180px;
        line-height: 40px;
        border-radius: 3px;
        padding: 0 10px;
        background-size: 100%;
        cursor: pointer;
        transition: all 0.8s;
        -webkit-transition: all 0.8s;
        z-index: 9;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
        border-radius: 50px !important;
        /* width: 175px !important; */
        left: 33px;
        bottom: 37px;
    }

    .hotline-bar>a {
        color: #fff;
        text-decoration: none;
        font-size: 15px;
        font-weight: bold;
        text-indent: 50px;
        display: block;
        letter-spacing: 1px;
        line-height: 40px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .hotline-bar>a:hover,
    .hotline-bar>a:active {
        color: #fff;
    }

    @-webkit-keyframes phonering-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(0.5) skew(1deg);
            -webkit-opacity: 0.1;
        }

        30% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            -webkit-opacity: 0.5;
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: 0.1;
        }
    }

    @-webkit-keyframes phonering-alo-circle-fill-anim {
        0% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.6;
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            opacity: 0.6;
        }

        100% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.6;
        }
    }

    @-webkit-keyframes phonering-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }

        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
        }

        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
        }

        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
        }

        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }
    }

    @media (max-width: 768px) {

        .hotline-face-ring-wrap,
        .hotline-zalo-ring-wrap,
        .hotline-phone-ring-wrap {
            position: fixed;
            bottom: 20px;
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }

        .hotline-face-ring-wrap {
            bottom: 110px;
        }

        .hotline-zalo-ring-wrap {
            bottom: 160px;
        }

        .hotline-phone-ring-wrap {
            bottom: 60px;
        }

        #messageBox {
            width: 200px;
            position: fixed;
            bottom: 185px !important;
            left: 10px;
        }

    }


    .service .service-item:hover .service-img::before {
        height: 100%;
        background: rgba(21, 185, 217, .3);
    }

    .service .service-item .service-img:hover img {
        transform: scale(1.3);
    }

    .service .service-item .service-content {
        position: relative;
        z-index: 2;

    }

    .service .service-item .service-content::before {
        width: 100%;
        height: 8px;
        position: absolute;
        content: "";
        bottom: 0;
        left: 0;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        background: rgba(21, 185, 217, .5);
        transition: 0.5s;
        z-index: 3;
    }

    .service .service-item:hover .service-content::before {
        background: rgba(21, 185, 217, .5);
        height: 100%;
    }

    .service .service-item .service-content .service-content-inner {
        transition: 0.5s;
    }


    .service .service-item:hover .service-content .service-content-inner {
        position: relative;
        color: var(--bs-white) !important;
        z-index: 9;
    }

    .service .service-item:hover .service-content .service-content-inner h5 {
        color: var(--bs-secondary);
    }

    #messageBox {
        position: fixed;
        bottom: 260px;
        left: 20px;
        width: 350px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        z-index: 1000;
        display: none;
        opacity: 0;
        transition: opacity 1s ease;
    }

    #messageBox.show {
        display: block;
        opacity: 1;
        /* Fully visible */
    }

    .img-messageBox {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-top: 50px;
    }

    .header-messageBox {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        color: black;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .header-messageBox span {
        font-weight: bold;
        font-size: 14px;
    }

    .header-messageBox .close {
        font-size: 20px;
        cursor: pointer;
        margin-left: auto;
    }

    .body-messageBox {
        padding: 10px;
        font-size: 14px;
        color: #333;
    }

    #messageBox a {
        display: block;
        text-align: center;
        color: #00AEEF;
        padding: 10px;
        border-radius: 0 0 10px 10px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    #messageBox a:hover {
        transform: scale(1.2);
    }
</style>
<div class="elementor-widget-container">
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0787505577" class="pps-btn-img">
                    <img src="../../asset/images/icon_call.jpg" alt="Gọi điện thoại" width="50">
                </a>
            </div>
        </div>
    </div>
    <div class="hotline-zalo-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-zalo-ring-circle"></div>
            <div class="hotline-zalo-ring-circle-fill"></div>
            <div class="hotline-zalo-ring-img-circle"> <a href="https://www.facebook.com/NhakhoaVietHanNhaTrangKhanhHoa"
                    class="pps-btn-img" id="zaloIcon"> <img src="../../asset/images/icon_messenger.jpg" alt="Chat Zalo" width="50"> </a>
            </div>
        </div>
    </div> <!-- Message Box -->
    <div id="messageBox" class="container">
        <div class="row no-gutters">
            <div class="col-auto"> <img class="img-messageBox" src="../../asset/images/logo.jpg" alt=""> </div>
            <div class="col">
                <div class="header-messageBox"> <span>VIET HAN DENTAL</span> <span class="close"
                        onclick="closeMessageBox()">&times;</span> </div>
                <div class="body-messageBox"> Chào anh/chị, Việt Hàn Dental luôn sẵn sàng hỗ trợ! </div>
                <a href="https://www.facebook.com/NhakhoaVietHanNhaTrangKhanhHoa">Gửi tin nhắn</a>
            </div>
        </div>
    </div>
    <script>
        function showMessageBox() {
            const messageBox = document.getElementById('messageBox');
            messageBox.classList.add('show');
        }

        function closeMessageBox() {
            const messageBox = document.getElementById('messageBox');
            messageBox.classList.remove('show');
            setTimeout(showMessageBox, 60000);
        }

        document.getElementById('zaloIcon').onclick = function(event) {
            event.preventDefault();
            showMessageBox();
        }

        window.onload = function() {
            setTimeout(showMessageBox, 15000);
        }
    </script>



    <div class="hotline-face-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-face-ring-circle"></div>
            <div class="hotline-face-ring-circle-fill"></div>
            <div class="hotline-face-ring-img-circle">
                <a href="https://zalo.me/1797913117798518130" class="pps-btn-img">
                    <img src="../../asset/images/icon_zalo.jpg" alt="Chat Messenger" width="50">

                </a>
            </div>
        </div>

    </div>

</div>