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
    public function listOrder()
    {
        $all = $this->orderQuery->allOrder();
        include "view/orders/list.php";
    }
    public function detailOrder($id)
    {
        $all = $this->orderQuery->allOrder();
        $tong = 0;
        $oneOrder = $this->orderQuery->detailOrder($id);
        include "view/orders/detail.php";
    }
    public function confirmed_order($id)
    {
        $resut = $this->orderQuery->confirmed_order($id);
        if ($resut === "ok") {
            header('Location:?act=list-oders');
        }
    }
    public function shipped_order($id)
    {
        $resut = $this->orderQuery->shipped_order($id);
        if ($resut === "ok") {
            header('Location:?act=list-oders');
        }
    }
    public function delivered_order($id)
    {
        $resut = $this->orderQuery->delivered_order($id);
        if ($resut === "ok") {
            header('Location:?act=list-oders');
        }
    }
    public function canceled_order($id)
    {
        $resut = $this->orderQuery->canceled_order($id);
        if ($resut === "ok") {
            header('Location:?act=list-oders');
        }
    }
}