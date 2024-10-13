<?php
$server = "localhost"; // hoặc địa chỉ server MySQL
$username = "root"; // tên tài khoản MySQL
$password = ""; // mật khẩu MySQL (thường để trống trên XAMPP)
$database = "car_rental"; // tên cơ sở dữ liệu của bạn

// Tạo kết nối
$mysqli = new mysqli($server, $username, $password, $database);

// Kiểm tra kết nối
if ($mysqli->connect_error) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}

// Truy vấn danh sách xe
$sql_lietke_xe = "SELECT * FROM carlist_db ORDER BY ID_xe DESC";
$row_lietke_xe = mysqli_query($mysqli, $sql_lietke_xe);
?>

<p>Liệt kê xe</p>
<table style="width:100%" border="1" style="border-collapse: collapse">
<tr>  
    <td>Tên xe</td>
    <td>Tên đối tác</td>
    <td>Loại xe</td>
    <td>Tên hãng xe</td>
    <td>Dòng xe</td>
    <td>Đơn giá</td>
    <td>Mô tả</td>
    <td>Biển số xe</td>
    <td>Tình trạng</td>
    <td>Quản lý</td>
  </tr>
  <tr>
    <td>Moto</td>
    <td>Quan</td>
    <td>Loai modern</td>
    <td>Yahama</td>
    <td>Dong wei</td>
    <td>2000000</td>
    <td>Xe doi moi nhat</td>
    <td>43.D2.01292</td>
    <td>Chua thue</td>
    <td><a href="module/quanlyxe/xuly.php?id_xe=<? echo $row['id_xe'] ?>">Xoa</a> | <a href="">Sua</a></td>
  </tr>
  <tr>
    <td>Siri</td>
    <td>Ngân</td>
    <td>8 chỗ</td>
    <td>Honda</td>
    <td>Thể thao</td>
    <td>12300000</td> 
    <td>Xe đa dụng</td>
    <td>43.D2.01292</td>
    <td>Đã thuê</td>
    <td><a href="module/quanlyxe/xuly.php?id_xe=<? echo $row['id_xe'] ?>">Xoa</a> | <a href="">Sua</a></td>
  </tr>
</table>