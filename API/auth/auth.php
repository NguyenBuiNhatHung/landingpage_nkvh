<?php 
    require "token.php";
?>
<?php
    function auth()
    {
        global $api_token;
        header("Content-Type: application/json");
        header("Access-Control-Allow-Origin: casualntc.com"); // Thay thế * bằng tên miền của bạn nếu cần

        if (!isset($_SERVER['HTTP_AUTHORIZATION']) || $_SERVER['HTTP_AUTHORIZATION'] !== "Bearer $api_token") {
            http_response_code(401);
            echo json_encode(["message" => "Unauthorized"]);
            exit;
        }
    }

?>