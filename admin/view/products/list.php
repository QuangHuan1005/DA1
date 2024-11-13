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
    <div class="modal fade show" id="modal-add" tabindex="-1" style="display: block; padding-right: 17px"
        aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="max-width: 800px">
            <form class="modal-content" method="POST" enctype="multipart/form-data">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Thêm sản phẩm</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mô tả</label>
                            <input type="text" name="description" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Bộ nhớ</label>
                            <div class="input-group">
                                <input type="number" name="weight" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Màu sắc</label>
                            <input type="text" name="size_width" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số lượng</label>
                            <input type="number" name="page" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Hình ảnh</label>
                            <input type="file" name="pic" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Giá</label>
                            <input type="number" name="price" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Huỷ
                    </button>
                    <button name="action" value="add" class="btn btn-success">Thêm</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>