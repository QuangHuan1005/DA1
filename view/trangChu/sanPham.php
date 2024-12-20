<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điện thoại Iphone chính hãng</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        * {
            margin: 0 auto;
            padding: 0 auto;
            box-sizing: border-box;
        }

        .title {
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            line-height: 54px;
            margin-bottom: 20px;
        }

        .slideshow-container {
            position: relative;
            width: 1200px;
            height: 400px;
            overflow: hidden;
            border-radius: 8px;
        }

        .mySlides {
            position: absolute;
            width: 100%;
            height: 100%;
            transform: translateX(100%);
            transition: transform 0.7s ease-in-out;
        }

        .mySlides.active {
            transform: translateX(0);
            z-index: 2;
        }

        .mySlides.previous {
            transform: translateX(-100%);
            z-index: 1;
        }

        img {
            width: 100%;
            height: 100%;
        }

        .big {
            width: 100%;
            display: flex;
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

        .main {
            width: 100%;
            background-color: #F5F5F7;
            border-radius: 1px solid black;
            margin-top: 10px;
            padding-top: 10px;
        }

        .menu2 {
            width: 1200px;
            align-items: center;
            margin-top: 20px;
        }

        .menu2 ul {
            display: flex;
            list-style-type: none;
        }

        .menu2 ul li a {
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
            line-height: 18px;
            color: #515154;
            white-space: nowrap;
        }

        .menu2 ul li a:focus {
            color: #0066CC;
            border-bottom: 2px solid #0066CC;
            padding-bottom: 7px;
        }

        .menu2 ul li a:active {
            color: #0066CC;
            border-bottom: 2px solid #0066CC;
        }

        .box {
            display: none;
        }

        .box a {
            text-decoration: none;
        }

        .box.active {
            display: block;
            /* Hiển thị box có class "active" */
        }

        .menu3 {
            width: 1200px;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .menu3 .nd {
            width: 590px;
            display: flex;
            background-color: white;
            justify-content: center;
            align-items: center;
        }

        .linkContent {
            margin: 10px 0px 10px 15px;

        }

        .linkContent li a {
            text-decoration: none;
            color: #3598db;
            font-size: 15px;
            font-weight: bold;
        }

        .menu3 .nd .anh1 {
            width: 180px;
            height: auto;
            /* margin-left: 20px; */
        }

        .menu3 .nd .text1 {
            font-weight: 700;
            font-size: 24px;
            line-height: 28px;
            color: #1D1D1F;
            text-align: start;
            padding-bottom: 20px;

        }

        .menu3 .nd a {
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            color: #0066CC;
            text-decoration: auto;
        }

        .text-container {
            width: 1200px;
            margin-top: 30px;
            padding: 20px 20px 0px;
            background-color: white;
            align-items: center;
            border-radius: 10px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .text-content {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            margin: 20px;
            padding-top: 10px;
        }

        .more-text {
            display: none;
            font-family: arial, helvetica, sans-serif;
            color: #515154;
            font-size: 11pt;
        }

        .more-text1 {
            font-family: arial, helvetica, sans-serif;
            color: #515154;
            font-size: 11pt;
        }

        .show-more {
            color: #0066cc;
            display: block;
            display: block;
            margin: 0 auto;
            max-width: 218px;
            position: relative;
            padding: 8px 5px;
            font-size: 14px;
            line-height: 21px;
            text-align: center;
            cursor: pointer;
        }

        .show-more:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <?php include "components/header.php"; ?>
    <div class="container">
        <div class="link">
            <a href="?act=">Trang chủ ›</a>
            <p> Iphone</p>
        </div>
        <div class="big">
            <!-- tong hop nd -->

            <div class="main">
                <div class="title">iPhone</div>
                <!-- slide show -->
                <div class="slideshow-container">
                    <div class="mySlides">
                        <img src="upload/banner1.png" alt="Slide 1">
                    </div>
                    <div class="mySlides">
                        <img src="upload/banner2.png" alt="Slide 2">
                    </div>
                    <div class="mySlides">
                        <img src="upload/banner3.png" alt="Slide 3">
                    </div>
                    <div class="mySlides">
                        <img src="upload/banner4.png" alt="Slide 3">
                    </div>
                    <div class="mySlides">
                        <img src="upload/banner5.png" alt="Slide 3">
                    </div>
                </div>
                <!-- menu sp -->
                <div class="menu2">
                    <ul>
                        <li><a href="#" class="all" data-target="box1">Tất cả</a></li>
                        <li><a href="#" class="ip16" data-target="box2">iPhone 16 series</a></li>
                        <li><a href="#" class="ip15" data-target="box3">iPhone 15 series</a></li>
                        <li><a href="#" class="ip14" data-target="box4">iPhone 14 series</a></li>
                        <li><a href="#" class="ip13" data-target="box5">iPhone 13 series</a></li>
                        <li><a href="#" class="ip12" data-target="box6">iPhone 12 series</a></li>
                        <li><a href="#" class="ipSE" data-target="box7">iPhone 11 series</a></li>
                    </ul>
                </div>
                <div class="product-showcase">
                    <div class="product-grid">
                        <?php foreach ($all as $key) { ?>
                            <div class="box1 box active">
                                <!-- img o trong db : 	/upload/ip16.jpeg -->
                                <div class="product">
                                    <a href="?act=chiTiet&id=<?= $key->product_id ?>">
                                        <img src="<?= $key->image ?>" width="240px" height="240px" alt="">
                                    </a>
                                    <div class="product_name"><?= $key->product_name ?></div>
                                    <div class="product_price"><?= number_format($key->price) . "₫" ?></div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php foreach ($all as $key) {
                            if ($key->category_id == 9) { ?>
                                <div class="box2 box">
                                    <!-- img o trong db : 	/upload/ip16.jpeg -->
                                    <div class="product">
                                        <a href="?act=chiTiet&id=<?= $key->product_id ?>">
                                            <img src="<?= $key->image ?>" width="240px" height="240px" alt="">
                                        </a>
                                        <div class="product_name"><?= $key->product_name ?></div>
                                        <div class="product_price"><?= number_format($key->price) . "₫" ?></div>
                                    </div>
                                </div>

                            <?php }
                        } ?>
                        <?php foreach ($all as $key) {
                            if ($key->category_id == 10) { ?>
                                <div class="box3 box">
                                    <!-- img o trong db : 	/upload/ip16.jpeg -->
                                    <div class="product">
                                        <a href="?act=chiTiet&id=<?= $key->product_id ?>">
                                            <img src="<?= $key->image ?>" width="240px" height="240px" alt="">
                                        </a>
                                        <div class="product_name"><?= $key->product_name ?></div>
                                        <div class="product_price"><?= number_format($key->price) . "₫" ?></div>
                                    </div>
                                </div>

                            <?php }
                        } ?>
                        <?php foreach ($all as $key) {
                            if ($key->category_id == 11) { ?>
                                <div class="box4 box">
                                    <!-- img o trong db : 	/upload/ip16.jpeg -->
                                    <div class="product">
                                        <a href="?act=chiTiet&id=<?= $key->product_id ?>">
                                            <img src="<?= $key->image ?>" width="240px" height="240px" alt="">
                                        </a>
                                        <div class="product_name"><?= $key->product_name ?></div>
                                        <div class="product_price"><?= number_format($key->price) . "₫" ?></div>
                                    </div>
                                </div>

                            <?php }
                        } ?>
                        <?php foreach ($all as $key) {
                            if ($key->category_id == 12) { ?>
                                <div class="box5 box">
                                    <!-- img o trong db : 	/upload/ip16.jpeg -->
                                    <div class="product">
                                        <a href="?act=chiTiet&id=<?= $key->product_id ?>">
                                            <img src="<?= $key->image ?>" width="240px" height="240px" alt="">
                                        </a>
                                        <div class="product_name"><?= $key->product_name ?></div>
                                        <div class="product_price"><?= number_format($key->price) . "₫" ?></div>
                                    </div>
                                </div>

                            <?php }
                        } ?>
                        <?php foreach ($all as $key) {
                            if ($key->category_id == 13) { ?>
                                <div class="box6 box">
                                    <!-- img o trong db : 	/upload/ip16.jpeg -->
                                    <div class="product">
                                        <a href="?act=chiTiet&id=<?= $key->product_id ?>">
                                            <img src="<?= $key->image ?>" width="240px" height="240px" alt="">
                                        </a>
                                        <div class="product_name"><?= $key->product_name ?></div>
                                        <div class="product_price"><?= number_format($key->price) . "₫" ?></div>
                                    </div>
                                </div>

                            <?php }
                        } ?>
                        <?php foreach ($all as $key) {
                            if ($key->category_id == 14) { ?>
                                <div class="box7 box">
                                    <!-- img o trong db : 	/upload/ip16.jpeg -->
                                    <div class="product">
                                        <a href="?act=chiTiet&id=<?= $key->product_id ?>">
                                            <img src="<?= $key->image ?>" width="240px" height="240px" alt="">
                                        </a>
                                        <div class="product_name"><?= $key->product_name ?></div>
                                        <div class="product_price"><?= number_format($key->price) . "₫" ?></div>
                                    </div>
                                </div>

                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- sp them -->
                <div class="menu3">
                    <div class="nd">
                        <div class="anh1">
                            <img src="upload/iphone-all.jpg" alt="">
                        </div>
                        <div class="text1">
                            Tìm iPhone
                            <br>
                            phù hợp với bạn <br>
                            <a href="#">So sánh các iPhone ›</a>
                        </div>

                    </div>
                    <div class="nd">
                        <div class="anh1">
                            <img src="upload/Image-Standard-1.png" alt="">
                        </div>
                        <div class="text1">
                            Phụ kiện iPhone <br>
                            thường mua kèm <br>
                            <a href="#">Tìm phụ kiện ›</a>
                        </div>
                    </div>
                </div>
                <!-- thong tin them -->
                <div class="text-container">
                    <div class="text-content">
                        <h2>Lịch sử hình thành, phát triển của iPhone</h2>
                        <p class="more-text1">iPhone là dòng điện thoại thông minh được phát triển từ Apple Inc, được ra
                            mắt lần đầu tiên
                            bởi Steve Jobs và mở bán năm 2007. Bên cạnh tính năng của một máy điện thoại thông thường,
                            iPhone còn được trang bị màn hình cảm ứng, camera, khả năng chơi nhạc và chiếu phim, trình
                            duyệt web... Phiên bản thứ hai là iPhone 3G ra mắt tháng 7 năm 2008, được trang bị thêm hệ
                            thống định vị toàn cầu, mạng 3G tốc độ cao. Trải qua 15 năm tính đến nay đã có đến 34 mẫu
                            iPhone được sản xuất từ dòng 2G cho đến iPhone 13 Pro Max và Apple là một trong những thương
                            hiệu điện thoại được yêu thích và sử dụng phổ biến nhất trên thế giới.</p>
                        <h2>iPhone có những mã máy nào?</h2>
                        <span class="more-text">
                            <p>
                                Những chiếc iPhone do Apple phân phối tại thị trường nước nào
                                thì sẽ mang mã của nước đó. Ví dụ: LL: Mỹ, ZA: Singapore, TH: Thái Lan, JA: Nhật
                                Bản, Những mã này xuất hiện tại Việt Nam đều là hàng xách tay, nhập khẩu. Còn tại
                                Việt Nam, iPhone sẽ được mang mã VN/A. Tất cả các mã này đều là hàng chính hãng phân
                                phối của Apple. Lợi thế khi bạn sử dụng iPhone mã VN/A đó là chế độ bảo hành tốt hơn
                                với 12 tháng theo tiêu chuẩn của Apple. iPhone của bạn sẽ được bảo hành tại tất cả
                                các trung tâm bảo hành Apple tại Việt Nam, một số mã quốc tế bị từ chối bảo hành và
                                phải đem ra các trung tâm bảo hành Apple tại nước ngoài. Rất là phức tạp đúng không
                                nào?
                            </p>
                            <h2>Apple đã khai tử những dòng iPhone nào?</h2>
                            <p>Tính đến nay, Apple đã khai tử (ngừng sản xuất) các dòng iPhone đời cũ bao gồm: iPhone
                                2G, iPhone 3G, iPhone 4, iPhone 5 series, iPhone 6 series, iPhone 7 series, iPhone 8
                                series, iPhone X series, iPhone SE (thế hệ 1), iPhone SE (thế hệ 2), iPhone 11 Pro,
                                iPhone 11 Pro Max, iPhone 12 Pro, iPhone 12 Pro Max.</p>
                            <h2>Chúng tôi cung cấp những dòng iPhone nào?</h2>
                            <p>là một trong những thương hiệu bán lẻ được Apple uỷ quyền tại Việt Nam, đáp ứng được các
                                yêu cầu khắt khe từ Apple như: dịch vụ kinh doanh, dịch vụ chăm sóc khách hàng, vị trí
                                đặt cửa hàng...

                                Những chiếc iPhone do Apple Việt Nam phân phối tại nước ta đều mang mã VN/A và được bảo
                                hành 12 tháng theo theo tiêu chuẩn tại các trung tâm bảo hành Apple. Các dòng iPhone
                                được cung cấp gồm:</p>
                            <ul class="linkContent">
                                <li><a href="#">iPhone 16 series</a></li>
                                <li><a href="#">iPhone 15 series</a></li>
                                <li><a href="#">iPhone 14 series</a></li>
                                <li><a href="#">iPhone 13 series</a></li>
                                <li><a href="#">iPhone 12 series</a></li>
                                <li><a href="#">iPhone 11 series</a></li>
                                <li><a href="#">iPhone SE series</a></li>
                            </ul>
                            <p>iPhone 11 được trang bị màn hình LCD và không hỗ trợ HDR, nâng cấp với chế độ chụp đêm
                                Night Mode cùng Deep Fusion. Camera trước được nâng độ phân giải từ 7MP lên thành 12MP.
                                Được trang bị chip A13 Bionic và hỗ trợ công nghệ WiFi 6. Với 6 màu sắc bắt mắt: Đen,
                                Trắng, Xanh Mint, Đỏ, Vàng, Tím.
                            </p><br>
                            <p> iPhone 12 mini, iPhone 12 là những chiếc iPhone đầu tiên của hãng hỗ trợ mạng di động
                                5G. Apple đã thay đổi thiết kế của iPhone từ khung viền bo tròn thành khung viền vuông
                                vức như những dòng iPhone 5 và sử dụng mặt kính trước Ceramic Shield. Ngoài ra, hộp của
                                thiết bị iPhone 12 và các dòng iPhone sau đều đã được loại bỏ củ sạc.
                            </p>
                            <br>
                            <p>Tháng 9 năm 2021, Apple đã chính thức ra mắt 4 chiếc iPhone mới của hãng bao gồm iPhone
                                13 mini, iPhone 13, iPhone 13 Pro, iPhone 13 Pro Max. Các cụm Camera trên bộ 4 iPhone
                                mới của Apple đều to hơn một chút so với thế hệ tiền nhiệm và phần tai thỏ ở mặt trước
                                cũng được làm nhỏ hơn. Đối với iPhone 13 Pro và iPhone 13 Pro Max, Apple đã nâng cấp bộ
                                nhớ tối đa của máy lên đến 1TB. Đi cùng với đó là tần số quét của dòng iPhone 13 cũng đã
                                được nâng cấp lên 120Hz.
                            </p>
                            <br>
                            <p>iPhone SE thế hệ 3 (còn gọi là iPhone SE 3 hay iPhone SE 2022) được Apple công bố vào
                                tháng 3 năm 2022, kế nhiệm iPhone SE 2. Đây là một phần của iPhone thế hệ thứ 15, cùng
                                với iPhone 13 và iPhone 13 Pro. Thế hệ thứ 3 có kích thước và yếu tố hình thức của thế
                                hệ trước, trong khi các thành phần phần cứng bên trong được lựa chọn từ dòng iPhone 13,
                                bao gồm cả hệ thống trên chip A15 Bionic.
                            </p>
                        </span>
                        <p>
                            <span class="show-more" onclick="toggleText()">Tìm hiểu thêm</span>
                        </p>
                    </div>
                </div>

                <!-- danh gia sp -->

            </div>
        </div>

        <?php include "components/footer.php"; ?>
    </div>
</body>

</html>
<script>
    let slideIndex = 0;

    const showSlide = () => {
        const slides = document.querySelectorAll(".mySlides");
        slides.forEach((slide) => {
            slide.classList.remove("active", "previous");
        });
        slides[slideIndex].classList.add("active");
        const previousSlideIndex =
            slideIndex === 0 ? slides.length - 1 : slideIndex - 1;
        slides[previousSlideIndex].classList.add("previous");
        slideIndex = (slideIndex + 1) % slides.length;
        setTimeout(showSlide, 3000);
    }
    window.onload = showSlide;
    // Initialize the slideshow
    // Tìm tất cả các liên kết có href = "#"
    const links = document.querySelectorAll('a[href="#"]');

    // Thêm sự kiện click vào tất cả các liên kết này
    links.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Ngăn không cho tải lại trang
            console.log("Link clicked, but no page reload");
        });
    });


    // Lấy tất cả các liên kết trong menu
    const menuLinks = document.querySelectorAll('.menu2 ul li a');

    // Lấy tất cả các box sản phẩm
    const boxes = document.querySelectorAll('.box');
    // Lắng nghe sự kiện click vào các liên kết
    menuLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Ngăn không cho link reload trang

            // Lấy ID của box mà người dùng chọn từ thuộc tính data-target
            const targetBox = this.getAttribute('data-target');
            // Ẩn tất cả các box
            boxes.forEach(box => {
                box.classList.remove('active'); // Xóa class "active" để ẩn các box
            });

            // Hiển thị box tương ứng với mục tiêu người dùng chọn
            const selectedBox = document.getElementsByClassName(targetBox);
            console.log(selectedBox);
            const array = Array.from(selectedBox);
            array.forEach(selected => {
                selected.classList.add("active");
            }) // Thêm class "active" để hiển thị box
        });
    });


    //nut 'tim hieu them'
    function toggleText() {
        // Lấy phần text dài và nút "Tìm hiểu thêm"
        var moreText = document.querySelector(".more-text");
        var showMore = document.querySelector(".show-more");

        // Kiểm tra nếu phần text dài hiện đang bị ẩn hay không
        if (moreText.style.display === "none") {
            // Hiển thị phần text dài và thay đổi văn bản của nút
            moreText.style.display = "inline";
            showMore.innerHTML = "Thu gọn";
        } else {
            // Ẩn phần text dài và thay đổi văn bản của nút
            moreText.style.display = "none";
            showMore.innerHTML = "Tìm hiểu thêm";
        }
    }
</script>