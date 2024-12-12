<style>
   .ui-login{
        box-shadow: 0 0 50px rgba(211, 211, 211, 0.7);
   }
</style>

<div class="container-fluid">
    <div class="row min-vh-100 align-items-center">
        <div class="col-lg-6 d-none d-md-block text-center text-white">
            <h1 class="display-4 brand"><u><b>CASUAL NTC</b></u></h1>
            Casual NTC giúp bạn tìm kiếm và theo dõi công việc
        </div>
        <div class="col-lg-6">
            <div class="card shadow-sm mx-auto" style="max-width: 400px;">
                <div class="card-body ui-login">
                    <h2 class="text-center mb-4">Đăng nhập</h2>
                    <form>
                        <div class="form-group"> <input type="email" class="form-control form-control-lg" id="email"
                                placeholder="Nhập email của bạn" required> </div>
                        <div class="form-group"> <input type="password" class="form-control form-control-lg"
                                id="password" placeholder="Nhập mật khẩu của bạn" required> </div> <button type="submit"
                            class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
                    </form>
                    <div class="text-center mt-3"> <a href="#">Quên mật khẩu?</a> </div>
                    <hr> <a href="../register/register.php" class="btn btn-success btn-lg btn-block text-white">Tạo tài khoản mới</a>
                </div>
            </div>
        </div>
    </div>
</div>