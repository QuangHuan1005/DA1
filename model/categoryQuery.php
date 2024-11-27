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
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $th->getMessage();
            echo "</h1>";
        }
    }
    public function delete($category_id)
    {
        // Khai báo try catch
        try {
            // 1. Viết câu lệnh sql
            $sql = "DELETE FROM category WHERE `category`.`category_id` = $category_id";

            // 2. Thực hiện truy vấn
            $data = $this->pdo->exec($sql);

            // 3. Return kết quả
            if ($data === 1) {
                return "success";
            }
        } catch (Exception $th) {
            echo "<h1>";
            echo "Lỗi hàm delete trong model: " . $th->getMessage();
            echo "</h1>";
        }
    } // END function delete
    public function find($category_id)
    {
        try {
            // 1. Viết câu sql
            $sql = "SELECT * FROM category WHERE category_id = $category_id";

            // 2. Thực hiện truy vấn
            $data = $this->pdo->query($sql)->fetch();

            // 3. Convert dữ liệu từ array sang object
            if ($data !== false) {
                $cate = new Category();
                $cate->category_id = $data["category_id"];
                $cate->category_name = $data["category_name"];
                $cate->description = $data["description"];
                $cate->created_at = $data["created_at"];
                $cate->updated_at = $data["updated_at"];
                

                // 4. Return kết quả
                return $cate;
            } else {
                echo "Lỗi: ID không tồn tại. Mời bạn kiểm tra lại.";
            }
        } catch (Exception $th) {
            echo "<h1>";
            echo "Lỗi hàm find trong model: " . $th->getMessage();
            echo "</h1>";
        }
    }
    public function insert(Category $cate)
    {
        // Khai báo try catch
        try {
            // 1. Viết câu sql
            $sql = "INSERT INTO `category` (`category_id`, `category_name`, `description`, `created_at`, `updated_at`) 
            VALUES (NULL, '$cate->category_name', '$cate->description', NOW(), NOW());";

            // 2. Thực hiện truy vấn
            $data = $this->pdo->exec($sql);

            // 3. Return kết quả
            if ($data === 1) {
                return "success";
            }
        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm insert trong model: " . $error->getMessage();
            echo "</h1>";
        }
    } // END function insert
    public function update($category_id, Category $cate)
    {
        try {
            // 1. Viết câu sql
            $sql = "UPDATE `category` SET `category_name` = '$cate->category_name', `description` = '$cate->description',`updated_at` = NOW() WHERE `category`.`category_id` = $cate->category_id;";

            // 2. Thực hiện truy vấn
            $data = $this->pdo->exec($sql);

            // 3. Return kết quả
            // = 1 khi có chỉnh sửa dữ liệu
            // = 0 khi không chỉnh sửa dữ liệu nào cả
            if ($data === 1 || $data === 0) {
                return "success";
            }

        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm update trong model: " . $error->getMessage();
            echo "</h1>";
        }


    }
}
?>