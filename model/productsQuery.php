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
                $product->image = $row['image'];
                $product->storage_capacity = $row['storage_capacity'];
                $danhsach[] = $product;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function createProduct(Products $product)
    {
        try {
            $sql = "INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `description`, `price`, `color`, `storage_capacity`, `stock_quantity`, `image`) 
                                   VALUES (NULL, '$product->category_id', '$product->product_name', '$product->description', '$product->price', '$product->color', '$product->storage_capacity', '$product->stock_quantity', '$product->image');";
            $data = $this->pdo->exec($sql);
            if ($data === 1) {
                return "ok";
            }
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function deleteProduct($id)
    {
        try {
            $sql = "DELETE FROM product WHERE `product`.`product_id` = $id";
            $data = $this->pdo->exec($sql);
            if ($data === 1) {
                return "ok";
            }
            return $data;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function updateProduct(Products $product)
    {
        try {
            $sql = "UPDATE `product` SET
            `category_id` = '$product->category_id', 
            `product_name` = '$product->product_name', 
            `description` = '$product->description',    
            `price` = '$product->price', 
            `color` = '$product->color', 
            `storage_capacity` = '$product->storage_capacity', 
            `stock_quantity` = '$product->stock_quantity', 
            `image` = '$product->image' WHERE `product`.`product_id` = $product->product_id";
            $data = $this->pdo->exec($sql);
            if ($data === 1) {
                return "ok";
            }
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function findProduct($id)
    {
        try {
            $sql = "SELECT * FROM `product` WHERE `product_id` = $id";
            $data = $this->pdo->query($sql)->fetch();
            $product = new Products();
            $product->product_id = $data['product_id'];
            $product->product_name = $data['product_name'];
            $product->category_id = $data['category_id'];
            $product->description = $data['description'];
            $product->price = $data['price'];
            $product->color = $data['color'];
            $product->stock_quantity = $data['stock_quantity'];
            $product->image = $data['image'];
            $product->storage_capacity = $data['storage_capacity'];
            return $product;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    
}
?>