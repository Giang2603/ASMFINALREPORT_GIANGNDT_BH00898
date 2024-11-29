// script.js
document.addEventListener("DOMContentLoaded", () => {
    // Xử lý nút thêm vào giỏ hàng
    const addToCartButtons = document.querySelectorAll("[name='add_to_cart']");
    addToCartButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
            e.preventDefault();
            alert("Sản phẩm đã được thêm vào giỏ hàng!");
        });
    });

    // Xử lý nút xóa sản phẩm
    const removeButtons = document.querySelectorAll(".btn-remove");
    removeButtons.forEach((button) => {
        button.addEventListener("click", () => {
            alert("Sản phẩm đã được xóa khỏi giỏ hàng!");
        });
    });
});


// script.js
document.addEventListener("DOMContentLoaded", () => {
    const addToCartButtons = document.querySelectorAll("button[name='add_to_cart']");
    addToCartButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
            alert("Sản phẩm đã được thêm vào giỏ hàng!");
        });
    });
});