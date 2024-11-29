<?php
session_start();
include 'db_connect.php'; // Kết nối database

// Xử lý đăng ký
if (isset($_POST['register'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Mã hóa mật khẩu

    // Kiểm tra xem người dùng đã tồn tại chưa
    $query = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
    $query->bind_param("ss", $email, $username);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Tài khoản hoặc email đã tồn tại!";
    } else {
        // Thêm người dùng mới vào cơ sở dữ liệu
        $insert = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $insert->bind_param("sss", $username, $email, $password);
        if ($insert->execute()) {
            $_SESSION['success'] = "Đăng ký thành công! Vui lòng đăng nhập.";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['error'] = "Đăng ký thất bại!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Đăng Ký</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="Họ và tên" required>
            <input type="text" name="phone" placeholder="Nhập số điện thoại" required>
            <input type="password" name="password" placeholder="Xác nhận mật khẩu" required>
            <button type="submit">Tạo tài khoản</button>
        </form>
        <div class="social-buttons">
            <button>Dáng nhập bằng Google</button>
            <button>Dáng nhập bằng Facebook</button>
        </div>
    </div>
</body>
</html>