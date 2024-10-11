
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
<link rel="stylesheet" href="login.css"> 
<link rel="stylesheet" href="/src/themify-icons/themify-icons.css">
<body>
    <?php
           $server='localhost';
           $user='root';
           $pass='';
           $database='db_qllinhkien';
           $conn = new mysqli($server, $user, $pass, $database);
       
           if ($conn) {
               mysqli_query($conn, "SET NAMES 'utf8'");
               echo 'Đã kết nối thành công';
           } else {
               echo 'Kết nối thất bại';
           }
       
    ?>
     <div id="wrapper">
    <form action="" id="frm-login">
        <h1 class="frm-heading">Đăng nhập</h1>
        <div class="frm-group1">
            <i class="ti-user"> </i>
            <input type="text" name="" id="txb_username" placeholder="Tên đăng nhập" class="input-username">
        </div>
        <div class="frm-group2">
            <i class="ti-key"> </i>
            <input  type="password" name="" id="txb_password" placeholder="Mật khẩu" class="input-password">
            <i class="ti-lock" id="lock"> </i>
            
        </div>
        <div class="login_button">
            <input type="submit" value="Đăng nhập"> 
        </div>
    </form>
    </div> 
 

</body>
    <script  src="https://code.jquery.com/jquery-3.7.1.js">    </script>

    <script src="js/login.js">    </script>


</html>