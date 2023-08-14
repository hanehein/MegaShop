<?php 
session_start();
$supplier_id = $_SESSION["sup_id"];

if(isset($_GET["page"])){
    $page = $_GET["page"];
    if($page < 1){
        $page = 1;
    }
}else{
    $page = 1;
}

$rowLimit = 1;
$pageStart = ($page - 1) * $rowLimit;

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        *
    FROM 
        t_orders 
    where 
        t_orders.order_status = 0 
    AND 
        t_orders.sup_id = :sup_id"
);

$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$totalRecords = count($sql->fetchAll(PDO::FETCH_ASSOC));

//get incoming order lists
$sql = $pdo->prepare(
    "SELECT 
        *,
        t_orders.id AS order_id,
        t_orders.create_date AS order_create_date 
    FROM 
        t_orders 
    JOIN m_customers 
    ON 
        t_orders.cus_id = m_customers.id
    where 
        t_orders.order_status = 0 
    AND 
        t_orders.sup_id = :sup_id
    ORDER BY 
        t_orders.create_date DESC
    LIMIT
        $pageStart, $rowLimit"
);

$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$incomingOrders = $sql->fetchAll(PDO::FETCH_ASSOC);

// get order details lists
$sql = $pdo->prepare(
    "SELECT * FROM t_orderdetails
    INNER JOIN m_products
    ON t_orderdetails.p_id = m_products.id"
);

$sql->execute();
$orderDetails = $sql->fetchAll(PDO::FETCH_ASSOC);

$pageLists = ceil($totalRecords / $rowLimit); 
?>