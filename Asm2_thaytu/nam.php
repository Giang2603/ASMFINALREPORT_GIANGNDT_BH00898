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
    <title>Sản Phẩm Dành Cho Nam</title>
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
            height: auto;
        }
        .product h3 {
            font-size: 16px;
            margin: 10px 0;
        }
        .product p {
            font-size: 14px;
        }
    </style>
    <link rel="stylesheet" href="CSS/nam.css">
    <script src="script.js" defer></script>
</head>
<body>

    <h1>Sản Phẩm Dành Cho Nam</h1>
    <div class="navigation">
        <a href="giohang.php" class="btn">Giỏ Hàng</a>
        <a href="index.php" class="btn">Trang Chủ</a>
    </div>

    <h2>Danh Sách Sản Phẩm Nam</h2>
    
    <form method="post" action="nam.php">
        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/23/resized/MQN006W4-2-G050-quan-ni%20(2).webp" alt="Quần nỉ nam MQN006W4">
            <h3>Quần nỉ nam MQN006W4</h3>
            <p>Giá: 256,000 VND</p>
            <input type="hidden" name="product_name" value="Quần nỉ nam MQN006W4">
            <input type="hidden" name="product_price" value="256000">
            <input type="hidden" name="product_category" value="Nam">
            <button type="submit" name="add_to_cart" class="btn-add-to-cart">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/22/resized/MAL005W4-3-F04-ao-len%20(3).webp" alt="Áo len nam MAL005W4">
            <h3>Áo len nam MAL005W4</h3>
            <p>Giá: 440,000 VND</p>
            <input type="hidden" name="product_name" value="Áo len nam MAL005W4">
            <input type="hidden" name="product_price" value="440000">
            <input type="hidden" name="product_category" value="Nam">
            <button class="add-to-cart" data-name="Áo len nam MAL005W4" data-price="440000">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/22/resized/MAG059W4-4-T01%20-ao-khoac%20(2).webp" alt="Áo khoác nam MAG059W4">
            <h3>Áo khoác nam MAG059W4</h3>
            <p>Giá: 440,000 VND</p>
            <input type="hidden" name="product_name" value="Áo khoác nam MAG059W4">
            <input type="hidden" name="product_price" value="440000">
            <input type="hidden" name="product_category" value="Nam">
            <button class="add-to-cart" data-name="Áo khoác nam MAG059W4" data-price="440000">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/22/resized/MAG054W4-4-G03%20-ao-khoac%20(2).webp" alt="Áo khoác nam MAG054W4">
            <h3>Áo khoác nam MAG054W4</h3>
            <p>Giá: 599,000 VND</p>
            <input type="hidden" name="product_name" value="Áo khoác nam MAG054W4">
            <input type="hidden" name="product_price" value="599000">
            <input type="hidden" name="product_category" value="Nam">
            <button class="add-to-cart" data-name="Áo khoác nam MAG054W4" data-price="599000">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/21/resized/MSH069K4-1-K01-giay-da%20(2).webp" alt="Giày Loafer nam MSH069K4">
            <h3>Giày Loafer nam MSH069K4</h3>
            <p>Giá: 735,000 VND</p>
            <input type="hidden" name="product_name" value="Giày Loafer nam MSH069K4">
            <input type="hidden" name="product_price" value="735000">
            <input type="hidden" name="product_category" value="Nam">
            <button class="add-to-cart" data-name="Giày Loafer nam MSH069K4" data-price="735000">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/21/resized/MSH068K4-2-K01-giay-da%20(2).webp" alt="Giày Moccasin MSH068K4">
            <h3>Giày Moccasin MSH068K4</h3>
            <p>Giá: 735,000 VND</p>
            <input type="hidden" name="product_name" value="Giày Moccasin MSH068K4">
            <input type="hidden" name="product_price" value="735000">
            <input type="hidden" name="product_category" value="Nam">
            <button class="add-to-cart" data-name="Giày Moccasin MSH068K4" data-price="735000">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/21/resized/MSH054K4-1-K01-giay-da%20(2).webp" alt="Giày Loafer nam MSH054K4">
            <h3>Giày Loafer nam MSH054K4</h3>
            <p>Giá: 840,000 VND</p>
            <input type="hidden" name="product_name" value="Giày Loafer nam MSH054K4">
            <input type="hidden" name="product_price" value="840000">
            <input type="hidden" name="product_category" value="Nam">
            <button class="add-to-cart" data-name="<?php echo $product['name']; ?>" data-price="<?php echo $product['price']; ?>">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/21/resized/MQN007W4-2-N01-quan-ni%20(2).webp" alt="Quần nỉ MQN007W4">
            <h3>Quần nỉ MQN007W4</h3>
            <p>Giá: 360,000 VND</p>
            <input type="hidden" name="product_name" value="Quần nỉ MQN007W4">
            <input type="hidden" name="product_price" value="360000">
            <input type="hidden" name="product_category" value="Nam">
            <button class="add-to-cart" data-name="<?php echo $product['name']; ?>" data-price="<?php echo $product['price']; ?>">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/11/04/resized/MAC001W4-3-N03-ao-ni%20(5).webp" alt="Áo nỉ nam MAC001W4">
            <h3>Áo nỉ nam MAC001W4</h3>
            <p>Giá: 360,000 VND</p>
            <input type="hidden" name="product_name" value="Áo nỉ nam MAC001W4">
            <input type="hidden" name="product_price" value="360000">
            <input type="hidden" name="product_category" value="Nam">
            <button class="add-to-cart" data-name="<?php echo $product['name']; ?>" data-price="<?php echo $product['price']; ?>">Thêm vào giỏ</button>
        </div>

        <div class="product">
            <img src="https://savani.vn/images/image/2024/10/30/resized/MLS324K4-2-G01-ao-somi%20(2).webp" alt="Áo sơ mi nam MLS324K4">
            <h3>Áo sơ mi nam MLS324K4</h3>
            <p>Giá: 525,000 VND</p>
            <input type="hidden" name="product_name" value="Áo sơ mi nam MLS324K4">
            <input type="hidden" name="product_price" value="525000">
            <input type="hidden" name="product_category" value="Nam">
            <button class="add-to-cart" data-name="<?php echo $product['name']; ?>" data-price="<?php echo $product['price']; ?>">Thêm vào giỏ</button>
        </div>
    </form>

</body>
</html>
