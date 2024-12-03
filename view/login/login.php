<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        * {
            margin: 0 auto;
            padding: 0 auto;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: white;


        }

        .title {
            margin-bottom: 20px;
        }

        .box {
            display: flex;
            justify-content: space-around;
            padding: 50px 30px;
            margin: 50px 250px;
        }

        .login_form {
            width: 462px;
        }

        .login_form h1 {
            font-weight: 100;
        }

        /* Form labels và inputs */
        label {
            font-size: 14px;
            color: #333;
            display: block;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
            margin-bottom: 20px;
        }

        .inputs {
            display: flex;
            justify-content: space-between;
        }

        .inputs * {
            display: inline-block;
            width: auto;
            margin: 5px;
            font-size: 14px;
            color: #444;
        }

        .inputs span a {
            color: #0066CC;

        }

        .inputs label {
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            color: #86868B;
            margin-bottom: 10px;
        }

        input#checkbox {
            width: 18px;
            height: 18px;
            margin-top: 0px;
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
<?php
include 'components/header.php';
?>

<body>
    <?php
    // Tránh lỗi "undefined variable" bằng cách kiểm tra trước khi sử dụng
    $kq ??= ""; // Nếu chưa có giá trị thì khởi tạo $kq là một chuỗi rỗng
    ?>
    <div class="box">
        <div class="img">
            <p><img src="upload/VNU_M492_08 1.jpeg" alt=""></p>
        </div>
        <div class="login_form">
            <form id="login" method="POST">
                <div class="title">
                    <h1>Đăng nhập</h1>
                </div>
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password">
                <div class="inputs">
                    <div>
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox">Nhớ mật khẩu</label>
                    </div>
                    <span><a href="">Quên mật khẩu?</a></span>
                </div>
                <input type="submit" name="submit" value="Đăng Nhập">
                <div class="kq">
                    <span>
                        <?php echo $kq; ?>
                    </span>
                </div><br>

                <div>Bạn chưa có tài khoản? <a href="?act=register">Tạo tài khoản ngay</a></div>
            </form>
        </div>
    </div>
    </form>
    <?php include "components/footer.php"; ?>
</body>

</html>