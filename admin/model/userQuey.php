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
                $user->User_id = $row['User_id'];
                $user->nameAccount = $row['nameAccount'];
                $user->email = $row['email'];
                $user->password = $row['password'];
                $user->role = $row['role'];
                $user->image = $row['image'];
                $user->NameUser = $row['NameUser'];
                $danhsach[] = $user;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
}
?>