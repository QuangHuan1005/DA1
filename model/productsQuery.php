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
    public function top4Pro()
    {
        try {
            $sql = "SELECT * FROM product WHERE delete_at IS NULL ORDER BY create_at DESC  LIMIT 4";
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
                $product->create_at = $row['create_at'];
                $danhsach[] = $product;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function productRCM(Products $products)
    {
        try {
            $sql = "SELECT * FROM `product` WHERE `product_id` != $products->product_id AND `storage_capacity` = '$products->storage_capacity' AND delete_at IS NULL LIMIT 4";
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
    public function all()
    {
        try {
            $sql = "SELECT * FROM Product WHERE delete_at IS NULL";
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
    public function pk()
    {
        try {
            $sql = "SELECT * FROM `product` WHERE `category_id` = 15 ";
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
    public function old()
    {
        try {
            $sql = "SELECT * FROM `product` WHERE `category_id` = 16 ";
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