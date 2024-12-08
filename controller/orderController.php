<?php
class OrderController
{
    public $orderQuery;
    public function __construct()
    {
        $this->orderQuery = new orderQuery();

    }
    public function __destruct()
    {
    }
    public function thanhToan($id)
    {
        $info = $this->orderQuery->infoOrder($id);
        include "view/trangChu/trangThanhToan.php";
    }
}