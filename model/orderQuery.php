<?php
class OrderQuery
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
    public function addOrder(Order $order)
    {
        try {
            $this->pdo->beginTransaction();
            $sql = "INSERT INTO `orders` (`orders_id`, `user_id`, `orders_date`, `status`, `totalOrder`, `payment_method`, `shipping_address`, `numberPhone`, `shipping_fee`, `confirmed_at`) 
               VALUES (NULL, :user_id, NOW(), 'pending', :totalOrder, :payment_method, :shipping_address, :numberPhone, 10000, NULL);";
            $data = $this->pdo->prepare($sql);
            $data->execute([
                ':user_id' => $order->user_id,
                ':totalOrder' => $order->totalOrder,
                ':payment_method' => $order->payment_method,
                ':shipping_address' => $order->shipping_address,
                ':numberPhone' => $order->numberPhone,
            ]);
            $orderID = $this->pdo->lastInsertId();
            $sqlOrderItem = "INSERT INTO `order_items` (`order_items_id`, `order_id`, `product_id`, `quantity`, `total`) 
                            VALUES (NULL, :order_id, :product_id, :quantity, :total);";
            $stml = $this->pdo->prepare($sqlOrderItem);
            foreach ($order->orderItem as $value) {
                $stml->execute([
                    ':order_id' => $orderID,
                    ':product_id' => $value['productId'],
                    ':quantity' => $value['quantityProduct'],
                    ':total' => $value['priceProduct'],
                ]);
            }
            $sqlClearCartItems = "DELETE FROM `cart_items` WHERE `cart_id` = :cart_id";
            $stmtClearCartItems = $this->pdo->prepare($sqlClearCartItems);
            $stmtClearCartItems->execute([':cart_id' => $order->cart_id]);
            $this->pdo->commit();
            if (isset($orderID) && !empty($orderID)) {
                return $orderID;
            }

        } catch (Exception $th) {
            $this->pdo->rollBack();
            echo "Error: " . $th->getMessage();
        }
    }
    public function infoOrder($id)
    {
        try {
            $sql = "SELECT users.NameUser,
		orders.numberPhone,
        orders.shipping_address,
        orders.totalOrder,
        orders.orders_id
        FROM orders
        JOIN users ON orders.user_id = users.Users_id 
        WHERE orders_id = $id";
            $data = $this->pdo->query($sql)->fetch();
            $order = new Order();
            $order->numberPhone = $data['numberPhone'];
            $order->NameUser = $data['NameUser'];
            $order->shipping_address = $data['shipping_address'];
            $order->totalOrder = $data['totalOrder'];
            $order->orders_id = $data['orders_id'];
            return $order;
        } catch (Exception $th) {
            $this->pdo->rollBack();
            echo "Error: " . $th->getMessage();
        }
    }
}