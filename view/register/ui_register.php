<style>
    .casualntc-logo {
        font-size: 36px;
        color: white;
        font-weight: bold;
        text-align: center;
        margin-top: 20px;
    }

    .registration-form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 40px auto;
    }

    .btn-register {
        background-color: #42b72a;
        color: white;
    }
</style>
<div class="casualntc-logo"><u>Casual NTC</u></div>
<div class="registration-form">
    <h2 class="text-center">Tạo tài khoản mới</h2>
    <p class="text-center">Nhanh chóng và dễ dàng.</p>
    <form id="registrationForm" action="../../controller/register/register.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6"> <input type="text" class="form-control" name="first_name" placeholder="Họ"
                    required>
                <div class="invalid-feedback">Họ không được chứa ký tự đặc biệt hoặc số.</div>
            </div>
            <div class="form-group col-md-6"> <input type="text" class="form-control" name="last_name" placeholder="Tên"
                    required>
                <div class="invalid-feedback">Tên không được chứa ký tự đặc biệt hoặc số.</div>
            </div>
        </div>
        <div class="form-group"> <label for="dob">Ngày sinh</label> <input type="date" class="form-control" name="dob"
                id="dob" required>
            <div class="invalid-feedback">Ngày sinh không hợp lệ.</div>
        </div>
        <div class="form-group"> <label for="gender">Giới tính</label>
            <div>
                <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="gender"
                        id="female" value="female" required> <label class="form-check-label" for="female">Nữ</label>
                </div>
                <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="gender"
                        id="male" value="male" required> <label class="form-check-label" for="male">Nam</label> </div>
                <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="gender"
                        id="custom" value="custom" required> <label class="form-check-label" for="custom">Tùy
                        chỉnh</label> </div>
            </div>
        </div>
        <div class="form-group"> <input type="email" class="form-control" name="email" placeholder="Email" required>
            <div class="invalid-feedback">Email không hợp lệ.</div>
        </div>
        <div class="form-group"> <input type="password" class="form-control" name="password" placeholder="Mật khẩu mới"
                required>
            <div class="invalid-feedback">Mật khẩu không hợp lệ.</div>
        </div> <button type="submit" name="submit" class="btn btn-register btn-block" id="submitBtn" disabled>Đăng
            ký</button>
    </form>
    <div class="text-center mt-3"> <a href="../login/login.php">Bạn đã có tài khoản?</a> </div>
</div>
<script> document.getElementById('registrationForm').addEventListener('input', function () { var valid = true; var firstName = document.getElementsByName('first_name')[0]; var lastName = document.getElementsByName('last_name')[0]; var dob = document.getElementsByName('dob')[0]; var email = document.getElementsByName('email')[0]; var password = document.getElementsByName('password')[0]; var gender = document.querySelector('input[name="gender"]:checked'); var namePattern = /^[A-Za-zÀ-ỹà-ỹ\s]+$/; var dobDate = new Date(dob.value); var today = new Date(); if (!namePattern.test(firstName.value)) { firstName.classList.add('is-invalid'); valid = false; } else { firstName.classList.remove('is-invalid'); firstName.classList.add('is-valid'); } if (!namePattern.test(lastName.value)) { lastName.classList.add('is-invalid'); valid = false; } else { lastName.classList.remove('is-invalid'); lastName.classList.add('is-valid'); } if (!dob.value || dobDate > today || dobDate.getFullYear() < 1950) { dob.classList.add('is-invalid'); valid = false; } else { dob.classList.remove('is-invalid'); dob.classList.add('is-valid'); } if (!email.value) { email.classList.add('is-invalid'); valid = false; } else { email.classList.remove('is-invalid'); email.classList.add('is-valid'); } if (!password.value) { password.classList.add('is-invalid'); valid = false; } else { password.classList.remove('is-invalid'); password.classList.add('is-valid'); } if (!gender) { valid = false; } document.getElementById('submitBtn').disabled = !valid; }); document.getElementById('registrationForm').addEventListener('submit', function (event) { var valid = true; var firstName = document.getElementsByName('first_name')[0]; var lastName = document.getElementsByName('last_name')[0]; var dob = document.getElementsByName('dob')[0]; var today = new Date(); var dobDate = new Date(dob.value); var namePattern = /^[A-Za-zÀ-ỹà-ỹ\s]+$/; if (!namePattern.test(firstName.value)) { alert('Họ không được chứa ký tự đặc biệt hoặc số.'); valid = false; } if (!namePattern.test(lastName.value)) { alert('Tên không được chứa ký tự đặc biệt hoặc số.'); valid = false; } if (dobDate > today) { alert('Ngày sinh không được lớn hơn ngày hiện tại.'); valid = false; } else if (dobDate.getFullYear() < 1950) { alert('Năm sinh không được nhỏ hơn 1950.'); valid = false; } if (!valid) { event.preventDefault(); } }); </script>