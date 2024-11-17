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
                <h1 class="mt-3">Quản lý Danh Mục</h1>
                <div id="dashboard" class="section shadow-sm p-3 mb-5 bg-white rounded mt-5 ">
                    <div class="d-flex">
                        <a class="btn btn-primary mb-2 mx-1 ms-auto" href=" ?act=create-category">Thêm mới</a>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th style="width:200px" scope="col">Mã danh mục</th>
                                <th style="width:800px" scope="col">Tên danh mục</th>
                                <th style="width:74px" scope="col">Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($allCategories)) { ?>
                                <?php foreach ($allCategories as $category) { ?>
                                    <tr>
                                        <th scope="row"><?= $category->category_id ?></th>
                                        <td><?= $category->category_name ?></td>
                                        <td class="tool">
                                            <a href="?act=update-category&id=<?= $category->category_id ?>"
                                                class="btn btn-warning"><i class="fa-solid fa-marker"></i></a>
                                            <a href="?act=delete-category&id=<?= $category->category_id ?>"
                                                class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i
                                                    class="fa-solid fa-trash-can"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="3" class="text-center">Không có danh mục nào</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>

</html>