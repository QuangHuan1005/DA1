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
                $danhsach[] = $review;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function add(Reviews $review)
    {
        try{
            $sql="INSERT INTO `reviews` (`reviews_id`, `product_id`, `user_id`, `rating`, `comment`, `review_date`) 
            VALUES (NULL, '$review->product_id', '$review->user_id', '$review->rating', '$review->comment', NOW());";
            $data=$this->pdo->exec($sql);
            if($data === 1){
                return "ok";
            }
        }catch (Exception $th) {
            echo "loi ham add: " . $th->getMessage();
        }
    }
    
}
?>