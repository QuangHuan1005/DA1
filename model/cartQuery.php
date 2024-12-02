<?php
class CartQuery
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
    public function createCart($id)
    {
        try {
            $sql = "INSERT INTO `carts` (`carts_id`, `user_id`) VALUES (NULL, '$id')";
            $data = $this->pdo->exec($sql);
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
}