<?php
session_start();
require "common/env.php";
require "common/function.php";
require "controller/homecontroller.php";
require "model/accountQuery.php";
require "model/account.php";


// index.php
$act = $_GET["act"] ?? "";
$id = $_GET["id"] ?? "";

match ($act) {
  "" => (new homeController())->home(),
  "home" => (new homeController())->home(),
  "login" => (new homeController())->login(),
  "register" => (new homeController())->register(),
  "logout" => (new homeController())->logout(),
  default => (new homecontroller())->error(),

}
  ?>