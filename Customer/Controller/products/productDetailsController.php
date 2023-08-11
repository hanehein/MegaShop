<?php 

if(!isset($_GET["product_id"])){
    header("Location: ../../View/errors/error.php");
}

$product_id = $_GET["product_id"];

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT *,m_products.id AS p_id
    FROM m_products
    INNER JOIN m_suppliers ON m_products.supplier_id = m_suppliers.id
    WHERE m_products.id = :id"
);

$sql->bindValue(":id",$product_id);
$sql->execute();
$product = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["product_detail"] = $product[0];
header("Location: ../../View/product/singleProductDetail.php");
?>