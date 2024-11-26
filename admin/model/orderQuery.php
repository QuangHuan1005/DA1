<?php
class orderQuery
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
    public function allOrder()
    {
        try {
            $sql = "SELECT 
                        orders.orders_id, 
                        orders.user_id, 
                        orders.orders_date, 
                        orders.status,
                        orders.totalOrder, 
                        orders.payment_method, 
                        orders.shipping_address, 
                        orders.numberPhone, 
                        orders.shipping_fee, 
                        orders.confirmed_at, 
                        users.NameUser
                    FROM 
                        orders
                    JOIN 
                        users 
                    ON 
                        orders.user_id = users.Users_id;
                    ";
            $data = $this->pdo->query($sql)->fetchAll();
            $danhsach = [];
            foreach ($data as $row) {
                $order = new Order();
                $order->order_id = $row['orders_id'];
                $order->user_id = $row['user_id'];
                $order->order_date = $row['orders_date'];
                $order->totalOrder = $row['totalOrder'];
                $order->status = $row['status'];
                $order->paymen_method = $row['payment_method'];
                $order->shipping_address = $row['shipping_address'];
                $order->shipping_fee = $row['shipping_fee'];
                $order->numberPhone = $row['numberPhone'];
                $order->confirmed_at = $row['confirmed_at'];
                $order->nameUser = $row['NameUser'];
                $danhsach[] = $order;
            }
            return $danhsach;
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
    public function detailOrder($id)
    {
        try {
            $sql = "SELECT orders.orders_id,
            orders.user_id,
            orders.orders_date,
            orders.status,
            orders.payment_method,
            orders.shipping_address,
            orders.totalOrder,
            orders.numberPhone,
            orders.shipping_fee,
            orders.confirmed_at,
            users.NameUser,
            product.product_name,
            product.image,
            product.price,
            order_items.quantity,
            order_items.total
            FROM orders 
            JOIN users ON orders.user_id = users.Users_id
            JOIN order_items ON orders.orders_id = order_items.order_id
            JOIN product ON order_items.product_id = product.product_id
            WHERE `orders_id` = :id";
            $stml = $this->pdo->prepare($sql);
            $stml->bindParam(':id', $id, PDO::PARAM_INT);
            $stml->execute();
            $data = $stml->fetchAll(PDO::FETCH_ASSOC);
            $order = new Order();
            $order->order_id = $data[0]['orders_id'];
            $order->user_id = $data[0]['user_id'];
            $order->order_date = $data[0]['orders_date'];
            $order->status = $data[0]['status'];
            $order->totalOrder = $data[0]['totalOrder'];
            $order->paymen_method = $data[0]['payment_method'];
            $order->shipping_address = $data[0]['shipping_address'];
            $order->shipping_fee = $data[0]['shipping_fee'];
            $order->numberPhone = $data[0]['numberPhone'];
            $order->confirmed_at = $data[0]['confirmed_at'];
            $order->nameUser = $data[0]['NameUser'];
            $order->order_items = [];
            foreach ($data as $key) {
                $order->order_items[] = [
                    'nameProduct' => $key['product_name'],
                    'imageProduct' => $key['image'],
                    'quantity' => $key['quantity'],
                    'total' => $key['total'],
                    'price' => $key['price'],
                ];
            }
            return $order;
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
    public function confirmed_order($id)
    {
        try {
            $sql = "UPDATE `orders` SET `status` = 'confirmed', `confirmed_at` = NULL WHERE `orders`.`orders_id` = $id;";
            $data = $this->pdo->exec($sql);
            if ($data === 1) {
                return "ok";
            }
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
    public function shipped_order($id)
    {
        try {
            $sql = "UPDATE `orders` SET `status` = 'shipped', `confirmed_at` = NULL WHERE `orders`.`orders_id` = $id;";
            $data = $this->pdo->exec($sql);
            if ($data === 1) {
                return "ok";
            }
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
    public function delivered_order($id)
    {
        try {
            $sql = "UPDATE `orders` SET `status` = 'delivered', `confirmed_at` = NOW() WHERE `orders`.`orders_id` = $id;";
            $data = $this->pdo->exec($sql);
            if ($data === 1) {
                return "ok";
            }
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
    public function canceled_order($id)
    {
        try {
            $sql = "UPDATE `orders` SET `status` = 'canceled', `confirmed_at` = NOW() WHERE `orders`.`orders_id` = $id;";
            $data = $this->pdo->exec($sql);
            if ($data === 1) {
                return "ok";
            }
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
}