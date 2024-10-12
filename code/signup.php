<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="/code/src/themify-icons/themify-icons.css">
</head> <!-- Đóng thẻ head đúng vị trí -->
<body>
    <div id="wrapper">
        <form id="frm-login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h1 class="frm-heading">Đăng ký</h1>
            <div class="frm-group1">
                <i class="ti-user"></i>
                <input type="text" name="username" id="txb_username" placeholder="Tên đăng nhập" class="input-username">
            </div>
            <div class="frm-group2">
                <i class="ti-key"></i>
                <input type="password" name="password" id="txb_password" placeholder="Mật khẩu" class="input-password">
                <i class="ti-lock" id="lock1"></i>
            </div>
            
            <div class="frm-group2">
                <i class="ti-key"></i>
                <input type="password" name="passwordrp" id="txb_passwordrp" placeholder="Nhập lại mật khẩu" class="input-password">
                <i class="ti-lock" id="lock2"></i>
            
            </div>
            
            <div class="login_button">
                <input type="submit" value="Đăng ký" name="btn_submit">
            </div>

            <div class="sad">
            <?php
                require 'conn.php';
                if (isset($_POST['btn_submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $passwordrp = $_POST['passwordrp'];
                    if (empty($username) || empty($password) || empty($passwordrp)) 
                        echo "Vui lòng nhập đầy đủ thông tin";
                    elseif ($password != $passwordrp) 
                        echo "Mật khẩu nhập lại không chính xác";
                    else {
                        echo "<pre>";
                        print_r($_POST);
                        echo "</pre>";
                        $sql="INSERT INTO `users`( `username`, `password`, `permission`, `id_cust`) VALUES ('$username','$password',1,'1')";
                        if ($conn->query($sql) === TRUE) 
                            echo "Lưu dữ liệu thành công";
                         else 
                            echo "Lỗi: {$sql} - " . $conn->error;
                        
                        
                        }
                }
                ?>

            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>
