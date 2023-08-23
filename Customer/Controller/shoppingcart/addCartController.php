<?php 
if(count($_POST) == 0){
    header("Location: ../../View/errors/error.php");
}

if(!isset($_POST["from_addcart_js"])){
    header("Location: ../../View/errors/error.php");
}

session_start();
$customer_id = $_SESSION["logined_customer_id"];

$supplier_id = $_POST["supplier_id"];
$product_id = $_POST["product_id"];
$qty = $_POST["product_qty"];
$color = $_POST["product_color"];
$size = $_POST["product_size"];

if(strlen($color) == 0){
    $color = NULL;
}

if(strlen($size) == 0){
    $size = NULL;
}

// connect database
include "./../../Model/model.php";

$sql = $pdo->prepare(
    "INSERT INTO t_shopping_cart (
        customer_id,
        product_id,
        supplier_id,
        qty,
        color,
        size
    ) VALUES (
        :customer_id,
        :product_id,
        :supplier_id,
        :qty,
        :color,
        :size
    )"
);

$sql->bindValue(":customer_id",$customer_id);
$sql->bindValue(":product_id",$product_id);
$sql->bindValue(":supplier_id",$supplier_id);
$sql->bindValue(":qty", $qty);
$sql->bindValue(":color", $color);
$sql->bindValue(":size", $size);
$sql->execute();
