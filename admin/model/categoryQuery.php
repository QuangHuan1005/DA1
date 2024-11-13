<?php
class CategoryQuery
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
    public function all()
    {
        try {
            $sql = "SELECT * FROM category";
            $data = $this->pdo->query($sql)->fetchAll();
            $danhsach = [];
            foreach ($data as $row) {
                $product = new Category();
                $product->category_id = $row['category_id'];
                $product->category_name = $row['category_name'];
                $product->description = $row['description'];
                $product->created_at = $row['created_at'];
                $product->updated_at = $row['updated_at'];
                $danhsach[] = $product;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
}
?>