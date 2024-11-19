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
                <h1 class="mt-3">Quản lý tài khoản</h1>
                <div id="dashboard" class="section shadow-sm p-3 mb-5 bg-white rounded mt-5">
                    <table class="table table-hover table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th style="width:100px" scope="col">Tên đăng nhập</th>
                                <th style="width:800px" scope="col">Tên tài khoản</th>
                                <th style="width:150px" scope="col">Email</th>
                                <th style="width:80px" scope="col">Hình ảnh</th>
                                <th style="width:80px" scope="col">Loại tài khoản</th>
                                <th style="width:95px" scope="col">Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listUser as $key): ?>
                                <tr>
                                    <th scope="row"><?= $key->nameAccount ?></th>
                                    <td><?= $key->NameUser ?></td>
                                    <td>
                                        <?= $key->email ?>
                                    </td>
                                    <td class="text-center"><img src="../upload/<?= $key->image ?>" style="height:60px;">
                                    </td>
                                    <td><?= $key->role ?></td>
                                    <td>
                                        <a href="?act=edit_pro&id=<?= $key->User_id ?>" class="btn btn-warning"><i
                                                class="fa-solid fa-marker"></i></a>
                                        <a href="?act=delete-pro&id=<?= $key->User_id ?>" class="btn btn-danger"
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