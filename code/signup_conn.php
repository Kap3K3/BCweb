<?php
require 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];
$passwordrp = $_POST['passwordrp'];

if (isset($_POST['btn_submit'])) {
    if (empty($username) || empty($password) || empty($passwordrp)) 
        echo "Vui lòng nhập đầy đủ thông tin";
     elseif ($password != $passwordrp) 
        echo "Mật khẩu nhập lại không chính xác";
     else {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $sql="INSERT INTO `users`( `username`, `password`, `permission`, `id_cust`) VALUES ('$username','$password',1,'1')";
        if ($conn->query($sql) === TRUE) {
            echo "Lưu dữ liệu thành công";
        } else {
            echo "Lỗi: {$sql} - " . $conn->error;
        }
        
        }
}
?>
