<?php

session_start();
include('admin/config/config.php');
if(isset($_POST['dangnhap'])){
  $taikhoan = $_POST['username'];
  $matkhau = md5($_POST['password']);
  $sql = "SELECT * FROM tbl_user WHERE username = '".$taikhoan."' AND password = '".$password."' LIMIT 1";
  $row = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($row);
  if($count > 0){
    $_SESSION['dangnhap'] = $taikhoan;
    header("Location:index.php");
  }else{
    echo '<script>alert("Tai khoan hoac mat khau sai, xin hay nhap lai")"</script>';
    header("login.php");
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="loginstyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
  <div class="card-body">
    <div class="border p-4 rounded">
      <div class="text-center">
        <h3 class="">Sign in</h3>
        <p>Don't have an account yet? <a href="regis.php">Sign up here</a></p>
      </div>
      <div class="form-body" >
        <form class="row g-3" action="" method="POST">
          <div class="col-12"><label class="form-label">User Name</label><input type="uname" class="form-control"
              id="inputUname" placeholder="User Name"></div>
          <div class="col-12"><label for="inputChoosePassword" class="form-label">Enter Password</label><input
              type="password" class="form-control border-end-0" placeholder="Enter Password"></div>
          <div class="col-md-6">
            <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                id="flexSwitchCheckChecked" checked=""><label class="form-check-label"
                for="flexSwitchCheckChecked">Remember Me</label></div>
          </div>
          <div class="col-md-6 text-end"><a href="authentication-forgot-password.html">Forgot Password ?</a></div>
          <div class="col-12">
            
            <div class="d-grid"><button type="button" class="btn btn-primary" name="dangnhap">
              <i class="bx bxs-lock-open"></i>Signin</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>

</html>