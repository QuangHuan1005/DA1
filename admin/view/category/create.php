<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới danh mục</title>
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
                <div class="modal-dialog modal-dialog shadow-lg mb-5 bg-body-tertiary rounded mt-4 " role="document">
                    <div class="modal-header bg-primary rounded-top">
                        <h1 class="modal-title p-3" style="color:white">Thêm danh mục</h1>
                    </div>
                    <!-- 2. Form nhập liệu -->
                    <form class="modal-content p-3" method="POST" enctype="multipart/form-data">
                        <!-- Khu vực nhập tên sách -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group">
                                    <label class="m-2 fs-3 fw-bold">Tên danh mục</label>
                                    <input style="height:56px" type="text" name="category_name" class="form-control"
                                        value="<?= isset($cate) ? $cate->category_name : '' ?>"><br>
                                </div>
                            </div>

                            <!-- Khu vực nhập mo ta -->
                            <div class="form-group">
                                <label class="m-2 fw-bold fs-3">Mô tả danh mục</label>
                                <input style="height:56px" type="text" name="description" class="form-control"
                                    value="<?= isset($cate) ? $cate->description : '' ?>"><br>
                            </div>
                            <!-- Khu vực thông báo lỗi -->
                            <div style="color: red;">
                                <?= $thongBaoLoi ?? ''; ?>
                            </div>

                            <!-- Khu vực thông báo thành công -->
                            <div style="color: green;">
                                <?= $thongBaoThanhCong ?? ''; ?>
                            </div>
                            <!-- Khu vực button -->
                            <div class="modal-footer">
                                <a href="?act=list-category" class="btn btn-danger m-3">Hủy</a>
                                <button class="btn btn-success" type="submit" name="submitForm">Thêm</button>
                            </div>
                        </div>

                    </form>
                </div>

            </main>
        </div>
    </div>
</body>

</html>