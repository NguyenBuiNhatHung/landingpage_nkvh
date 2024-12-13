<style>
    .popup {
        display: none;
        position: fixed;
        z-index: 9;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
        background-image: url('../../asset/images/popup.jpg');
        background-size: cover;
        background-position: center;
        margin: 10% auto;
        padding: 20px;
        border-radius: 15px;
        width: 90%;
        max-width: 500px;
        position: relative;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
        padding: 12px;
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
        padding: 12px 20px;
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
            margin-top: 15%; /* Adjusted for mobile spacing */
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
        <h2><span class="yellow">ĐĂNG KÝ NHẬN ƯU ĐÃI NGAY</span></h2>
        <form class="form-container" method="POST" action="#">
            <input type="text" name="name" placeholder="Họ và tên" required>
            <input type="text" name="phone" placeholder="Số điện thoại" required>
            <input type="email" name="email" placeholder="Email của bạn" required>
            <input type="text" name="country" placeholder="Quốc gia" required>
            <select name="service" required>
                <option value="" disabled selected>Dịch vụ cần tư vấn</option>
                <option value="All on 4">All on 4</option>
                <option value="All on 6">All on 6</option>
                <option value="Titanium Implant">Titanium Implant</option>
                <option value="Zicronium Implant">Zicronium Implant</option>
                <option value="Full Denture">Full Denture</option>
            </select>
            <input type="date" name="timedathen" required>
            <p style="color: red;">(Thời gian đặt hẹn)</p>
            <button type="submit">ĐĂNG KÝ NGAY</button>
        </form>
    </div>
</div>

<script>
    window.onload = function() {
        setTimeout(function() {
            document.getElementById("myBtn").click();
        }, 10); // Show popup after 10 seconds
    }

    var popup = document.getElementById("myPopup");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        popup.style.display = "block";
    }

    span.onclick = function() {
        popup.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }
</script>