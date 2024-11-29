<?php
session_start(); // Bắt đầu session để lưu trữ giỏ hàng

// Kiểm tra nếu giỏ hàng có sản phẩm
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

// Xóa sản phẩm khỏi giỏ hàng
if (isset($_POST['remove'])) {
    $index = $_POST['product_index'];
    unset($cart[$index]);
    $_SESSION['cart'] = array_values($cart); // Cập nhật giỏ hàng
}

// Làm rỗng giỏ hàng
if (isset($_POST['clear_cart'])) {
    unset($_SESSION['cart']);
    $cart = array();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="CSS/giohang.css"> <!-- Liên kết đến CSS giỏ hàng -->
    <script src="script.js" defer></script> <!-- Liên kết đến file JavaScript -->
</head>
<body>

<div class="container">
    <h1>Giỏ Hàng Của Bạn</h1>

    <?php if (empty($cart)) : ?>
        <p class="empty-cart">Giỏ hàng trống. <a href="nam.php">Mua thêm sản phẩm</a></p>
    <?php else : ?>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <?php foreach ($cart as $index => $item): ?>
                    <tr data-index="<?php echo $index; ?>">
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td><?php echo number_format($item['price'], 0, ',', '.') . " VND"; ?></td>
                        <td>
                            <button class="btn-remove" onclick="removeFromCart(<?php echo $index; ?>)">Xóa</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="cart-actions">
            <form method="post">
                <button type="submit" name="clear_cart" class="btn-clear">Xóa toàn bộ giỏ hàng</button>
            </form>
            <a href="nam.php" class="btn-back">Tiếp tục mua sắm</a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
