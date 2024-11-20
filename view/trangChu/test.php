<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll to Top</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        /* Đặt vị trí cho mũi tên ở góc dưới bên phải */
        .circle-image {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #000;
            color: #fff;
            border-radius: 50%;
            padding: 15px;
            cursor: pointer;
            font-size: 24px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: none; /* Ẩn mặc định */
        }
        .circle-image:hover {
            background-color: #333;
        }
    </style>
</head>
<body>

    <div style="height: 2000px;">
        <h1>Trang web dài</h1>
        <p>Cuộn trang xuống dưới và thử nhấn vào mũi tên để cuộn lên đầu trang!</p>
    </div>

    <!-- Biểu tượng mũi tên cuộn lên -->
    <div class="circle-image" onclick="scrollToTop()">
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    <script>
        // Hàm cuộn lên đầu trang
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"  // Thêm hiệu ứng cuộn mượt
            });
        }

        // Hiển thị nút khi người dùng cuộn xuống
        window.onscroll = function() {
            let button = document.querySelector('.circle-image');
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                button.style.display = "block";  // Hiển thị nút khi cuộn xuống
            } else {
                button.style.display = "none";   // Ẩn nút khi ở đầu trang
            }
        };
    </script>

</body>
</html>
