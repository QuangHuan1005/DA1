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
    public function listOrder($id)
    {
        $all = $this->orderQuery->allOrder($id);
        include "view/trangChu/orders.php";
    }
    public function detailOrder($id)
    {
        $oneOrder = $this->orderQuery->detailOrder($id);
        include "view/trangChu/detailOrder.php";
    }
}