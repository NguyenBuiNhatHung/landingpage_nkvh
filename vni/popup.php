<button id="myBtn" class="d-none">Open Popup</button>
<div id="myPopup" class="popup col-12">
    <div class="popup-content col-10 col-md-5" style="background-image: url('../img/popup.jpg')"> <span
            class="close">&times;</span>
        <h2><span class="yellow">ĐĂNG KÝ</span><br> NHẬN ƯU ĐÃI NGAY</h2>
        <form class="form-container" method="POST" action="#">
            <input type="text" name="name" placeholder="Họ và tên" required>
            <input type="text" name="phone" placeholder="Số điện thoại" required>
            <input type="email" name="email" placeholder="Email của bạn" required>
            <input type="text" name="country" placeholder="Quốc gia" required>

            <select name="service" required>
                <option value="" disabled selected>Dịch vụ cần tư vấn</option>
                <option style="color:black" value="All on 4">All on 4</option>
                <option style="color:black" value="All on 6">All on 6</option>
                <option style="color:black" value="Titanium Implant">Titanium Implant</option>
                <option style="color:black" value="Zicronium Implant">Zicronium Implant</option>
                <option style="color:black" value="Full Denture">Full Denture</option>
            </select>
            <input type="date" name="timedathen" placeholder="Thời gian đặt hẹn" required>
            <p style="color: red;">(Thời gian đặt hẹn)</p>
            <button type="submit">ĐĂNG KÝ NGAY</button>
        </form>
    </div>
</div>