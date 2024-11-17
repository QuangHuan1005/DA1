<?php include "components/header.php" ?>

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
                        <a class="btn btn-primary mb-2 mx-1 ms-auto" href="?act=create-pro">Thêm mới</a>
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
                                    <td class="text-center"><img src="../upload/<?= $key->image ?>" style="height:60px;">
                                    </td>
                                    <td><?= $key->stock_quantity ?></td>
                                    <td>
                                        <a href="edit.php?id=<?= $key->product_id ?>" class="btn btn-warning"><i
                                                class="fa-solid fa-marker"></i></a>
                                        <a href="delete.php?id=<?= $key->product_id ?>" class="btn btn-danger"><i
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