<?php
require "conn.php";

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
    <table align="center" border="1">
        <tr>
            <th>Nhà cung cấp</th>
            <th>SĐT</th> 
            <th>Địa chỉ</th>
            <th>Thao tác</th>
        </tr>
        <?php
        $sql = "SELECT * FROM supplier";
        $qr = $conn->query($sql);

        if ($qr->num_rows > 0) {
            while ($row = $qr->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td>
                <div class="btn">
                    <button class="btn_them">Thêm</button>
                    <button class="btn_xoa">Xóa</button>
                    <button class="btn_sua">Sửa</button>
                </div>
            </td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>"; // Cập nhật số cột cho phù hợp
        }
        $conn->close();
        ?>
    </table>

</body>
</html>
