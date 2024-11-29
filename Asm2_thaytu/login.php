<?php
session_start();
include 'db_connect.php'; // Kết nối database

// Xử lý đăng nhập
if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Kiểm tra thông tin người dùng
    $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Lưu thông tin người dùng vào session
            $_SESSION['user'] = $user['username'];
            header("Location: index.php"); // Điều hướng về trang chính
            exit();
        } else {
            $_SESSION['error'] = "Mật khẩu không chính xác!";
        }
    } else {
        $_SESSION['error'] = "Tên đăng nhập không tồn tại!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Kết nối file CSS -->
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <img src="https://savani.vn/images/config/frame_1643271037.svg" alt="Shopping" class="login-image">
            <h3>QUYỀN LỢI THÀNH VIÊN</h3>
            <ul class="benefits">
                <li>✅ Mua hàng khắp thế giới cực dễ dàng, nhanh chóng</li>
                <li>✅ Theo dõi chi tiết đơn hàng, địa chỉ thanh toán dễ dàng</li>
                <li>✅ Nhận nhiều chương trình ưu đãi hấp dẫn từ chúng tôi</li>
            </ul>
        </div>
        <div class="login-right">
            <div class="form-container">
                <ul class="tabs">
                    <li class="active">ĐĂNG NHẬP</li>
                    <li><a href="register.php">ĐĂNG KÝ</a></li>
                </ul>
                <form method="POST" action="login_process.php">
                    <input type="email" name="email" placeholder="Email đăng nhập *" required>
                    <input type="password" name="password" placeholder="Mật khẩu *" required>
                    <div class="actions">
                        <button type="submit" class="btn-login">ĐĂNG NHẬP</button>
                        <a href="#" class="forgot-password">Quên mật khẩu?</a>
                    </div>
                </form>
                <div class="social-login">
                    <p>Hoặc đăng nhập bằng</p>
                    <button class="btn-google">ĐĂNG NHẬP BẰNG GOOGLE</button>
                    <button class="btn-facebook">ĐĂNG NHẬP BẰNG FACEBOOK</button>
                </div>
                <p class="privacy-note">Savani cam kết bảo mật và không bao giờ đăng hay chia sẻ thông tin mà chưa có được sự đồng ý của bạn</p>
            </div>
        </div>
    </div>
</body>
</html>

