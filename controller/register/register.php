<?php
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\Exception; 
    require '../../vendor/autoload.php';
    echo "đang gửi mail";
    session_start();
    if (isset($_POST['submit'])) {
        echo "lấy thông tin";
        // Lấy thông tin từ biểu mẫu
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $service = $_POST['service'];
        $timedathen = $_POST['timedathen'];
        // Khởi tạo PHPMailer
        $mail = new PHPMailer(true);
        $mail_reply = new PHPMailer(true);
        try {
            // Cấu hình SMTP
            $mail->isSMTP(); 
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true; 
            $mail->Username = 'hung.nbn.63cntt@ntu.edu.vn'; //tài khoản mk mail
            $mail->Password = '225774478'; 
            $mail->SMTPSecure = 'tls'; 
            $mail->Port = 587; 
            //mail reply cho khách hàng
            $mail_reply->isSMTP(); 
            $mail_reply->Host = 'smtp.gmail.com'; 
            $mail_reply->SMTPAuth = true; 
            $mail_reply->Username = 'hung.nbn.63cntt@ntu.edu.vn'; //tài khoản mk mail
            $mail_reply->Password = '225774478';
            $mail_reply->SMTPSecure = 'tls'; 
            $mail_reply->Port = 587;
            // Người gửi và người nhận mail booking
            $mail->setFrom('no-reply@nhakhoaviethan.com', 'NhaKhoaVietHan'); 
            $mail->addAddress('booking@nhakhoaviethan.vn'); // nhận mail booking@nhakhoaviethan.vn shin11052017@gmail.com
            $mail->CharSet = 'UTF-8';
            
            // Nội dung email 
            $mail->isHTML(true); 
            $mail->Subject = "Đặt hẹn từ Landing Page"; 
            $mail->Body = "
                <h1>Thông tin đặt hẹn</h1>
                <p><strong>Tên:</strong> $name</p>
                <p><strong>Số điện thoại:</strong> $phone</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Quốc gia:</strong> $country</p>
                <p><strong>Dịch vụ:</strong> $service</p>
                <p><strong>Thời gian đặt hẹn:</strong> $timedathen</p>";
            $mail->send();

            // Người gửi và người nhận mail reply
            $mail_reply->setFrom('no-reply@nhakhoaviethan.com', 'NhaKhoaVietHan'); 
            $mail_reply->addAddress($email); // nhận mail
            $mail_reply->CharSet = 'UTF-8';
            
            // Nội dung email reply
            $mail_reply->isHTML(true);
            $mail_reply->Subject = "Đặt hẹn từ Landing Page";
            $mail_reply->Body = "Cám ơn khách hàng đã đặt hẹn. Đội ngũ tư vấn sẽ liên hệ cho mình sớm !!!";
    
            // Gửi email
            $mail_reply->send();
            $_SESSION['flag']=true;
            header("Location: /landingpage_nkvh/view/home/home.php");
        }
        catch (Exception $e) {
            echo "Không thể gửi email. Lỗi: {$mail->ErrorInfo}";
        }
    }
?>