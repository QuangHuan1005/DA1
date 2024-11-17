<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update danh muc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        /* Tạo khoảng cách cho body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Tạo các khoảng cách cho container */
        .container-fluid {
            padding: 20px;
        }

        /* Tạo kiểu cho tiêu đề h3 */
        h3 {
            color: #007bff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Định dạng các phần tử form */
        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Định dạng các input */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Định dạng label và span */
        span {
            font-size: 16px;
            font-weight: 600;
        }

        /* Định dạng các nút button */
        button.btn-success {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button.btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        /* Định dạng các liên kết */
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Định dạng thông báo lỗi và thành công */
        .error {
            color: red;
            margin-top: 15px;
        }

        .success {
            color: green;
            margin-top: 15px;
        }

        /* Tạo các khoảng cách cho sidebar và main content */
        main {
            padding: 30px;
            background-color: #fff;
            margin-left: 20px;
            border-radius: 8px;
        }

        /* Responsive cho màn hình nhỏ */
        @media (max-width: 768px) {
            main {
                margin-left: 0;
            }

            form {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "components/sidebar.php" ?>
            <!-- Main Content -->

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-body-tertiary vh-100">
                <!-- Dashboard Section -->
                <h3>Trang edit</h3>

                <!-- 2. Form nhập liệu -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- Khu vực nhập tên sách -->
                    <div style="margin-bottom: 16px;">
                        <span>Nhập tên (*):</span><br>
                        <input type="text" name="category_name"
                            value="<?= isset($cate) ? $cate->category_name : '' ?>"><br>
                    </div>

                    <!-- Khu vực nhập mo ta -->
                    <div style="margin-bottom: 16px;">
                        <span>Nhập mô tả (*):</span><br>
                        <input type="text" name="description" value="<?= isset($cate) ? $cate->description : '' ?>"><br>
                    </div>
                    <!-- Khu vực button -->
                    <div style="margin-bottom: 16px;">
                        <a href="?act=list-category">Quay Lại</a>
                        <button class="btn btn-success" type="submit" name="submitForm"
                            onclick="return confirm('Bạn có chắc là muốn thay đổi thông tin ko?')">Xác nhận</button>
                    </div>


                    <!-- Khu vực thông báo lỗi -->
                    <div style="color: red;">
                        <?= isset($thongBaoLoi) ? $thongBaoLoi : ''; ?>
                    </div>

                    <!-- Khu vực thông báo thành công -->
                    <div style="color: green;">
                        <?= isset($thongBaoThanhCong) ? $thongBaoThanhCong : ''; ?>
                    </div>

                </form>

            </main>
        </div>
    </div>
</body>

</html>