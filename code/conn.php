<?php
    $server='localhost';
    $user='root';
    $pass='';
    $database='db_qllinhkien';
    $conn = new mysqli($server, $user, $pass, $database);

    if ($conn) {
        mysqli_query($conn, "SET NAMES 'utf8'");
        echo 'Đã kết nối thành công rồi';
    } else {
        echo 'Kết nối thất bại';
    }

?>