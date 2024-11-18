<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chỉnh sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "components/sidebar.php" ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-body-tertiary vh-100">
                <!-- Dashboard Section -->
                <div class="modal-dialog modal-dialog shadow-lg mb-5 bg-body-tertiary rounded mt-4 " role="document">
                    <div class="modal-header bg-primary rounded-top">
                        <h1 class="modal-title p-3" style="color:white">Chỉnh sửa sản phẩm</h1>
                    </div>
                    <form id="form" class="modal-content p-3" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <?= $loi ?>
                            <?= $thanhcong ?>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="m-2 fw-bold ">Tên sản phẩm</label>
                                    <input type="text" name="name" class="form-control"
                                        value="<?= $all->product_name ?>" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="m-2 fw-bold ">Mô tả</label>
                                    <input type="text" name="description" class="form-control"
                                        value="<?= $all->description ?>" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="m-2 fw-bold ">Bộ nhớ</label>
                                    <div class="input-group">
                                        <input type="number" name="storage" class="form-control"
                                            value="<?= $all->storage_capacity ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="m-2 fw-bold ">Màu sắc</label>
                                    <input type="text" name="color" class="form-control" value="<?= $all->color ?>" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="m-2 fw-bold ">Số lượng</label>
                                    <input type="number" name="quantity" class="form-control"
                                        value="<?= $all->stock_quantity ?>" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="m-2 fw-bold ">Danh mục</label>
                                    <select class="form-control" name="category">
                                        <?php
                                        foreach ($all_category as $key): ?>
                                            <option value="<?= $key->category_id ?>"><?= $key->category_name ?></option>
                                            <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="m-2 fw-bold ">Hình ảnh</label>
                                    <input type="file" name="file_image" class="form-control"
                                        value="<?= $all->image ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="m-2 fw-bold ">Giá</label>
                                    <input type="number" name="price" class="form-control" value="<?= $all->price ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="?act=list-pro" class="btn btn-danger m-3">Hủy</a>
                            <button type="submit" name="editPro" class="btn btn-success">Sửa</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>

</html>