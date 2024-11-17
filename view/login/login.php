<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body và font */
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;


        }

        .box {
            width: 1500px;
            display: flex;
            justify-content: space-around;
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
    $kq = $kq ?? ""; // Nếu chưa có giá trị thì khởi tạo $kq là một chuỗi rỗng
    ?>
    <div class="box">
        <div class="img">
            <p><img src="upload/VNU_M492_08 1.jpeg" alt=""></p>
        </div>

        <form id="login" method="POST">
            <h1>Login</h1><br>
            <label for="username">Tên đăng nhập:</label><br>
            <input type="text" id="username" name="username"><br><br>

            <label for="password">Mật khẩu:</label><br>
            <input type="password" id="password" name="password"><br><br>

            <input type="submit" name="submit" value="Đăng Nhập">


            <div class="kq">
                <span>
                    <?php echo $kq; ?>
                </span>
            </div><br>

            <a href="?act=register">Chưa có tài khoản</a>
        </form>
    </div>
    </form>
    <?php include "components/footer.php"; ?>
</body>

</html>