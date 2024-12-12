<?php $email = $_SESSION["email"]; ?>
<style>
    .casualntc-logo {
        font-size: 36px;
        color: white;
        font-weight: bold;
        text-align: center;
        margin-top: 20px;
    }

    .pin-form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 40px auto;
    }

    .btn-confirm {
        background-color: #42b72a;
        color: white;
    }
</style>
<div class="casualntc-logo"><u>Casual NTC</u></div>
<div class="pin-form">
    <h2 class="text-center">Xác nhận mã PIN</h2>
    <p class="text-center">Mã PIN đã được gửi về <?php echo $email; ?> .</p>
    <form action="../../controller/register/confirm.php" method="POST">
        <div class="form-group"> <label for="entered_pin">Nhập Mã PIN:</label> <input type="text" class="form-control"
                name="entered_pin" placeholder="Mã PIN" required> </div> <button type="submit"
            class="btn btn-confirm btn-block">Xác nhận</button>
    </form>
</div>