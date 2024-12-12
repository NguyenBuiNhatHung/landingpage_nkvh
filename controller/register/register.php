<?php
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\Exception; 
    require '../../vendor/autoload.php';
    session_start();
    if(isset($_POST["submit"]))
    {
        $_SESSION["fname"]=$_POST["first_name"];
        $_SESSION["lname"]=$_POST["last_name"];
        $_SESSION["dob"]=$_POST["dob"];
        $_SESSION["gender"]=$_POST["gender"];
        $to=$_POST["email"];
        $_SESSION["email"]=$_POST["email"];
        $_SESSION["pass"]=$_POST["password"];
        $pin = str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
        $_SESSION['pin'] = $pin; $_SESSION['pin_time'] = time();
        $mail = new PHPMailer(true);
        try {
            // Cấu hình SMTP
            $mail->isSMTP(); 
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true; 
            $mail->Username = 'hung.nbn.63cntt@ntu.edu.vn'; 
            $mail->Password = '225774478'; 
            $mail->SMTPSecure = 'tls'; 
            $mail->Port = 587; 
            // Người gửi và người nhận 
            $mail->setFrom('no-reply@casualntc.com', 'Casual NTC'); 
            $mail->addAddress($_POST['email']);
            $mail->CharSet = 'UTF-8';
            // Nội dung email 
            $mail->isHTML(true); 
            $mail->Subject = "Mã PIN của bạn"; 
            $mail->Body = "Mã PIN của bạn là: " . $pin; 
            $mail->send();
            header("Location:/casualntc/view/register/confirm.php");
        } 
        catch (Exception $e) {
            echo "Không thể gửi email. Lỗi: {$mail->ErrorInfo}";
        }
    }
?>