<?php
class UserController
{
    public $UserQuery;
    public function __construct()
    {
        $this->UserQuery = new userQuey();
    }
    public function __destruct()
    {

    }
    public function listUsers()
    {
        $listUser = $this->UserQuery->allUsers();
        include "view/user/list.php";
    }
    public function editUsers($id)
    {
        $thongbao = "";
        $listUser = $this->UserQuery->allUsers();
        $oneUser = $this->UserQuery->findUser($id);
        if ($id != "") {
            if (isset($_POST['updateUser'])) {
                $oneUser->lock_at = $_POST['status'];
                $oneUser->role = $_POST['accountType'];
                $check = $this->UserQuery->editUser($oneUser);
                if ($check === "ok") {
                    $thongbao = '<div class="alert alert-success" role="alert">Sửa thành công</div>';
                } else {
                    $thongbao = "loi";
                }
            }
        }
        include "view/user/update.php";
    }
}
?>