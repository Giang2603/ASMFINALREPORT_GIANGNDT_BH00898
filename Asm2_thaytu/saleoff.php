<?php
session_start(); // Khởi tạo session để lưu trữ giỏ hàng

// Kiểm tra nếu người dùng thêm sản phẩm vào giỏ hàng
if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = "saleoff"; // Gắn sản phẩm vào danh mục "giảm giá"

    // Tạo mảng sản phẩm
    $product = array(
        'name' => $product_name,
        'price' => $product_price,
        'category' => $product_category
    );

    // Nếu giỏ hàng chưa tồn tại, tạo mới
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Thêm sản phẩm vào giỏ hàng
    $_SESSION['cart'][] = $product;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm Giảm Giá</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- CSS chung -->
    <link rel="stylesheet" href="assets/css/saleoff.css"> <!-- CSS riêng cho saleoff -->
    <script src="assets/js/script.js" defer></script> <!-- File JS -->
</head>
<body>
<header>
    <h1>Sản Phẩm Giảm Giá</h1>
    <nav>
        <ul>
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="nam.php">Sản phẩm Nam</a></li>
            <li><a href="nu.php">Sản phẩm Nữ</a></li>
            <li><a href="giohang.php">Giỏ hàng</a></li>
        </ul>
    </nav>
</header>

<div class="main-content">
    <h2>Danh Sách Sản Phẩm Giảm Giá</h2>
    <div class="product-list">
        <!-- Sản phẩm 1 -->
        <div class="product-item">
            <img src="assets/images/shoes_sale.jpg" alt="Giày Giảm Giá">
            <h3>Giày Thể Thao</h3>
            <p><del>500,000 VND</del> <span class="sale-price">400,000 VND</span></p>
            <form method="post">
                <input type="hidden" name="product_name" value="Giày Thể Thao">
                <input type="hidden" name="product_price" value="400000">
                <button type="submit" name="add_to_cart">Thêm vào giỏ</button>
            </form>
        </div>

        <!-- Sản phẩm 2 -->
        <div class="product-item">
            <img src="assets/images/shirt_sale.jpg" alt="Áo Giảm Giá">
            <h3>Áo Sơ Mi</h3>
            <p><del>300,000 VND</del> <span class="sale-price">250,000 VND</span></p>
            <form method="post">
                <input type="hidden" name="product_name" value="Áo Sơ Mi">
                <input type="hidden" name="product_price" value="250000">
                <button type="submit" name="add_to_cart">Thêm vào giỏ</button>
            </form>
        </div>

        <!-- Thêm các sản phẩm giảm giá khác tại đây -->
    </div>
</div>
</body>
</html>
