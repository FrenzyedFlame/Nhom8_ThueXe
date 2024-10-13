<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="regisstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <div class="card-body">
        <div class="border p-4 rounded">
            <div class="text-center">
                <h3 class="">Đăng Ký</h3>
                <p>Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a></p>
            </div>
            <div class="form-body" >
                <form class="row g-3" action="xuly.php" method="post">`
                    <div class="col-12">
                        <label class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" placeholder="Tên đăng nhập" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Mật khẩu" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Số điện thoại</label>
                        <input type="tel" class="form-control" placeholder="Số điện thoại" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Khu vực (Tỉnh/Thành)</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>Chọn khu vực</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="Cần Thơ">Cần Thơ</option>
                            <option value="Huế">Huế</option>
                        </select>
                    </div>
                    <div class="col-12 text-center">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Đăng Ký</button>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <p>Hoặc đăng ký bằng</p>
                        <div class="social-icons">
                            <a href="#" class="btn-social"><i class='bx bxl-facebook-circle'></i></a>
                            <a href="#" class="btn-social"><i class='bx bxl-twitter'></i></a>
                            <a href="#" class="btn-social"><i class='bx bxl-google'></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
