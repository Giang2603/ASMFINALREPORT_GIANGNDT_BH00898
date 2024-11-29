<?php
session_start(); // Khởi tạo session để lưu trữ giỏ hàng

// Kiểm tra nếu người dùng thêm sản phẩm vào giỏ hàng
if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category']; // Loại sản phẩm (nam/nữ)

    // Tạo mảng sản phẩm
    $product = array(
        'name' => $product_name,
        'price' => $product_price,
        'category' => $product_category // Lưu loại sản phẩm
    );

    // Nếu giỏ hàng chưa tồn tại trong session, tạo một giỏ hàng mới
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
    <title>Sản Phẩm Dành Cho Nữ</title>
    <style>
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px;
            display: inline-block;
            width: 200px;
            text-align: center;
        }
        .product img {
            width: 100%;
            height: 80%;
        }
        .product h3 {
            font-size: 16px;
            margin: 10px 0;
        }
        .product p {
            font-size: 14px;
        }
    </style>
    <link rel="stylesheet" href="CSS/nu.css">
</head>
<body>

    <h1>Sản Phẩm Dành Cho Nữ</h1>
    <div class="navigation">
        <a href="giohang.php" class="btn">Giỏ Hàng</a>
        <a href="index.php" class="btn">Trang Chủ</a>
    </div>

    <h2>Danh Sách Sản Phẩm Nữ</h2>
    
    <form method="post" action="nam.php">
        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/12/resized/WGN008W4-1-C02%20-ao-giu-nhiet%20(5).webp" alt="Áo giữ nhiệt nữ WGN008W4">
            <h3>Áo giữ nhiệt nữ WGN008W4</h3>
            <p>Giá: 239,200 VND</p>
            <input type="hidden" name="product_name" value="Áo giữ nhiệt nữ WGN008W4">
            <input type="hidden" name="product_price" value="239200">
            <input type="hidden" name="product_category" value="Nữ">
            <button class="add-to-cart" data-name="Áo giữ nhiệt nữ WGN008W4" data-price="239200">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/12/resized/WAG008W4-4-B03-ao-gio%20(5).webp" alt="Áo gió mũ nữ WAG008W4">
            <h3>Áo gió mũ nữ WAG008W4</h3>
            <p>Giá: 420,000 VND</p>
            <input type="hidden" name="product_name" value="Áo gió mũ nữ WAG008W4">
            <input type="hidden" name="product_price" value="420000">
            <input type="hidden" name="product_category" value="Nữ">
            <button class="add-to-cart" data-name="Áo gió mũ nữ WAG008W4" data-price="420000">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/12/resized/WTR448K4-3-C01-quan-au%20(6).webp" alt="Quần âu nữ WTR448K4">
            <h3>Quần âu nữ WTR448K4</h3>
            <p>Giá: 399,200 VND</p>
            <input type="hidden" name="product_name" value="Quần âu nữ WTR448K4">
            <input type="hidden" name="product_price" value="399200">
            <input type="hidden" name="product_category" value="Nữ">
            <button class="add-to-cart" data-name="Quần âu nữ WTR448K4" data-price="399200">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/06/resized/WLS180K4-4-L02-ao-somi%20(2).webp" alt="Áo sơ mi dài tay nữ WLS180K4">
            <h3>Áo sơ mi dài tay nữ WLS180K4</h3>
            <p>Giá: 319,200 VND</p>
            <input type="hidden" name="product_name" value="Áo sơ mi dài tay nữ WLS180K4">
            <input type="hidden" name="product_price" value="319200">
            <input type="hidden" name="product_category" value="Nữ">
            <button class="add-to-cart" data-name="Áo sơ mi dài tay nữ WLS180K4" data-price="319200">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/10/30/resized/WAL003W4-3-R04%20-ao-len-nu%20(3).webp" alt="Áo len cổ bẻ nữ WAL003W4">
            <h3>Áo len cổ bẻ nữ WAL003W4</h3>
            <p>Giá: 360,000 VND</p>
            <input type="hidden" name="product_name" value="Áo len cổ bẻ nữ WAL003W4">
            <input type="hidden" name="product_price" value="360000">
            <input type="hidden" name="product_category" value="Nữ">
            <button class="add-to-cart" data-name="Áo len cổ bẻ nữ WAL003W4" data-price="360000">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/10/25/resized/WPG003W4-3-G01%20-ao-phao%20(1).webp" alt="Áo phao nữ WPG003W4">
            <h3>Áo phao nữ WPG003W4</h3>
            <p>Giá: 600,000 VND</p>
            <input type="hidden" name="product_name" value="Áo phao nữ WPG003W4">
            <input type="hidden" name="product_price" value="600000">
            <input type="hidden" name="product_category" value="Nữ">
            <button class="add-to-cart" data-name="Áo phao nữ WPG003W4" data-price="600000">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/10/25/resized/WAL001W4-3-T01%20-ao-len-co-cao%20(1).webp" alt="Áo len cổ cao nữ WAL001W4">
            <h3>Áo len cổ cao nữ WAL001W4</h3>
            <p>Giá: 360,000 VND</p>
            <input type="hidden" name="product_name" value="Áo len cổ cao nữ WAL001W4">
            <input type="hidden" name="product_price" value="360000">
            <input type="hidden" name="product_category" value="Nữ">
            <button class="add-to-cart" data-name="Áo len cổ cao nữ WAL001W4" data-price="360000">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/10/18/resized/WVN017W4-3-E01%20-chan-vay-nu%20(1).webp" alt="Chân váy công sở nữ WVN017W4">
            <h3>Chân váy công sở nữ WVN017W4</h3>
            <p>Giá: 360,000 VND</p>
            <input type="hidden" name="product_name" value="Chân váy công sở nữ WVN017W4">
            <input type="hidden" name="product_price" value="360000">
            <input type="hidden" name="product_category" value="Nữ">
            <button class="add-to-cart" data-name="Chân váy công sở nữ WVN017W4" data-price="360000">Thêm vào giỏ</button>
        </div>
    </form>

</body>
</html>
