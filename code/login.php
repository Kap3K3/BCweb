
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
<link rel="stylesheet" href="login.css"> 
<link rel="stylesheet" href="/src/themify-icons/themify-icons.css">
<body>
    
     <div id="wrapper">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="frm-login">
        <h1 class="frm-heading">Đăng nhập</h1>
        <div class="frm-group1">
            <i class="ti-user"> </i>
            <input type="text" name="username" id="txb_username" placeholder="Tên đăng nhập" class="input-username">
        </div>
        <div class="frm-group2">
            <i class="ti-key"> </i>
            <input  type="password" name="pass" id="txb_password" placeholder="Mật khẩu" class="input-password">
            <i class="ti-lock" id="lock"> </i>
            
        </div>
        <div class="login_button">
            <input type="submit" value="Đăng nhập"> 
        </div>
    </form>
    </div> 

    <?php
        include 'conn.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['username'];
            $password = $_POST['pass'];
            if (empty($name)) {
                echo "Vui lòng nhập tài khoản";
            } else {
                $sql  =" select * from users where username='".$name."' and password = '".$password."'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "Succeed";
                }
                else {
                    echo "Sai tên tài khoản hoặc mật khẩu";
                }
            }
        }
    
        
    

    ?>

</body>
    <script  src="https://code.jquery.com/jquery-3.7.1.js">    </script>

    <script src="js/login.js">    </script>


</html>