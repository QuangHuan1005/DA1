<?php

class loginquery
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

    public function checklogin($username, $password)
    {
        try {
            $sql = "SELECT * FROM `users` WHERE `nameAccount` = :nameAccount AND `password` = :password";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nameAccount', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $data = $stmt->fetch();
            if ($data === false) {
                return 0;
            } else {
                $accountf = new account();
                $accountf->Users_id = $data['Users_id']; // Không có khoảng trắng sau 'Users_id'
                $accountf->nameAccount = $data['nameAccount'];
                $accountf->email = $data['email'];
                $accountf->password = $data['password'];
                $accountf->role = $data['role'];
                $accountf->created_at = $data['created_at'];
                $accountf->update_at = $data['update_at'];
                $accountf->image = $data['image'];
                $accountf->NameUser = $data['NameUser'];
                return $accountf;
            }
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return 0;
        }
    }
    public function checkAccount($username)
    {
        try {
            $sql = "SELECT * FROM `users` WHERE `nameAccount` = :nameAccount";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nameAccount', $username);
            $stmt->execute();
            $data = $stmt->fetch();
            if ($data === false) {
                return 0;
            } else {
                $accountf = new account();
                $accountf->id = $data['Users_id']; // Không có khoảng trắng sau 'Users_id'
                $accountf->username = $data['nameAccount'];
                $accountf->email = $data['email'];
                $accountf->password = $data['password'];
                $accountf->role = $data['role'];
                $accountf->created_at = $data['created_at'];
                $accountf->update_at = $data['update_at'];
                return $accountf;
            }
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return 0;
        }
    }
    // Tạo tài khoản mới
    public function createUser($input)
    {
        try {
            // Thêm người dùng mới vào cơ sở dữ liệu, với role mặc định là 'client'
            $sql = "INSERT INTO `users` (`Users_id`,`nameAccount`, `email`, `password`, `role`, `created_at`, `update_at`, `image`, `NameUser`) 
                    VALUES (NULL,'$input->nameAccount', '$input->email', '$input->password', 'client', NOW(), NOW(), '$input->image', '$input->NameUser');";
            $data = $this->pdo->exec($sql);

            if ($data === 1) {
                return "ok";
            } else {
                return $data;
            }
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
?>