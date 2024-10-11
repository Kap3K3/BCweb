<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'db_qllinhkien';
    $conn = new mysqli($server, $user, $pass, $database);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        // die("Kết nối không thành công: " . $conn->connect_error);
    } else {
        // echo "Kết nối thành công!";
        // // Thiết lập bộ mã ký tự
        // mysqli_query($conn, "SET NAMES 'utf8'");
    }
?>
