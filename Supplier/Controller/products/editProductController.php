<?php

if(!isset($_GET["product_id"])){
    header("Location: ../../View/errors/error.php");
}

$product_id = $_GET["product_id"];
session_start();

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_products
    WHERE m_products.id = :id"
);

$sql->bindValue(":id",$product_id);
$sql->execute();
$product = $sql->fetchAll(PDO::FETCH_ASSOC);
$product[0]["max_photo"] = 8;

$_SESSION["product_detail"] = $product[0];

// go to view page
header("Location: ../../View/products/editProduct.php");
?>