<div class="elementor-widget-container">
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0787505577" class="pps-btn-img">
                    <img src="img/icon_call.jpg" alt="Gọi điện thoại" width="50">
                </a>
            </div>
        </div>
    </div>
    <div class="hotline-zalo-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-zalo-ring-circle"></div>
            <div class="hotline-zalo-ring-circle-fill"></div>
            <div class="hotline-zalo-ring-img-circle"> <a href="https://zalo.me/1797913117798518130"
                    class="pps-btn-img" id="zaloIcon"> <img src="img/icon_zalo.jpg" alt="Chat Zalo" width="50"> </a>
            </div>
        </div>
    </div> <!-- Message Box -->
    <div id="messageBox" class="container">
        <div class="row no-gutters">
            <div class="col-auto"> <img class="img-messageBox" src="img/logo.jpg" alt=""> </div>
            <div class="col">
                <div class="header-messageBox"> <span>VIET HAN DENTAL</span> <span class="close"
                        onclick="closeMessageBox()">&times;</span> </div>
                <div class="body-messageBox"> Chào anh/chị, Việt Hàn Dental luôn sẵn sàng hỗ trợ! </div>
                <a href="https://zalo.me/1797913117798518130">Gửi tin nhắn</a>
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
                <a href="https://www.facebook.com/NhakhoaVietHanNhaTrangKhanhHoa" class="pps-btn-img">
                    <img src="img/icon_messenger.jpg" alt="Chat Messenger" width="50">

                </a>
            </div>
        </div>

    </div>

</div>