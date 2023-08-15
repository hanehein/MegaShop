<?php

//chech with post or get
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

//check from stage is addproduct page or not
if (!isset($_POST["from_editproduct"])) {
    header("Location: ../../View/errors/error.php");
}


session_start();
$supplier_id = $_SESSION["sup_id"];

$p_id = $_POST["id"];
$p_name = $_POST["product_name"];
$p_category = $_POST["product_category"];
$p_brand = $_POST["product_brand"];
$p_buy_price = $_POST["product_buy_price"];
$p_sell_price = $_POST["product_sell_price"];
$p_stock = $_POST["product_stock"];
$p_discount = $_POST["product_discount"];
$p_descirption = $_POST["product_description"];
$update_date = date("Y-m-d");


// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "UPDATE 
        m_products 
    SET 
        p_name = :name,
        p_category = :category,
        p_brand = :brand,
        p_sell_price = :sell_price,
        p_buy_price = :buy_price,
        p_stock = :stock,
        p_description = :description,
        p_discount = :discount,
        supplier_id = :sup_id,
        update_date = :update_date,
    WHERE 
        id = :id"
);

$sql->bindValue(":name", $p_name);
$sql->bindValue(":category", $p_category);
$sql->bindValue(":brand", $p_brand);
$sql->bindValue(":sell_price", $p_sell_price);
$sql->bindValue(":buy_price", $p_buy_price);
$sql->bindValue(":stock", $p_stock);
$sql->bindValue(":description", $p_descirption);
$sql->bindValue(":discount", $p_discount);
$sql->bindValue(":sup_id", $supplier_id);
$sql->bindValue(":update_date", $update_date);
$sql->bindValue(":id", $p_id);

$sql->execute();

//go to product lists page
header("Location: ../../View/products/product.php");
