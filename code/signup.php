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
        <form id="frm-login" method="post" action="signup_conn.php">
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
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>
