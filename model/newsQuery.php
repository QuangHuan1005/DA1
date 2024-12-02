<?php
class NewsQuery
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
    public function top3News()
    {
        try {
            $sql = "SELECT * FROM `news` ORDER BY create_at DESC LIMIT 3";
            $data = $this->pdo->query($sql)->fetchAll();
            $danhsach = [];
            foreach ($data as $row) {
                $new = new news();
                $new->title = $row['title'];
                $new->content = $row['content'];
                $new->thumbnail = $row['thumbnail'];
                $new->create_at = $row['create_at'];
                $danhsach[] = $new;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
    public function all_news()
    {
        try {
            $sql = "SELECT * FROM `news`";
            $data = $this->pdo->query($sql)->fetchAll();
            $danhsach = [];
            foreach ($data as $row) {
                $new = new news();
                $new->new_id=$row['new_id'];
                $new->title = $row['title'];
                $new->content = $row['content'];
                $new->thumbnail = $row['thumbnail'];
                $new->create_at = $row['create_at'];
                $danhsach[] = $new;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
    public function findNews($id){
        try{
            $sql="SELECT * FROM `news` WHERE `new_id` = $id";
            $data=$this->pdo->query($sql)->fetch();
            $new=new news();
            $new->new_id=$data['new_id'];
            $new->title=$data['title'];
            $new->content=$data['content'];
            $new->create_at=$data['create_at'];
            $new->thumbnail=$data['thumbnail'];
            return $new;
        }catch (Exception $th) {
            echo "lỗi ham find: " . $th->getMessage();
        }
    }

}
?>