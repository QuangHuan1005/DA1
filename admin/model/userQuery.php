<?php
class userQuey
{
    public $pdo;
    public function __construct()
    {
        $this->pdo = DB_connect();
    }
    public function __destruct()
    {
        $this->pdo = null;
    }
    public function allUsers()
    {
        try {
            $sql = "SELECT * FROM `users`";
            $data = $this->pdo->query($sql)->fetchAll();
            $danhsach = [];
            foreach ($data as $row) {
                $user = new User();
                $user->User_id = $row['Users_id'];
                $user->nameAccount = $row['nameAccount'];
                $user->email = $row['email'];
                $user->password = $row['password'];
                $user->role = $row['role'];
                $user->image = $row['image'];
                $user->NameUser = $row['NameUser'];
                $user->lock_at = $row['lock_at'];
                $danhsach[] = $user;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function editUser(User $user)
    {
        try {
            $sql = "UPDATE `users` SET `role` = '$user->role', `created_at` = NOW(), `update_at` = NOW(), `lock_at` = $user->lock_at
             WHERE `users`.`Users_id` = $user->User_id;";
            $data = $this->pdo->exec($sql);
            if ($data === 1) {
                return "ok";
            }
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function findUser($id)
    {
        try {
            $sql = "SELECT * FROM `users` WHERE `Users_id` = $id";
            $data = $this->pdo->query($sql)->fetch();
            $user = new User();
            $user->User_id = $data['Users_id'];
            $user->nameAccount = $data['nameAccount'];
            $user->email = $data['email'];
            $user->password = $data['password'];
            $user->role = $data['role'];
            $user->image = $data['image'];
            $user->NameUser = $data['NameUser'];
            $user->lock_at = $data['lock_at'];
            return $user;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
}