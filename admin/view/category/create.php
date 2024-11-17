<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>them danh muc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "components/sidebar.php" ?>
            <!-- Main Content -->

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-body-tertiary vh-100">
                <!-- Dashboard Section -->
                <h3>Trang Tạo Mới</h3>

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
                        <button class="btn btn-success" type="submit" name="submitForm">Tạo Mới</button>
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