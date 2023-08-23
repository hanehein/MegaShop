<?php

if(!isset($_POST)){
    header("Location: ../../View/errors/error.php");
}

if(!isset($_POST["from_wishlist_js"])){
    header("Location: ../../View/errors/error.php");
}

session_start();
$customer_id = $_SESSION["logined_customer_id"];
$product_id = $_POST["product_id"];

// connect database
include "./../../Model/model.php";
$sql = $pdo->prepare(
    "INSERT INTO m_wishlist (
        c_id,
        product_id
    ) VALUES (
        :customer_id,
        :product_id
    )"
);

$sql->bindValue(":customer_id",$customer_id);
$sql->bindValue(":product_id",$product_id);
$sql->execute();

?>