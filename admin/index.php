<?php
session_start();
require_once "../common/env.php";
require_once "../common/function.php";
require_once "model/category.php";
require_once "model/products.php";
require_once "model/categoryQuery.php";
require_once "model/productsQuery.php";
require_once "model/user.php";
require_once "model/userQuery.php";
require_once "controller/categoryController.php";
require_once "controller/productsController.php";
require_once "controller/userController.php";

$act = $_GET["act"] ?? "";
$id = $_GET["id"] ?? "";
match ($act) {
    '' => (new ProductsController())->list(),
    'list-pro' => (new ProductsController())->list(),
    'list-category' => (new CategoryController())->list(),
    'create-pro' => (new ProductsController())->createProduct(),
    'delete-pro' => (new ProductsController())->deletePro($id),
    'edit_pro' => (new ProductsController())->editPro($id),
    'create-category' => (new CategoryController())->createCategory(),
    'delete-category' => (new CategoryController())->delete($id),
    'update-category' => (new CategoryController())->updateCategory($id),
    'list-users' => (new UserController())->listUsers(),
    'edit-user' => (new UserController())->editUsers($id),
    default => (new ProductsController())->error()
}
    ?>