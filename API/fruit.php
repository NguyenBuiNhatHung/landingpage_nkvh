<?php require "config.php"; ?>

<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Thay thế * bằng tên miền của bạn nếu cần

// Bảo mật API bằng token
$api_token = "your_secret_token"; // Thay đổi token này

if (!isset($_SERVER['HTTP_AUTHORIZATION']) || $_SERVER['HTTP_AUTHORIZATION'] !== "Bearer $api_token") {
    http_response_code(401);
    echo json_encode(["message" => "Unauthorized"]);
    exit;
}

// Lấy dữ liệu từ cơ sở dữ liệu
$sql = "SELECT * FROM fruit";
$result = mysqli_query($conn, $sql);

$data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();
echo json_encode($data);
?>
