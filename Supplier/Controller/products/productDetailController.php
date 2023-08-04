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
    INNER JOIN m_category ON m_products.p_category = m_category.id
    INNER JOIN m_brand ON m_products.p_brand = m_brand.id
    WHERE m_products.id = :id"
);

$sql->bindValue(":id",$product_id);
$sql->execute();
$product = $sql->fetchAll(PDO::FETCH_ASSOC);
$product[0]["max_photo"] = 8;

$_SESSION["product_detail"] = $product[0];

header("Location: ../../View/products/productDetail.php");
?>