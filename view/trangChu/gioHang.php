<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            padding: 15px 232px;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: auto;
            margin-bottom: 150px;
        }

        .yourCart {
            display: block;
            overflow: hidden;
            width: 100%;
        }

        .yourCart>span {
            padding: 15px 7px 13px;
            color: #323232;
            line-height: 21px;
            font-size: 14px;
            overflow: hidden;
            width: 300px;
            text-overflow: ellipsis;
            text-align: right;
            white-space: nowrap;
            float: right;
        }

        .buyMore {
            padding: 15px 15px 13px 0px;
            position: relative;
            line-height: 21px;
            color: #323232;
            float: left;
            overflow: hidden;
            font-size: 14px;
        }

        .cart {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cart-item .name {
            color: #444;
            font-size: 15px;
            font-weight: none;
            margin-bottom: 36px;
        }

        .cart-item {
            width: 100%;
            display: inline-block;
            padding: 10px 0;
        }

        .cart-item:not(:first-child) {
            border-top: 1px solid #e5e5e5;
        }

        .shopping-cart-info {
            padding: 50px 30px 10px 30px;
        }

        .cart-item .image {
            float: left;
            width: 16%;
            text-align: center;
        }

        .image img {
            width: 100%
        }

        .cart-item .details {
            flex: 1;
            padding-left: 20px;
        }

        .info-cart {
            display: flex;
            justify-content: space-between;
            height: 90px;
        }

        .info-left {
            min-width: 225px;
            text-align: left;
            margin-left: 25px;

        }

        .info-right .quantity {
            display: inline-flex;
            padding: 6px 0 0;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .info-right {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: max-content;
            height: fit-content;
            align-items: flex-end;
            height: 100%;
        }

        .no-data {
            margin: 45px 0 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #333;
            font-size: 14px;
        }

        .cart-item .price {
            font-weight: bold;
        }

        .cart-item .quantity-control {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .totals {
            display: inline-block;
            width: 100%;
            border-radius: 12px;
        }

        .total-info {
            padding: 5px 0px 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-total {
            font-size: 20px;
            color: #0066cc;
            border-bottom: 1px solid #f1f1f1;
        }

        .cart-total-left {
            color: #1d1d1f;
            font-weight: 700;
            line-height: 21px;
            font-size: 14px;
            padding: 8px 0px;
        }

        .cart-total-right {
            color: #1d1d1f;
            padding: 8px 0px;
        }

        .value-summary {
            color: #ed1c24;
            font-weight: bold;
            font-size: 14px;
            line-height: 21px;
            float: right;
        }

        input#termsofservice {
            width: 16px;
            height: 16px;
            margin-top: 6px;
            margin-right: 5px;
        }

        span.rule-web {
            font-size: 14px;
            line-height: 21px;
        }

        .d-flex {
            align-items: flex-start;
            display: flex;
        }

        .totals .terms-of-service a {
            color: #0066cc;
            font-size: 14px;
            line-height: 21px;
        }

        .btn-primary {
            background: #0066CC !important;
            width: 100% !important;
            border-radius: 8px;
            height: 48px;
            font-size: 14px;
            color: white;
            border: none;
            margin-bottom: 20px;
        }

        .remove-item {
            margin: 4px auto;
            padding: 0 8px 0 2px;
            background: #fafafb;
            border-radius: 4px;
            font-size: 11px;
            color: #9e9e9f;
            border: unset;
            display: block;
            cursor: pointer;
            line-height: 16px;
            width: 25px;
            float: left;
        }

        .formInfo {
            display: inline-block;
            width: 100%;
            border-top: 4px solid #e5e5e5;
            border-bottom: 4px solid #e5e5e5;
            padding: 15px 30px;
        }

        .formInfo1 {
            display: inline-block;
            width: 100%;
            border-bottom: 4px solid #e5e5e5;
            padding: 15px 30px;
        }

        .formInfo1 h4 {
            line-height: 20px;
            font-weight: 600;
            color: #323232;
            text-transform: none;
            font-size: 15px;
            text-align: left;
        }

        .formInfo h4 {
            line-height: 20px;
            font-weight: 600;
            color: #323232;
            text-transform: none;
            font-size: 15px;
            text-align: left;
        }

        .sex-customer {
            margin-bottom: 15px;
            display: flex;
            font-size: 14px;
        }

        .col-left {
            float: left;
            width: 265px;
            position: absolute;
        }

        .col-left1 {
            float: left;
            width: 49%;
        }

        .col-right1 {
            float: right;
            width: 50%;
        }

        .col-right {
            width: 50%;
            float: right;
        }

        .inputs {
            padding: 13px;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            line-height: 18px;
            font-size: 13px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 7px;
            display: block;
            overflow: hidden;
            color: #323232;
        }

        .inputs1 {
            padding: 15px;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            line-height: 18px;
            font-size: 13px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 7px;
            display: block;
            overflow: hidden;
            color: #323232;
        }

        .store {
            background: #f5f5f7;
            border: 0;
            border-radius: 12px;
            padding: 10px;
            margin-bottom: 20px;
            height: 165px;
        }

        .form-lable {
            position: relative;
            top: -66px;
            left: 12px;
            background: #fff;
            padding: 0 5px;
            line-height: 18px;
            font-size: 12px;
            z-index: 1;
            width: fit-content !important;
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
    <?php
    // echo "<pre>";
    // print_r($info);
    // echo "</pre>";
    if ($info !== "trong") { ?>
        <div class="container">
            <div class="yourCart">
                <a href="?act=" class="buyMore">
                    < Về trang chủ</a>
                        <span>Giỏ hàng của bạn</span>
            </div>
            <div class="cart">
                <div class="shopping-cart-info">
                    <?php $total = 0;
                    foreach ($info->infoPro as $key) { ?>
                        <div class="cart-item" id="product_<?= $key['productId'] ?>">
                            <div class="image"><img src="<?= $key['imageProduct'] ?>"></div>
                            <div class="info-cart">
                                <div class="info-left">
                                    <div class="name"><?= $key['nameProduct'] ?></div>
                                    <div class="remove-item" onclick="removeItem(<?= $key['productId'] ?>)">Xóa</div>
                                </div>
                                <div class="info-right">
                                    <div class="price" id="price_<?= $key['priceProduct'] ?>"
                                        data-original-price="<?= $key['priceProduct'] ?>">
                                        <?php $total += $key['priceProduct'] * $key['quantityProduct'] ?>
                                        <?= number_format($key['priceProduct'] * $key['quantityProduct'], 0, ',', '.') ?>₫
                                    </div>
                                    <div class="quantity">
                                        Số lượng: <?= $key['quantityProduct'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="formInfo">
                    <form>
                        <h4>Thông tin khách hàng</h4>
                        <div class="sex-customer">
                            <input type="radio" id="men" name="fav_language" value="men" checked="" class="has-value">
                            <label for="men" style="margin-right: 30px;margin-left: 5px;" class="checked">Anh</label><br>

                            <input type="radio" id="woman" name="fav_language" value="woman" class="has-value">
                            <label for="woman" style="margin-left: 5px;">Chị</label><br>
                        </div>
                        <div style="width:100%;">
                            <div class=" col-left">
                                <input type="text" class="inputs" id="name">
                                <label class="form-lable" for="name">Họ và tên</label>
                            </div>
                            <div class=" col-right">
                                <input type="text" class="inputs" id="number">
                                <label class="form-lable" for="number">Số điện thoại</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="formInfo1">
                    <h4>Hình thức nhận hàng</h4>
                    <div class="sex-customer">
                        <div style="margin-right:20px">
                            <input type="radio" id="pickup" name="delivery_method" checked
                                onclick="toggleDeliveryOptions()">
                            <label for="pickup">Nhận tại cửa hàng</label>
                        </div>
                        <div>
                            <input type="radio" id="delivery" name="delivery_method" onclick="toggleDeliveryOptions()">
                            <label for="delivery">Giao tận nơi</label>
                        </div>
                    </div>
                    <div id="districtSelection" class="store">
                        <div>
                            <div class="col-left1" style="padding: 10px 10px 0px;">
                                <select id="province" class="inputs1" onchange="updateDistricts()">
                                    <option value="">Chọn tỉnh</option>
                                    <option value="HaNoi">Hà Nội</option>
                                    <option value="HCM">Hồ Chí Minh</option>
                                    <option value="Danang">Đà Nẵng</option>
                                    <option value="Hue">Huế</option>
                                </select>
                            </div>
                            <div class="col-right1" style="padding: 10px 10px 0px;margin-bottom: 10px;">
                                <select id="district" class="inputs1">
                                    <option value="">Chọn quận/huyện</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" id="specificAddress" class="inputs1" style="width: 97%;margin: 8px;">
                        <label for="specificAddress" class="form-lable">Địa chỉ cụ thể</label>
                    </div>

                </div>
                <div style="    padding: 10px 30px;">
                    <div class="totals">
                        <div class="total-info">
                            <table class="cart-total">
                                <tbody>
                                    <tr class="order-total">
                                        <td class="cart-total-left">Tổng tiền:</td>
                                        <td class="cart-total-right">
                                            <span class="value-summary">
                                                <?= number_format($total, 0, ',', '.') ?>₫
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="terms-of-service" style="text-align: left;">
                            <div class="d-flex">
                                <div><input id="termsofservice" type="checkbox" name="termsofservice" checked=""
                                        class="has-value"></div>
                                <label style="cursor: pointer;margin-bottom:0;" for="termsofservice"><span
                                        class="rule-web">Tôi đã đọc và đồng ý với</span>
                                    <a href="/dieu-khoan-dieu-kien" class="read">điều khoản và điều kiện</a>
                                    điều khoản và điều kiện
                                    <span class="rule-web">của website</span></label>
                            </div>
                        </div>
                        <div class="checkout-buttons">
                            <button type="submit" class="btn-primary">Tiến hành đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else { ?>
        <div class="no-data">
            <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 18 19" fill="none">
                <path d="M6.5 16C6.20333 16 5.91332 16.088 5.66664 16.2528C5.41997 16.4176 5.22771 
                        16.6519 5.11418 16.926C5.00065 17.2001 4.97094 17.5017 5.02882 17.7926C5.0867 
                        18.0836 5.22956 18.3509 5.43934 18.5607C5.64912 18.7704 5.91639 18.9133 
                        6.20736 18.9712C6.49834 19.0291 6.79994 18.9993 7.07403 18.8858C7.34811 18.7723 
                        7.58238 18.58 7.7472 18.3334C7.91203 18.0867 8 17.7967 8 17.5C8 17.1022 7.84196 
                        16.7206 7.56066 16.4393C7.27936 16.158 6.89782 16 6.5 16ZM17 13H5C4.73478 13 4.48043 
                        12.8946 4.29289 12.7071C4.10536 12.5196 4 12.2652 4 12C4 11.7348 4.10536 11.4804 4.29289 
                        11.2929C4.48043 11.1054 4.73478 11 5 11H13.491C14.1425 10.998 14.7758 10.7848 15.2959 
                        10.3925C15.8161 10.0002 16.195 9.44986 16.376 8.824L17.961 3.274C18.0034 3.12526 18.0107 
                        2.96872 17.9823 2.81669C17.954 2.66465 17.8907 2.52126 17.7976 2.3978C17.7045 2.27433 
                        17.584 2.17414 17.4456 2.10512C17.3072 2.0361 17.1547 2.00011 17 2H4.74C4.53281 1.41702 
                        4.15083 0.912132 3.64616 0.554211C3.14149 0.196289 2.5387 0.00275366 1.92 0H1C0.734784 
                        0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 
                        1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2H1.921C2.13815 2.00069 2.34924 
                        2.0717 2.52266 2.2024C2.69608 2.33309 2.8225 2.51644 2.883 2.725L3.038 3.27V3.275L4.679 
                        9.017C3.91517 9.09866 3.21176 9.47022 2.71375 10.0551C2.21574 10.64 1.96107 11.3936 2.00222 
                        12.1607C2.04338 12.9278 2.37722 13.6499 2.93496 14.1781C3.49269 14.7064 4.23181 15.0005 5 
                        15H17C17.2652 15 17.5196 14.8946 17.7071 14.7071C17.8946 14.5196 18 14.2652 18 14C18 13.7348 
                        17.8946 13.4804 17.7071 13.2929C17.5196 13.1054 17.2652 13 17 13ZM15.674 4L14.454 8.274C14.3936 
                        8.48291 14.2671 8.6666 14.0935 8.7975C13.9199 8.9284 13.7085 8.99946 13.491 9H6.754L6.499 8.108L5.326 
                        4H15.674ZM14.5 16C14.2033 16 13.9133 16.088 13.6666 16.2528C13.42 16.4176 13.2277 16.6519 13.1142 
                        16.926C13.0006 17.2001 12.9709 17.5017 13.0288 17.7926C13.0867 18.0836 13.2296 18.3509 13.4393 
                        18.5607C13.6491 18.7704 13.9164 18.9133 14.2074 18.9712C14.4983 19.0291 14.7999 18.9993 15.074 
                        18.8858C15.3481 18.7723 15.5824 18.58 15.7472 18.3334C15.912 18.0867 16 17.7967 16 17.5C16 17.1022 
                        15.842 16.7206 15.5607 16.4393C15.2794 16.158 14.8978 16 14.5 16Z" fill="#96dc93"></path>
            </svg>
            <span>Giỏ hàng của bạn chưa có sản phẩm nào!</span>
        </div>

        <?php
    }
    ?>
</body>
<script>
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

</html>