<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        /* Reset CSS */
        * {
            margin: 0 auto;
            padding: 0 auto;
            box-sizing: border-box;
        }

        /* Body và font */
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;
        }

        .box {
            display: flex;
            justify-content: space-around;
            padding: 50px 30px;
            margin: 50px 250px;
        }

        /* Container của form */
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Tiêu đề của form */
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Form labels và inputs */
        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Nút đăng nhập */
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Kết quả thông báo */
        .kq {
            margin-top: 20px;
            text-align: center;
            color: #ff4d4d;
        }

        .kq span {
            font-size: 14px;
            color: #ff4d4d;
        }

        .login_form {
            width: 462px;
        }

        .login_form h1 {
            font-weight: 100;
        }

        /* Nút chưa có tài khoản */
        .register-btn {
            display: block;
            margin-top: 20px;
            text-align: center;
        }

        .register-btn a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .register-btn a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
                width: 90%;
            }

            input[type="text"],
            input[type="password"] {
                font-size: 14px;
                padding: 8px;
            }

            input[type="submit"] {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <?php include "components/header.php"; ?>
    <div class="box">
        <div class="img">
            <img src="upload/TND_M402_010 1.jpeg" alt="">
        </div>
        <div class="login_form">
            <form class="form_res" method="POST" enctype="multipart/form-data">
                <h1>Đăng ký tài khoản</h1>
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Họ và tên</label>
                <input type="text" name="NameUser" required>

                <label for="email">Email</label>
                <input type="email" name="email" required>

                <label for="email">Ảnh đại diện</label>
                <input type="file" name="image" required>

                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Xác nhận mật khẩu</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <?php
                // Hiển thị thông báo lỗi nếu có
                if (isset($_SESSION['error'])) {
                    echo '<div style="color: red;">' . $_SESSION['error'] . '</div>';
                    unset($_SESSION['error']);
                }

                // Hiển thị thông báo thành công
                if (isset($_SESSION['success'])) {
                    echo '<div style="color: green;">' . $_SESSION['success'] . '</div>';
                    unset($_SESSION['success']);
                }
                ?>
                <br>
                <input type="submit" name="submit" value="Đăng Ký">


                <div>Đã có tài khoản? <a href="?act=login"> Đăng nhập ngay</a></div>
            </form>
        </div>


    </div>
    <?php include "components/footer.php"; ?>
</body>

</html>