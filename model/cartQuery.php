<?php
class CartQuery
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
    public function cart($id)
    {
        try {
            $sql = "SELECT * FROM `carts` WHERE `user_id` = $id";
            $data = $this->pdo->query($sql)->fetch();
            return $data;
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function addItems($cart_id, $product_id, $quantity)
    {
        try {
            $sql = "INSERT INTO `cart_items` (`cart_items_id`, `cart_id`, `product_id`, `quantity`) 
                    VALUES (NULL, '$cart_id', '$product_id', '$quantity')";
            $data = $this->pdo->exec($sql);
            if ($data == 1) {
                return "ok";
            }
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function updateQuantity($quantity, $id, $cart_id)
    {
        try {
            $sql = "UPDATE `cart_items` SET `quantity` = :quantity WHERE `cart_items`.`cart_id` = :cart_id AND `cart_items`.`product_id` = :id";
            $stml = $this->pdo->prepare($sql);
            $stml->execute([
                ':quantity' => $quantity,
                ':id' => $id,
                ':cart_id' => $cart_id
            ]);
            $rowCount = $stml->rowCount();
            // echo "$rowCount record(s) updated.";
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
    public function infoCart($id)
    {
        try {
            $sql = "SELECT
                users.NameUser,
                product.product_name,
                product.price,
                product.image,
                product.product_id,
                cart_items.cart_items_id,
                cart_items.cart_id,
                cart_items.quantity
                FROM
                cart_items
                JOIN product ON cart_items.product_id = product.product_id
                JOIN carts ON cart_items.cart_id = carts.carts_id
                JOIN users ON carts.user_id = users.Users_id
                WHERE `user_id` = :id;";
            $db = $this->pdo->prepare($sql);
            $db->bindParam(':id', $id, PDO::PARAM_INT);
            $db->execute();
            $data = $db->fetchAll(PDO::FETCH_ASSOC);
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            if (!empty($data)) {
                $cart = new Cart_items();
                $cart->NameUser = $data[0]['NameUser'];
                $cart->cart_id = $data[0]['cart_id'];
                $cart->cart_items_id = $data[0]['cart_items_id'];

                $cart->infoPro = [];
                foreach ($data as $key) {
                    $cart->infoPro[] = [
                        'nameProduct' => $key['product_name'],
                        'imageProduct' => $key['image'],
                        'quantityProduct' => $key['quantity'],
                        'priceProduct' => $key['price'],
                        'productId' => $key['product_id'],
                    ];
                }
                return $cart;
            } else {
                return "trong";
            }
        } catch (Exception $th) {
            echo "Error: " . $th->getMessage();
        }
    }
}