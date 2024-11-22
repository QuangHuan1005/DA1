<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang Admin</title>
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
                <h1 class="mt-3">Quản lý Sản Phẩm</h1>
                <div id="dashboard" class="section shadow-sm p-3 mb-5 bg-white rounded mt-5">
                    <div class="d-flex">
                        <a id="addNewBtn" class="btn btn-primary ms-sm-auto mx-2 my-2" href="?act=create-pro"> Thêm
                            mới</a>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th style="width:100px" scope="col">ID</th>
                                <th style="width:800px" scope="col">Tên sản phẩm</th>
                                <th style="width:150px" scope="col">Giá</th>
                                <th style="width:80px" scope="col">Hình ảnh</th>
                                <th style="width:80px" scope="col">Số lượng</th>
                                <th style="width:95px" scope="col">Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all as $key): ?>
                                <tr>
                                    <th scope="row"><?= $key->product_id ?></th>
                                    <td><?= $key->product_name ?></td>
                                    <td>
                                        <?= $key->price ?>
                                    </td>
                                    <td class="text-center"><img src="<?= $key->image ?>" style="height:60px;">
                                    </td>
                                    <td><?= $key->stock_quantity ?></td>
                                    <td>
                                        <a href="?act=edit_pro&id=<?= $key->product_id ?>" class="btn btn-warning"><i
                                                class="fa-solid fa-marker"></i></a>
                                        <a href="?act=delete-pro&id=<?= $key->product_id ?>" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc muốn xóa không?') "><i
                                                class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>

</html>