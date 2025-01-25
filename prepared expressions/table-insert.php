<?php
require "db-connection.php";

$stmt = $conn->prepare("INSERT INTO `turnover` (`product_name`, `product_price`, `product_sale`) VALUES (?, ?, ?);");
$stmt->bind_param("sdi", $product_name, $product_price, $product_sale);

$product_name = "Хліб";
$product_price = 20.50;
$product_sale = 250;
$stmt->execute();

$product_name = "Молоко";
$product_price = 60.48;
$product_sale = 176;
$stmt->execute();

$product_name = "Шоколад";
$product_price = 62.15;
$product_sale = 73;
$stmt->execute();

$product_name = "Печиво";
$product_price = 48.99;
$product_sale = 110;
$stmt->execute();

$product_name = "Яйця";
$product_price = 4.30;
$product_sale = 360;
$stmt->execute();

$product_name = "Машинка";
$product_price = 245.99;
$product_sale = 22;
$stmt->execute();

$product_name = "Батарейки";
$product_price = 18.35;
$product_sale = 360;
$stmt->execute();
