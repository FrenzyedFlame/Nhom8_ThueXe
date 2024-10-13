<?php
// Kết nối tới MySQL
$server = "localhost"; // địa chỉ server MySQL
$username = "root"; // tên tài khoản MySQL
$password = ""; // mật khẩu để trống
$database = "car_rental"; // tên cơ sở dữ liệu

// Tạo kết nối
$mysqli = new mysqli($server, $username, $password, $database);

// Kiểm tra kết nối
if ($mysqli->connect_error) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}

// Kiểm tra nếu form đã được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten_xe = $_POST['ten_xe'];
    $ten_doi_tac = $_POST['ten_doi_tac'];
    $loai_xe = $_POST['loai_xe'];
    $ten_hang_xe = $_POST['ten_hang_xe'];
    $dong_xe = $_POST['dong_xe'];
    $don_gia = $_POST['don_gia'];
    $mo_ta = $_POST['mo_ta'];
    $bien_so_xe = $_POST['bien_so_xe'];
    $tinh_trang = $_POST['tinh_trang'];

    // Truy vấn thêm xe vào cơ sở dữ liệu
    $sql_them_xe = "INSERT INTO carlist_db (ten_xe, ten_doi_tac, loai_xe, ten_hang_xe, dong_xe, don_gia, mo_ta, bien_so_xe, tinh_trang)
                    VALUES ('$ten_xe', '$ten_doi_tac', '$loai_xe', '$ten_hang_xe', '$dong_xe', '$don_gia', '$mo_ta', '$bien_so_xe', '$tinh_trang')";

    if (mysqli_query($mysqli, $sql_them_xe)) {
        echo "Thêm xe thành công!";
    } else {
        echo "Lỗi: " . $sql_them_xe . "<br>" . mysqli_error($mysqli);
    }
}
?>

<p>Thêm xe</p>
<table border="1" width="50%" style="border-collapse: collapse;">
<Form method="POST" action="module/quanlyxe/xuly.php">  
  <tr>  
    <td>Tên xe</td>
    <td><input type="text" name="tenxe"></td>
  </tr>
  <tr>
    <td>Tên đối tác</td>
    <td><input type="text" name="doitac"></td>
  </tr>
  <tr>
    <td>Loại xe</td>
    <td><input type="text" name="loaixe"></td>
  </tr>
  <tr>
    <td>Tên hãng xe</td>
    <td><input type="text" name="hangxe"></td>
  </tr>
  <tr>
    <td>Dòng xe</td>
    <td><input type="text" name="dongxe"></td>
  </tr>
  <tr>
    <td>Đơn giá</td>
    <td><input type="text" name="dongia"></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><input type="text" name="mota"></td>
  </tr>
  <tr>
    <td>Biển số xe</td>
    <td><input type="text" name="bienso"></td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td><input type="text" name="tinhtrang"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="themxe" value="Them xe"></td>
  </tr>
</Form>
</table>