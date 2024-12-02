<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        * {
            margin: 0 auto;
            padding: 0 auto;
            box-sizing: border-box;
        }

        .container {
            width: 70%;
            max-width: 1000px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
        }

        .cart-item .details {
            flex: 1;
            padding-left: 20px;
        }

        .cart-item .price {
            text-align: center;
        }

        .cart-item .quantity-control {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .cart-summary {
            margin-top: 20px;
            text-align: right;
        }

        .remove-item {
            color: red;
            cursor: pointer;
        }

        .form-check-label {
            font-size: 16px;
        }

        #districtSelection {
            display: none;
        }
    </style>
</head>
<?php
include 'components/header.php';
?>

<body>
    <div class="container">
        <h2>Giỏ hàng của bạn</h2>

        <?php foreach ($products as $product): ?>
            <div class="cart-item" id="product_<?= $product['product_id'] ?>">
                <img src="<?= $product['image'] ?>" alt="<?= $product['product_name'] ?>">
                <div class="details">
                    <h4><?= $product['product_name'] ?></h4>
                    <p>Màu sắc:
                        <select id="color_<?= $product['product_id'] ?>"
                            onchange="updateCart(<?= $product['product_id'] ?>)">
                            <option value="Đen" <?= $product['quantity'] == 'Đen' ? 'selected' : '' ?>>Đen</option>
                            <option value="Trắng" <?= $product['quantity'] == 'Trắng' ? 'selected' : '' ?>>Trắng</option>
                            <option value="Hồng" <?= $product['quantity'] == 'Hồng' ? 'selected' : '' ?>>Hồng</option>
                            <option value="Trắng" <?= $product['quantity'] == 'Trắng' ? 'selected' : '' ?>>Trắng</option>
                            <option value="Tím" <?= $product['quantity'] == 'Tím' ? 'selected' : '' ?>>Tím</option>
                        </select>
                    </p>
                </div>
                <div class="price" id="price_<?= $product['product_id'] ?>" data-original-price="<?= $product['price'] ?>">
                    <?= number_format($product['price'] * $product['quantity'], 0, ',', '.') ?>₫
                </div>
                <div class="quantity-control">
                    <button class="btn btn-outline-primary"
                        onclick="changeQuantity(<?= $product['product_id'] ?>, -1)">-</button>
                    <span id="quantity_<?= $product['product_id'] ?>"><?= $product['quantity'] ?></span>
                    <button class="btn btn-outline-primary"
                        onclick="changeQuantity(<?= $product['product_id'] ?>, 1)">+</button>
                </div>
                <div class="remove-item" onclick="removeItem(<?= $product['product_id'] ?>)">Xóa</div>
            </div>
        <?php endforeach; ?>
        <div class="mt-4">
            <button class="btn btn-danger" onclick="clearCart()">Xóa tất cả sản phẩm</button>
        </div>

        <form>
            <h1>Thông tin khách hàng</h1>
            <div>
                <input type="radio"> Anh
                <input type="radio"> Chị
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Họ và tên">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Số điện thoại">
                </div>
            </div>
        </form>

        <div class="mt-4">
            <h5>Hình thức nhận hàng</h5>
            <div>
                <input type="radio" id="delivery" name="delivery_method" checked onclick="toggleDeliveryOptions()">
                <label for="delivery">Giao tận nơi</label>
            </div>
            <div>
                <input type="radio" id="pickup" name="delivery_method" onclick="toggleDeliveryOptions()">
                <label for="pickup">Nhận tại cửa hàng</label>
            </div>

            <div id="districtSelection">
                <label for="province">Chọn tỉnh:</label>
                <select id="province" class="form-control mt-2" onchange="updateDistricts()">
                    <option value="">Chọn tỉnh</option>
                    <option value="HaNoi">Hà Nội</option>
                    <option value="HCM">Hồ Chí Minh</option>
                    <option value="Danang">Đà Nẵng</option>
                    <option value="Hue">Huế</option>
                </select>
                <label for="district" class="mt-2">Chọn quận/huyện:</label>
                <select id="district" class="form-control mt-2">
                    <option value="">Chọn quận/huyện</option>
                </select>
                <input type="text" id="specificAddress" class="form-control mt-2" placeholder="Địa chỉ cụ thể">
            </div>

        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Xuất hóa đơn công ty
            </label>
        </div>
        <div class="cart-summary">
            <h4>Tổng tiền: <span id="totalPrice"><?= number_format($total_price, 0, ',', '.') ?>₫</span></h4>
            <button class="btn btn-primary">Tiến hành đặt hàng</button>
        </div>
    </div>
    <?php include "components/footer.php" ?>
    <script>

        function updateCart(productId) {
            const color = document.getElementById(`color_${productId}`).value;
            const quantity = parseInt(document.getElementById(`quantity_${productId}`).textContent);

            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({
                    action: 'update',
                    product_id: productId,
                    quantity: quantity,
                    color: color
                })
            })
                .then(response => response.json())
                .then(data => {

                    document.getElementById(`price_${productId}`).innerText = data.updated_prices[productId] + '₫';
                    document.getElementById('totalPrice').innerText = data.total_price;
                });
        }


        function changeQuantity(productId, delta) {
            const quantityElement = document.getElementById(`quantity_${productId}`);
            let quantity = parseInt(quantityElement.textContent) + delta;
            if (quantity < 1) return;
            quantityElement.textContent = quantity;
            updateCart(productId);
        }

        function removeItem(productId) {
            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ action: 'remove', product_id: productId })
            })
                .then(response => response.json())
                .then(data => {
                    document.getElementById(`product_${productId}`).remove();
                    document.getElementById('totalPrice').innerText = data.total_price;
                });
        }

        function clearCart() {
            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ action: 'clear' })
            })
                .then(response => response.json())
                .then(data => {

                    let cartItems = document.querySelectorAll('.cart-item');
                    cartItems.forEach(item => item.remove());
                    document.getElementById('totalPrice').innerText = data.total_price;
                });
        }

        function updateDistricts() {
            const province = document.getElementById('province').value;
            const districtSelect = document.getElementById('district');
            let options = '';

            if (province === 'HaNoi') {
                options = '<option value="HoanKiem">Hoàn Kiếm</option><option value="BaDinh">Ba Đình</option>';
            } else if (province === 'HCM') {
                options = '<option value="Quan1">Quận 1</option><option value="Quan3">Quận 3</option>';
            } else if (province === 'Danang') {
                options = '<option value="SonTra">Sơn Trà</option><option value="HaiChau">Hải Châu</option>';
            } else if (province === 'Hue') {
                options = '<option value="HueCity">Thành phố Huế</option>';
            }

            districtSelect.innerHTML = options;
            document.getElementById('districtSelection').style.display = options ? 'block' : 'none';
        }

        function toggleDeliveryOptions() {
            const isDelivery = document.getElementById('delivery').checked;
            document.getElementById('districtSelection').style.display = isDelivery ? 'block' : 'none';
        }
    </script>
</body>

</html>