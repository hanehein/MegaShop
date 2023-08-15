<?php

//login check

session_start();
$supplier_id = $_SESSION["sup_id"];

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT
        *
    FROM 
        m_products
    WHERE 
        m_products.del_flg = 0 
    AND
        m_products.supplier_id = :sup_id
    "
);
$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$totalProducts = count($sql->fetchAll(PDO::FETCH_ASSOC));

$sql = $pdo->prepare(
    "SELECT 
        *
    FROM 
        t_orders
    WHERE 
        order_status = :confirm_state
    AND 
        t_orders.sup_id = :sup_id"
);
$sql->bindValue(":confirm_state", 1);
$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$totalConfirmedOrders = count($sql->fetchAll(PDO::FETCH_ASSOC));
?>