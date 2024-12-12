<?php 
    require "../config.php";
    require "../auth/auth.php";
?>

<?php
    
    auth();
    // Lấy dữ liệu từ cơ sở dữ liệu
    $sql = "SELECT * FROM hr";
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
