<style>
    .popup {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
        background-image: url('../../asset/images/popup.png');
        background-size: cover;
        background-position: center;
        margin:7% auto;
        padding: 20px;
        border-radius: 15px;
        max-width: 400px;
        position: relative;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        height: 730px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 30px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .form-container {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .form-container input,
    .form-container select {
        padding: 3px;
        font-size: 16px;
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid #ccc;
        border-radius: 10px;
        color: #003a64; /* Adjusted text color */
    }

    .form-container input::placeholder,
    .form-container select::placeholder {
        color: #aaa;
    }

    .form-container input:focus,
    .form-container select:focus {
        background-color: rgba(255, 255, 255, 1);
        outline: none;
    }

    .form-container button {
        padding: 7px 10px;
        background-color: white; /* Changed button color */
        color: #003a64; /* Text color for button */
        border: 1px solid #003a64; /* Border for the button */
        cursor: pointer;
        border-radius: 15px;
        font-weight: bold;
        font-size: 1.2rem;
        transition: background-color 0.3s;
    }

    .form-container button:hover {
        background-color: #f0f0f0; /* Light background on hover */
    }

    .popup-content h2 {
        text-align: center;
        color: #003a64; /* Adjusted header color */
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .popup-content {
            margin:20% auto; /* Adjusted for mobile spacing */
        }
        
        .popup-content h2 {
            font-size: 1.2rem;
        }
        .form-container button {
            font-size: 1rem;
        }
    }
</style>

<button id="myBtn" class="d-none">Open Popup</button>
<div id="myPopup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h2><span style="color:white;font-weight:700" class="yellow">ĐĂNG KÝ NHẬN ƯU ĐÃI NGAY</span></h2>
        <form class="form-container" method="POST" action="../../controller/register/register.php">
            <input type="text" name="name" placeholder="Họ và tên" required>
            <input type="text" name="phone" placeholder="Số điện thoại" required>
            <input type="email" name="email" placeholder="Email của bạn" required>
            <input type="text" name="country" placeholder="Quốc gia" required>
            <select name="service" required>
                <option value="" disabled selected>Dịch vụ cần tư vấn</option>
                <option value="Trồng răng Implant">Trồng răng Implant</option>
                <option value="Bọc răng sứ">Bọc răng sứ</option>
                <option value="Dán răng Veneer">Dán răng Veneer</option>
                <option value="Niềng răng Invisalign">Niềng răng Invisalign</option>
                <option value="Khám tổng quát">Khám tổng quát</option>
            </select>
            <input type="date" name="timedathen" required>
            <p style="color: red;">(Thời gian đặt hẹn)</p>
            <button type="submit" name="submit">ĐĂNG KÝ NGAY</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Hiển thị popup sau 10 giây
        setTimeout(function() {
            document.getElementById("myPopup").style.display = "block";
        }, 10000);

        // Đóng popup khi nhấn vào nút "close"
        var closeBtn = document.querySelector(".popup .close");
        closeBtn.addEventListener("click", function() {
            document.getElementById("myPopup").style.display = "none";
        });

        // Đóng popup khi nhấn ra ngoài khu vực popup
        window.addEventListener("click", function(event) {
            var popup = document.getElementById("myPopup");
            if (event.target === popup) {
                popup.style.display = "none";
            }
        });
    });
</script>