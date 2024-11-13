<?php
class ProductsQuery
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
            $sql = "SELECT * FROM Product";
            $data = $this->pdo->query($sql)->fetchAll();
            $danhsach = [];
            foreach ($data as $row) {
                $product = new Products();
                $product->product_id = $row['product_id'];
                $product->product_name = $row['product_name'];
                $product->category_id = $row['category_id'];
                $product->description = $row['description'];
                $product->price = $row['price'];
                $product->color = $row['color'];
                $product->stock_quantity = $row['stock_quantity'];
                $product->created_at = $row['created_at'];
                $product->updated_at = $row['updated_at'];
                $product->image = $row['image'];
                $product->battery = $row['battery'];
                $product->brand = $row['brand'];
                $product->screen_size = $row['screen_size'];
                $product->model = $row['model'];
                $product->storage_capacity = $row['storage_capacity'];
                $product->processor = $row['processor'];
                $danhsach[] = $product;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
}
?>