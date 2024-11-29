<?php
class ReviewQuery
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
        $loi = "";
        try {
            $sql = "SELECT * FROM `reviews`";
            $data = $this->pdo->query($sql)->fetchAll();
            $danhsach = [];
            foreach ($data as $row) {
                $review = new Reviews();
                $review->reviews_id = $row['reviews_id'];
                $review->product_id = $row['product_id'];
                $review->user_id = $row['user_id'];
                $review->rating = $row['rating'];
                $review->comment = $row['comment'];
                $review->review_date = $row['review_date'];
                $review->username = $row['username'];
                $danhsach[] = $review;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function add(Reviews $review)
    {
        try {
            //lay userid tu session v neu ko co thi gan null
            if (isset($_SESSION['Users_id'])) {
                $user_id = $_SESSION['Users_id'];
                $sql = "INSERT INTO `reviews` (`reviews_id`, `product_id`, `user_id`, `rating`, `comment`, `review_date`, `username`) 
                VALUES (NULL, '$review->product_id',  " . ($user_id !== NULL ? $user_id : 'NULL') . ", '$review->rating', '$review->comment', NOW(), '$review->username');";
                $data = $this->pdo->exec($sql);
                if ($data === 1) {
                    return "ok";
                }
            } else {
                $loi = "Đăng nhập để bình luận";
            }
        } catch (Exception $th) {
            echo "loi ham add: " . $th->getMessage();
        }
    }

}
?>