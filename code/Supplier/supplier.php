<?php
ob_start();
require '../conn.php';

// Khởi tạo biến để lưu trữ thông tin nhà cung cấp khi sửa
$name = '';
$phone = '';
$address = '';

// Kiểm tra xem có nút sửa được nhấn hay không
if (isset($_POST['btn_sua'])) {
    $id = $_POST['btn_sua']; // Lấy id từ nút bấm

    // Lấy thông tin nhà cung cấp từ cơ sở dữ liệu
    $sql = "SELECT * FROM supplier WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $phone = $row['phone'];
        $address = $row['address'];
    }
}

// Kiểm tra xem có nút cập nhật được nhấn hay không
if (isset($_POST['btn_capnhat'])) {
    $id = $_POST['btn_capnhat']; // Lấy id từ nút bấm
    $name = $_POST['txb_ncc'];
    $phone = $_POST['txb_sdt'];
    $address = $_POST['txb_diachi'];

    // Kiểm tra xem người dùng đã nhập đầy đủ thông tin chưa
    if (empty($name) || empty($phone) || empty($address)) {
        echo '<label class = "msg_er"style="color: red;">Vui lòng nhập đầy đủ thông tin</label>'; 
    } else {
        // Cập nhật thông tin nhà cung cấp vào cơ sở dữ liệu
        $sql = "UPDATE supplier SET name = '$name', phone = '$phone', address = '$address' WHERE id = '$id'";

        if ($conn->query($sql) === TRUE) {
            header("Location: ".$_SERVER['PHP_SELF']); // Tải lại trang
            exit; // Dừng thực thi thêm
        } else {
            echo "Lỗi: {$sql} - " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà cung cấp</title>
    <link rel="stylesheet" href="supplier.css">

</head>
<body>

    <!-- ___________________(Hiển thị các điều khiển thẳng hàng)________________________ -->
    <form action="" method="POST">
        <div class="input_add"> 
        <table>
                <tr>
                    <td>Nhà cung cấp</td>
                    <td><input type="text" name="txb_ncc" value="<?php echo $name; ?>"></td>
                </tr>
                <tr>
                    <td>SĐT</td>
                    <td><input type="text" name="txb_sdt" value="<?php echo $phone; ?>"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="txb_diachi" value="<?php echo $address; ?>"></td>
                </tr>
            </table>
            <button id="btn_them" type="submit" name="btn_them">Thêm</button>
            <button id="btn_capnhat" type="submit" name="btn_capnhat" value="<?php echo $id; ?>">Cập nhật</button>
        </div>
    </form>

    <table align="center" border="1">
        <tr>
            <th>Nhà cung cấp</th>
            <th>SĐT</th> 
            <th>Địa chỉ</th>
            <th>Thao tác</th>
        </tr>
        <!-- ___________________(Hiển thị data)________________________ -->
        <?php
        $sql = "Select * from supplier";
        $qr = $conn->query($sql);
        if ($qr->num_rows>0)
            while ($row = $qr->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td>
                <div class="action-buttons">
                    <form action="" method="POST" style="display:inline;">
                        <button class="btn_sua" name="btn_sua" value="<?php echo $row['id']; ?>">Sửa</button>
                    </form>
                    
                    <form action="" method="POST" style="display:inline;">
                        <button class="btn_xoa" name="btn_xoa" value="<?php echo $row['id']; ?>">Xóa</button>
                    </form>
                </div>
            </td>

        </tr>
        <?php 
            }
        else {
            echo "<tr><td colspan='4'>0 results</td></tr>"; 
        }

        ?>
    </table>

    <!-- ___________________Thêm________________________ -->
    <?php
    if (isset($_POST['btn_them']))
    {
        $name = $_POST['txb_ncc'];
        $phone = $_POST['txb_sdt'];
        $address = $_POST['txb_diachi']; 
        if (empty($name) || empty($phone) || empty($address)) {
            echo '<label style="color: red;">Vui lòng nhập đầy đủ thông tin</label>'; 
        } else {
            $sql="INSERT INTO `supplier` (`name`, `phone`, `address`) VALUES ('$name', '$phone', '$address')";
            if ($conn->query($sql) === TRUE) 
            {
                echo "Lưu dữ liệu thành công";
                header("Location: ".$_SERVER['PHP_SELF']); // Tải lại trang
                exit; // Dừng thực thi thêm
            }
            else 
                echo "Lỗi: {$sql} - " . $conn->error;
        }
    }
    ?>
    <!-- ___________________Xóa________________________ --> 

    <?php
    if (isset($_POST['btn_xoa'])) {
        $id = $_POST['btn_xoa']; // Lấy id từ nút bấm

        // Xóa nhà cung cấp
        $sql = "DELETE FROM supplier WHERE id = '$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Xóa dữ liệu thành công";
            header("Location: ".$_SERVER['PHP_SELF']); // Tải lại trang
            exit; // Dừng thực thi thêm
        } else {
            echo "Lỗi: {$sql} - " . $conn->error;
        }
    }
    ?>
    <!-- ___________________Sửa________________________ --> 
   

</body>

</html>


