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
}
?>