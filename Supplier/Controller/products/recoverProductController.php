<?php 
if(!isset($_GET["product_id"])){
    header("Location: ../../View/errors/error.php");
}

$product_id = $_GET["product_id"];

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "UPDATE 
        m_products 
    SET
        del_flg = 0
    WHERE 
        id = :id"
);

$sql->bindValue(":id",$product_id);
$sql->execute();

//go to product lists page
header("Location: ../../View/products/product.php");
?>