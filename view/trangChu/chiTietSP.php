<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0 auto;
            padding: 0 auto;
            box-sizing: border-box;
        }

        .link {
            width: 100%;
            display: flex;
            background-color: #ffffff;
            align-items: center;
            /* Căn giữa theo chiều dọc */
            padding: 10px 5px;
            padding-left: 352px;
        }

        /* Cải thiện cách hiển thị của các phần tử con */
        .link a,
        .link p {
            margin: 0;
            /* Loại bỏ margin mặc định của các phần tử */
            padding: 0 10px;
            /* Thêm khoảng cách giữa các phần tử nếu cần */
            text-decoration: none;
            color: black;
        }

        /* Nếu bạn muốn '>' có khoảng cách nhỏ hơn so với chữ 'Iphone' */
        .link p {
            margin-left: 5px;
            /* Khoảng cách nhỏ giữa dấu '>' và 'Iphone' */
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            width: 1920px;
        }

        .big {
            width: 100%;
            display: flex;
        }

        .icon {
            width: 3%;
            align-items: center;

        }

        .circle-image-container {
            text-align: center;
            padding-top: 20%;
            position: fixed;
        }

        .circle-image {
            width: 40px;
            /* Set the width of the image */
            height: 40px;
            /* Set the height of the image (same as width to maintain a square) */
            border-radius: 50%;
            /* Makes the image circular */
            object-fit: cover;
            /* Ensures the image covers the area without stretching */
            border: 2px solid gray;
            /* Optional: Adds a white border around the circle */
            padding-top: 10%;

        }

        .circle {
            width: 20px;
            /* Đặt chiều rộng của hình tròn */
            height: 20px;
            /* Đặt chiều cao của hình tròn */
            background-color: #4CAF50;
            /* Màu nền của hình tròn (màu xanh lá cây) */
            border-radius: 50%;
            /* Đặt border-radius để tạo hình tròn */
            display: flex;
            /* Sử dụng flex để căn giữa nội dung */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            justify-content: center;
            /* Căn giữa theo chiều ngang */
            color: white;
            /* Màu của biểu tượng (trắng) */
            font-size: 10px;
            /* Kích thước biểu tượng */
        }

        .main {
            width: 1200px;
            display: flex;
            justify-content: center;
        }

        .anhsp {
            width: 550px;
            height: 550px;
            margin-top: 23px;
            align-items: center;
            /* Căn giữa theo chiều dọc */

        }

        .anhsp img {
            width: 550px;
            height: 550px;
        }

        .info {
            width: 50%;
        }

        .info h2 {
            color: blue;
        }

        .info span {
            opacity: 50%;
        }

        .uuDai {
            border: 1px solid rgba(235, 235, 235, 1);
            border-radius: 10px;
        }

        .ud_title {
            width: 96%;
            margin: 5px 10px;
            display: flex;
            align-items: center;
            border-bottom: 2px solid rgba(235, 235, 235, 1);
        }

        .ud_title i,
        h3 {
            margin: 5px;
            padding: 0;
        }

        .box_ud {
            margin-left: 5px;
            border-bottom: 2px solid rgba(235, 235, 235, 1);
            margin: 10px;
        }

        .box_ud:last-child {
            border-bottom: none;
        }

        .box_ud h5 {
            color: red;
        }

        .box_ud .icon {
            width: 100%;
            display: flex;

        }

        .box_ud .icon p,
        a {
            font-size: 15px;
            text-decoration: none;
        }

        .box_ud .icon a,
        .circle,
        p {
            margin: 0;
            padding: 0;
        }

        .box_ud:last-child {
            border-radius: 10px;
        }

        .box_ud:last-child .icon,
        p {
            margin: 10px;
        }

        .box_ud:last-child a {
            text-decoration: none;
        }

        .nut {
            width: 100%;
        }

        .nut button {
            width: 100%;
            height: 50px;
            background-color: rgba(0, 102, 204, 1);
            border-radius: 5px;
            margin-top: 10px;
            border: none;
        }

        .nut button a {
            color: white;
            text-decoration: none;
        }

        .nut .nut2 {
            display: flex;
        }

        .nut .nut2 button {
            background-color: white;
            border: 1px solid blue;
            margin: 10px 10px 10px 0px;
        }

        .nut .nut2 button:last-child {
            background-color: white;
            border: 1px solid blue;
            margin: 10px 0px 10px 10px;
        }

        .nut .nut2 button a {
            color: blue;
        }

        .boxall {
            width: 1200px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            position: relative;
        }

        .sptt {
            border-top: 1px solid #ccc;
            padding-top: 20px;
            width: 1200px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .menu2 {
            width: 1200px;
            margin-top: 100px;
        }

        .menu2 ul {
            display: flex;
            align-items: center;
            justify-content: center;
            list-style-type: none;
        }

        .menu2 ul li {
            margin: 0;
        }

        .menu2 ul li a {
            margin: 0px 5px 0px 5px;
            font-weight: 400;
            font-size: 14px;
            line-height: 21px;
            color: #1D1D1F;
            min-width: 144px;
            border: 1px solid #D2D2D7;
            border-radius: 8px;
            padding: 10px 20px;
        }

        .menu2 ul li a:focus {
            background: none !important;
            color: #0066CC !important;
            line-height: 21px;
            font-size: 14px;
            font-weight: 400;
            border: 1px solid #0066CC;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .all {
            width: 100%;
            align-items: center;
            margin: 10px;
            display: block;
        }

        /* Định dạng cho bảng */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            text-align: left;
            /* Căn trái cho nội dung bảng */
        }

        /* Định dạng cho các tiêu đề cột */
        .table th {
            background-color: #007bff;
            color: white;
            text-align: left;
            padding: 10px;
            font-weight: bold;
        }

        /* Định dạng cho các ô trong bảng */
        .table td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        /* Định dạng cho hàng khi rê chuột */
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Định dạng cho dòng đầu tiên (tiêu đề) */
        .table thead {
            background-color: #343a40;
            color: #fff;
        }

        /* Định dạng cho viền */
        /* .table,
        .table th,
        .table td {
            border: 1px solid #ddd;
        } */

        /* Mặc định: tất cả các box đều ẩn */
        .box {
            display: none;
        }

        /* Khi có class active thì hiển thị box */
        .box.active {
            display: block;
        }

        .box {
            margin: 20px;
            padding: 15px;
            width: 80%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
        }

        .table-striped {
            width: 1100px;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
            /* Màu nền nhạt cho các hàng lẻ */
        }

        .spec_name {
            width: 50%;
            font-size: 14px;
            padding: 10px;
            font-weight: 700;
            border-radius: 8px 0px 0px 8px;
        }

        .spec_value {
            width: 50%;
            font-size: 14px;
            padding: 10px;
            font-weight: 700;
            border-radius: 0px 8px 8px 0px;
        }

        .new1 {
            width: 30%;
            border-right: 1px solid #EBEBEB;
            padding: 20px;
            background-color: #fff;
        }

        /* Tiêu đề form */
        .new1 h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Các nhãn (labels) */
        .new1 span {
            font-size: 13px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        /* Các input fields */
        .new1 .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .new1 .form-control:focus {
            border-color: #007bff;
            background-color: #fff;
            outline: none;
        }

        /* Nút đăng */
        .new1 .btn-info {
            width: 100%;
            padding: 12px;
            background-color: #17a2b8;
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .new1 .btn-info:hover {
            background-color: #138496;
        }

        /* Hiển thị thông báo lỗi và thành công */
        .new1 .alert {
            margin-top: 10px;
            font-size: 14px;
            padding: 10px;
            color: #fff;
            border-radius: 4px;
        }

        .new1 .alert-danger {
            background-color: #dc3545;
        }

        .new1 .alert-success {
            background-color: #28a745;
        }

        /* Phần hiển thị đánh giá */
        .show {
            width: 70%;
            padding: 20px;
            background-color: #fff;
            font-family: Arial, sans-serif;
        }

        /* Tên người dùng */
        .show h3 {
            font-size: 18px;
            color: #007BFF;
            /* Màu xanh nổi bật */
            margin: 10px 0 5px;
        }

        /* Đánh giá (rating) */
        .show p:first-of-type {
            font-size: 16px;
            font-weight: bold;
            color: #FFD700;
            /* Màu vàng cho rating */
            margin: 0 0 5px;
        }

        /* Bình luận (comment) */
        .show p:last-of-type {
            font-size: 14px;
            line-height: 1.5;
            color: #555;
            margin: 0 0 10px;
        }

        /* Khoảng cách giữa các bình luận */
        .show br {
            margin: 15px 0;
        }

        /* Phần không có đánh giá */
        .show p {
            text-align: center;
            color: #999;
            font-style: italic;
        }

        .cmt {
            display: flex;
        }

        /* Hiệu ứng hover nếu cần */
        .show h3:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include "components/header.php"; ?>
    <div class="container">
        <div class="link">
            <a href="?act=home">Trang chủ ›</a>
            <a href="?act=sanPham"> iPhone ›</a>
            <p> <?= $sp->product_name ?></p>
        </div>
        <div class="big">
            <div class="main">
                <div class="anhsp">
                    <img src="<?= $sp->image ?>" alt="">
                </div>
                <div class="info">
                    <h1><?= $sp->product_name ?></h1>
                    <h2><?= number_format($sp->price) . "₫" ?></h2>
                    <span>(Đã bao gồm VAT)</span>
                    <!-- box thong tin uu dai -->
                    <div class="uuDai">
                        <!-- icon va text uu dai -->
                        <div class="ud_title">
                            <i class="fa-solid fa-gift"></i>
                            <h3>Ưu Đãi</h3>
                        </div>
                        <!-- uu dai 1 -->
                        <div class="box_ud">
                            <h5>I. Ưu đãi thanh toán</h5>

                            <div class="icon">
                                <div class="circle">
                                    <i class="fas fa-check"></i> <!-- Biểu tượng dấu tích (checkmark) -->
                                </div>
                                <p> Hỗ trợ trả góp 0% qua thẻ tín dụng Sacombank</p>
                            </div>

                            <div class="icon">
                                <div class="circle">
                                    <i class="fas fa-check"></i> <!-- Biểu tượng dấu tích (checkmark) -->
                                </div>
                                <p> Giảm 500.000đ khi thanh toán qua QR-VNPAY (ZLPSD - SL có hạn)</p>
                            </div>

                            <div class="icon">
                                <div class="circle">
                                    <i class="fas fa-check"></i> <!-- Biểu tượng dấu tích (checkmark) -->
                                </div>
                                <p> Giảm đến 200.000đ khi thanh toán qua Kredivo</p>
                            </div>

                        </div>
                        <!-- uu dai 2 -->
                        <div class="box_ud">
                            <h5>II. Ưu đãi mua kèm</h5>

                            <div class="icon">
                                <div class="circle">
                                    <i class="fas fa-check"></i> <!-- Biểu tượng dấu tích (checkmark) -->
                                </div>
                                <p> ́Ốp chính hãng Apple iPhone 15 series giảm 300.000đ </p>
                            </div>

                            <div class="icon">
                                <div class="circle">
                                    <i class="fas fa-check"></i> <!-- Biểu tượng dấu tích (checkmark) -->
                                </div>
                                <p> Sản phẩm Apple, Sony giảm đến 3.000.000đ </p><a href="#">(Xem chi tiết)</a>
                            </div>

                            <div class="icon">
                                <div class="circle">
                                    <i class="fas fa-check"></i> <!-- Biểu tượng dấu tích (checkmark) -->
                                </div>
                                <p> Mua combo phụ kiện Non Apple giảm đến 200.000đ </p>
                            </div>

                            <div class="icon">
                                <div class="circle">
                                    <i class="fas fa-check"></i> <!-- Biểu tượng dấu tích (checkmark) -->
                                </div>
                                <p> Giảm đến 20% khi mua các gói bảo hành  </p><a href="#">(Xem chi tiết)</a>
                            </div>

                        </div>

                        <!-- uu dai 3 -->
                        <div class="box_ud">
                            <h5>III. Ưu đãi lên đời</h5>
                            <div class="icon">
                                <div class="circle">
                                    <i class="fas fa-check"></i> <!-- Biểu tượng dấu tích (checkmark) -->
                                </div>
                                <p> Trợ giá lên đời đến 1.200.000đ </p><a href="#">(Xem chi tiết)</a>
                            </div>

                        </div>

                    </div>
                    <!-- button -->
                    <div class="nut">
                        <button><a href="#">Mua ngay</a></button>
                        <div class="nut2">
                            <button><a href="#">Trả góp</a></button>
                            <button><a href="#">Thu cũ đổi mới</a></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- sp tuong tu -->
        <div class="sptt">
            <h2>Sản phẩm tương tự</h2>
            <div class="product-grid">
                <?php foreach ($all as $key) {
                    if ($key->product_id !== $sp->product_id) { ?>
                        <div class="product" style="box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);margin-top: 20px;" id="b">
                            <!-- img o trong db : 	/upload/ip16.jpeg -->
                            <a href="?act=chiTiet&id=<?= $key->product_id ?>"><img src="<?= $key->image ?>" width="240px"
                                    height="240px" alt=""></a>
                            <div class="product_name"><?= $key->product_name ?></div>
                            <div class="product_price"><?= $key->price ?></div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
        <!-- cac thong tin them -->
        <div class="menu2">
            <ul>
                <li><a href="#" data-target="box1">Thông số kỹ thuật</a></li>
                <li><a href="#" data-target="box2">Hỏi đáp</a></li>
            </ul>
        </div>
        <div class="all">
            <div class="box active" id="box1">
                <table class="table-striped">
                    <tbody>
                        <tr class="odd">
                            <td class="spec_name">Tên sản phẩm</td>
                            <td class="spec_value"><?= $sp->product_name ?></td>
                        </tr>
                        <tr class="odd">
                            <td class="spec_name">Dung lượng bộ nhớ</td>
                            <td class="spec_value"><?= $sp->storage_capacity ?></td>
                        </tr>
                        <tr class="odd">
                            <td class="spec_name">Màu sắc</td>
                            <td class="spec_value"><?= $sp->color ?></td>
                        </tr>
                        <tr class="odd">
                            <td class="spec_name">Mô tả</td>
                            <td class="spec_value"><?= $sp->description ?></td>
                        </tr>
                        <tr class="odd">
                            <td class="spec_name">Số lượng còn lại</td>
                            <td class="spec_value"><?= $sp->stock_quantity ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="box" id="box2">
                <div class="cmt">
                    <div class="new1">
                        <form action="" id="form" method="post" enctype="multipart/form-data">
                            <h2>Bình luận</h2>
                            <span>Tên của bạn</span>
                            <input type="text" name="username" class="form-control"><br>
                            <span>Email hoặc số điện thoại</span>
                            <input type="number" name="rating" class="form-control" min="1" max="5"><br>
                            <span>Nội dung bình luận</span>
                            <input type="text" name="comment" class="form-control">
                            <button type="submit" name="add" class="btn btn-info">Gửi</button>
                            <?= isset($loi) ? $loi : '' ?>
                            <?= isset($thanhcong) ? $thanhcong : '' ?>
                        </form>
                    </div>
                    <div class="show">

                        <?php if (!empty($all_bl)) { ?>
                            <?php foreach ($all_bl as $bl) {
                                if ($bl->product_id == $sp->product_id) { ?>
                                    <h3><?= $bl->username ?></h3>
                                    <p><?= $bl->rating ?></p>
                                    <p><?= $bl->comment ?></p>
                                    <br>
                                <?php }
                            } ?>
                        <?php } else { ?>
                            <p>Chưa có đánh giá nào cho sản phẩm này.</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php"; ?>
    </div>
    <script>
        // Tìm tất cả các liên kết có href="#"
        const links = document.querySelectorAll('a[href="#"]');

        // Thêm sự kiện click vào tất cả các liên kết này
        links.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault(); // Ngăn không cho tải lại trang
                console.log("Link clicked, but no page reload");
            });
        });


        /// Lắng nghe sự kiện click trên các liên kết trong menu
        document.querySelectorAll('.menu2 a').forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết (di chuyển đến #)

                // Lấy giá trị của thuộc tính data-target từ liên kết
                const targetId = link.getAttribute('data-target');

                // Ẩn tất cả các box
                document.querySelectorAll('.box').forEach(box => {
                    box.classList.remove('active'); // Loại bỏ lớp active
                });

                // Hiển thị box tương ứng với ID được chọn
                const targetBox = document.getElementById(targetId);
                if (targetBox) {
                    targetBox.classList.add('active'); // Thêm lớp active để hiển thị
                }
            });
        });
    </script>
</body>

</html>