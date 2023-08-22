<?php 
if(count($_POST) == 0){
    header("Location: ../../View/errors/error.php");
}

if(!isset($_POST["from_addcart_js"])){
    header("Location: ../../View/errors/error.php");
}

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
    "UPDATE 
        t_shopping_cart 
    SET
        qty = :qty,
        color = :color,
        size = :size
    WHERE
        product_id = :product_id"
);

$sql->bindValue(":product_id",$product_id);
$sql->bindValue(":qty", $qty);
$sql->bindValue(":color", $color);
$sql->bindValue(":size", $size);
$sql->execute();
