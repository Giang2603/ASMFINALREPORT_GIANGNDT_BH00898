<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "<p>Chào, " . htmlspecialchars($_SESSION['user']) . "!</p>";
    echo '<a href="logout.php">Đăng xuất</a>';
} else {
    echo '<a href="login.php">Đăng nhập</a> | <a href="register.php">Đăng ký</a>';
}
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Quần Áo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="data:image/png;base64,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" alt="Logo">
        </div>
        <nav>
            <ul>
            <li><a href="/asm2_thaytu/nam.php">Nam</a></li>
        <li><a href="/asm2_thaytu/nu.php">Nữ</a></li>
        <li><a href="treem.php">Trẻ Em</a></li>
        <li><a href="saleoff.php">Sale Off</a></li>
        <li><a href="/asm2_thaytu/giohang.php">Giỏ Hàng</a></li>
                

            </ul>
        </nav>
    </header>

    <main>
    <main><div class="product-container">
        <!-- Sản phẩm 1 -->
        <div class="product-card">
            <div class="product-discount">-43%</div>
            <img src="https://savani.vn/images/image/2024/11/23/resized/MQN006W4-2-G050-quan-ni%20(2).webp" alt="Quần nỉ nam MQN006W4">
            <div class="product-info">
                <h2>Quần nỉ nam MQN006W4</h2>
                <p class="price">256,000đ <span class="original-price">320,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>
        
        <!-- Sản phẩm 2 -->
        <div class="product-card">
            <div class="product-discount">-20%</div>
            <img src="https://savani.vn/images/image/2024/11/22/resized/MAL005W4-3-F04-ao-len%20(3).webp" alt="Áo len nam MAL005W4">
            <div class="product-info">
                <h2>Áo len nam MAL005W4</h2>
                <p class="price">440,000đ <span class="original-price">550,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>

        <!-- Sản phẩm 3 -->
        <div class="product-card">
            <div class="product-discount">-20%</div>
            <img src="https://savani.vn/images/image/2024/11/22/resized/MAG059W4-4-T01%20-ao-khoac%20(2).webp" alt="Áo khoác nam MAG059W4">
            <div class="product-info">
                <h2>Áo khoác nam MAG059W4</h2>
                <p class="price">440,000đ <span class="original-price">550,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>

        <!-- Sản phẩm 4 -->
        <div class="product-card">
            <div class="product-discount">-25%</div>
            <img src="https://savani.vn/images/image/2024/11/22/resized/MAG054W4-4-G03%20-ao-khoac%20(2).webp" alt="Áo khoác nam MAG054W4">
            <div class="product-info">
                <h2>Áo khoác nam MAG054W4</h2>
                <p class="price">599,000đ <span class="original-price">799,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>

        <!-- Sản phẩm 5 -->
        <div class="product-card">
            <div class="product-discount">-20%</div>
            <img src="https://savani.vn/images/image/2024/11/21/resized/MGN003W4-1-K06%20-ao-thun%20(2).webp" alt="Áo giữ nhiệt nam MGN003W4">
            <div class="product-info">
                <h2>Áo giữ nhiệt nam MGN003W4</h2>
                <p class="price">256,000đ <span class="original-price">320,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>

        <!-- Sản phẩm 6 -->
        <div class="product-card">
            <div class="product-discount">-20%</div>
            <img src="https://savani.vn/images/image/2024/11/21/resized/MAN004W4-3-K02-ao-thun%20(2).webp" alt="Áo nỉ nam MAN004W4"><div class="product-info">
                <h2>Áo nỉ nam MAN004W4</h2>
                <p class="price">440,000đ <span class="original-price">550,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>

        <!-- Sản phẩm 7 -->
        <div class="product-card">
            <div class="product-discount">-20%</div>
            <img src="https://savani.vn/images/image/2024/11/20/resized/MAN001W4-3-B01-ao-thun%20(5).webp" alt="Áo nỉ nam MAN001W4">
            <div class="product-info">
                <h2>Áo nỉ nam MAN001W4</h2>
                <p class="price">440,000đ <span class="original-price">550,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>

        <!-- Sản phẩm 8 -->
        <div class="product-card">
            <div class="product-discount">-25%</div>
            <img src="https://savani.vn/images/image/2024/11/21/resized/MPG002W4-3-K01%20-ao-phao%20(2).webp" alt="Áo phao nam MPG002W4">
            <div class="product-info">
                <h2>Áo phao nam MPG002W4</h2>
                <p class="price">599,000đ <span class="original-price">799,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>
        <!-- Sản phẩm 9 -->
        <div class="product-card">
            <div class="product-discount">-20%</div>
            <img src="https://savani.vn/images/image/2024/11/23/resized/WWJ003W4-3-N01-ao-khoac%20(5).webp" alt="Áo khoác len nữ WWJ003W4">
            <div class="product-info">
                <h2>Áo khoác len nữ WWJ003W4</h2>
                <p class="price">399,200đ <span class="original-price">499,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>
        <!-- Sản phẩm 10 -->
        <div class="product-card">
            <div class="product-discount">-20%</div>
            <img src="https://savani.vn/images/image/2024/11/23/resized/WWJ001W4-3-W03-ao-khoac-len%20(2).webp" alt="Áo khoác len WWJ001W4">
            <div class="product-info">
                <h2>Áo khoác len WWJ001W4</h2>
                <p class="price">399,200đ <span class="original-price">499,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>
        <!-- Sản phẩm 11 -->
        <div class="product-card">
            <div class="product-discount">-20%</div>
            <img src="https://savani.vn/images/image/2024/11/18/resized/WKK002W4-3-A01%20-ao-khoac%20(2).webp" alt="Áo khoác công sở nữ WKK002W4">
            <div class="product-info">
                <h2>Áo khoác công sở nữ WKK002W4</h2>
                <p class="price">520,000đ <span class="original-price">650,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
        </div>
        <!-- Sản phẩm 12 -->
        <div class="product-card">
            <div class="product-discount">-20%</div>
            <img src="https://savani.vn/images/image/2024/11/18/resized/WGN009W4-1-G03-ao-giu-nhiet%20(5).webp" alt="Áo giữ nhiệt nữ WGN009W4">
            <div class="product-info">
                <h2>Áo giữ nhiệt nữ WGN009W4</h2>
                <p class="price">169,000đ <span class="original-price">299,000đ</span></p>
                <button class="buy-btn">Mua ngay</button>
            </div>
            </div>
    </div>
</main>
 
</main>

</body>
</html>