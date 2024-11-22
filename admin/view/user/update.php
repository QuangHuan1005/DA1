<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "components/sidebar.php" ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-body-tertiary vh-100">
                <h1 class="mt-3">Quản lý tài khoản</h1>
                <?= $thongbao ?>
                <div id="dashboard" class="section shadow-sm p-3 mb-5 bg-white rounded mt-5">
                    <table class="table table-hover table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th style="width:120px" scope="col">Tên đăng nhập</th>
                                <th style="width:340px" scope="col">Tên tài khoản</th>
                                <th style="width:430px" scope="col">Email</th>
                                <th style="width:100px" scope="col">Ảnh đại diện</th>
                                <th style="width:120px" scope="col">Trạng thái</th>
                                <th style="width:120px" scope="col">Loại tài khoản</th>
                                <th style="width:100px" scope="col">Công cụ</th>
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
                                    <td class="text-center"><img src="../<?= $key->image ?>" style="height:60px;">
                                    </td>
                                    <td>
                                        <?php if ($key->lock_at == "2") {
                                            echo '<span class="badge text-bg-success" >Hoạt động</span>';
                                        } else {
                                            echo '<span class="badge text-bg-danger" >Khóa</span>';
                                        } ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($key->role === "admin") {
                                            echo '<span class="badge text-bg-success">Quản trị viên</span>';
                                        } else {
                                            echo '<span class="badge text-bg-dark" >Thành viên</span>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="?act=edit-user&id=<?= $key->User_id ?>" class="btn btn-warning"><i
                                                class="fa-solid fa-marker"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- box chỉnh sửa -->
                <div class="modal fade" id="modal-edit" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <form class="modal-content" method="POST">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white">Sửa tài khoản</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="fw-bold">Tên đăng nhập</label>
                                    <input type="text" name="id" value="<?= $oneUser->nameAccount ?>"
                                        class="my-2 form-control" disabled="">
                                </div>
                                <div class="form-group">
                                    <label class="fw-bold">Trạng thái</label>
                                    <select class="form-control my-2" name="status">
                                        <option value="1">Khóa</option>
                                        <option value="2" selected="">Hoạt động</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="fw-bold">Loại tài khoản</label>
                                    <select class="form-control my-2" name="accountType">
                                        <option value="admin" selected="">Quản trị viên</option>
                                        <option value="client">Thành viên</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="dismiss btn btn-danger">Huỷ</button>
                                <button type="submit" id="btn_edit" name="updateUser"
                                    class="btn btn-success">Sửa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

        </div>
    </div>
</body>

</html>
<script>
    document.querySelector(".dismiss").addEventListener("click", function () {
        var modal = bootstrap.Modal.getInstance(
            document.getElementById("modal-edit")
        );
        modal.hide();
    });
    document.addEventListener("DOMContentLoaded", function () {
        var modalElement = document.getElementById("modal-edit");
        var editButton = document.getElementById("btn_edit");
        var modal = new bootstrap.Modal(document.getElementById("modal-edit"), {});
        modal.show();
    });
</script>