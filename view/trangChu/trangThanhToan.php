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
            border-radius: 12px;
            box-shadow: 0 24px 80px rgba(0, 0, 0, .07), 0 10.0266px 33.4221px rgba(0, 0, 0, .0503198), 0 5.36071px 17.869px rgba(0, 0, 0, .0417275), 0 3.00517px 10.0172px rgba(0, 0, 0, .035), 0 1.59602px 5.32008px rgba(0, 0, 0, .0282725), 0 0.664142px 2.21381px rgba(0, 0, 0, .0196802);
            margin-top: 40px;
        }

        .cart h1 {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #f5f5f7;
            border-radius: 12px 12px 0 0;
            padding: 14px 0;
            color: #00a651;
            font-size: 15px;
            font-weight: 700;
            text-transform: none;
            line-height: 20px;
        }

        .cart svg {
            margin-top: 1px;
        }


        .shopping-cart-info {
            padding: 0px 30px 10px 30px;
        }


        .image img {
            width: 100%
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
            cursor: pointer;

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

        .order-overview-content {
            width: 100%;
            margin-bottom: 0;
            background-color: #f5f5f7;
            border-radius: 12px;
            padding: 10px 0px;
            font-size: 14px;
        }

        .order-overview-content strong {
            margin-right: 5px;
        }

        .section.order-completed .note {
            font-size: 14px;
            text-align: center;
            color: #333;
        }

        a.checkout-policy {
            text-align: center;
            color: #288ad6;
            display: block;
            margin: 17px auto 20px;
            width: -moz-fit-content;
            width: fit-content;
        }

        a.buyanotherNew {
            display: block;
            overflow: hidden;
            border: 1px solid #288ad6;
            background-color: #fff;
            text-align: center;
            color: #288ad6;
            border-radius: 4px;
            padding: 10px;
            margin: 10px 12px;
            margin-top: 20px;
            height: 40px;
        }

        .arlet {
            color: #fb6e2e;
            background: rgba(251, 110, 46, .05);
            border: 1px dashed #fb6e2e;
            box-sizing: border-box;
            border-radius: 4px;
            text-align: center;
            padding: 10px 0;
            margin: 15px 0 4px;
            font-size: 14px;
        }

        .order-number {
            list-style-type: none;
            padding: 0px 20px;
        }

        .order-overview-content li:not(:first-child) {
            margin: 5px 60px;
            list-style-type: disc;
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

        .title {
            line-height: 21px;
            color: #323232;
            padding: 15px 8px 15px 0;
            text-align: left;
            font-size: 14px;
            margin: 0;
        }

        .info {
            padding: 12px;
            border-radius: 12px;
            border: 1px solid #e5e5e5;
            margin-top: 10px;
            margin: 0px 30px 17px 30px !important;
            font-size: 14px;
            font-weight: none;
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
    <div class="container">
        <div class="cart">
            <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M4.03498 11.573C4.49698 9.264 4.72798 8.11 5.55698 7.43C6.38698 6.75 7.56398 6.75 9.91898 6.75H14.081C16.436 6.75 17.613 6.75 18.442 7.43C19.272 8.11 19.502 9.264 19.965 11.573L20.565 14.573C21.229 17.893 21.561 19.553 20.661 20.652C19.761 21.75 18.067 21.75 14.681 21.75H9.31998C5.93398 21.75 4.23998 21.75 3.33998 20.652C2.43998 19.554 2.77198 17.894 3.43598 14.573L4.03498 11.573Z"
                        fill="#049844"></path>
                    <path
                        d="M15 10.75C15.5523 10.75 16 10.3023 16 9.75C16 9.19772 15.5523 8.75 15 8.75C14.4477 8.75 14 9.19772 14 9.75C14 10.3023 14.4477 10.75 15 10.75Z"
                        fill="#5EBF23"></path>
                    <path
                        d="M9 10.75C9.55228 10.75 10 10.3023 10 9.75C10 9.19772 9.55228 8.75 9 8.75C8.44772 8.75 8 9.19772 8 9.75C8 10.3023 8.44772 10.75 9 10.75Z"
                        fill="#5EBF23"></path>
                    <path
                        d="M9.75 5.75C9.75 5.15326 9.98705 4.58097 10.409 4.15901C10.831 3.73705 11.4033 3.5 12 3.5C12.5967 3.5 13.169 3.73705 13.591 4.15901C14.0129 4.58097 14.25 5.15326 14.25 5.75V6.75H14.681C15.058 6.75 15.414 6.75 15.75 6.752V5.75C15.75 4.75544 15.3549 3.80161 14.6517 3.09835C13.9484 2.39509 12.9946 2 12 2C11.0054 2 10.0516 2.39509 9.34835 3.09835C8.64509 3.80161 8.25 4.75544 8.25 5.75V6.752C8.586 6.75 8.942 6.75 9.319 6.75H9.75V5.75Z"
                        fill="#5EBF23"></path>
                </svg> Đặt hàng thành công
            </h1>
            <div class="shopping-cart-info">
                <h3 class="title">Cảm ơn bạn vì đã mua hàng của chúng tôi</h3>
                <ul class="order-overview-content">
                    <li class="order-number"><label><strong>Đơn hàng:</strong><span
                                style="color:#0071e3">#<?= $info->orders_id ?></span></label></li>
                    <li class="name"><strong>Người nhận:</strong><?= $info->NameUser ?>, <?= $info->numberPhone ?></li>
                    <li class="cart-total"><strong>Nhận tại:</strong>
                        <?php
                        if ($info->shipping_address == "COD") {
                            echo "Nhận tại cửa hàng";
                        } else {
                            echo $info->shipping_address;
                        } ?>
                    </li>
                    <li class="cart-total"><strong>Tổng tiền:</strong>
                        <strong><?= number_format($info->totalOrder) ?>₫</strong>
                    </li>
                </ul>
                <?php
                if ($info->shipping_address !== "COD") {
                    echo '<div class="arlet">Đơn hàng chưa được thanh toán</div>';
                }
                ?>
            </div>
            <div class="info">
                <div class="cl-wrap-qr">
                    <div class="cl-wrap-payment-info">
                        <div class="cl-payment-info">
                            <p>Số tài khoản: 99MM24740M80121814</p>
                            <p>Ngân hàng: BVBank</p>
                            <p>Chủ tài khoản: PHAM DINH DUNG</p>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <img src="upload/checkout.jpg" style="width:125.7px">
                    </div>
                </div>
                <span style="justify-content: center; display:flex;" class="note-qr">Dùng ứng dụng ngân hàng quét mã QR
                    để
                    chuyển
                    khoản</span>
            </div>
            <div class="checkout-data" style="margin-bottom: 23px;padding: 0px 30px 17px 30px;">
                <div class="section order-completed">
                    <div class="note">Khi cần hỗ trợ vui lòng gọi
                        <a style="color:#288ad6" href="tel:19006626" class="policy-phone-number">1900.6626</a> (08:00 -
                        22:00)
                    </div>
                    <a class="checkout-policy" href="/chinh-sach-doi-tra">Xem chính sách mua hàng</a>
                    <a class="buyanotherNew" href="?act="> Về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
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