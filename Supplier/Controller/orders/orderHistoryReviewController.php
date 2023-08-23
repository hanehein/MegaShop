<?php

//check login

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

$rowLimit = 6;
$pageStart = ($page - 1) * $rowLimit;

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        *, 
        t_orders.id AS o_id,
        t_orders.create_date AS order_create_date  
    FROM 
        t_orders
    JOIN m_customers 
    ON 
        t_orders.cus_id = m_customers.id
    WHERE 
        (order_status = :confirm_state OR order_status = :reject_state)
    AND 
        t_orders.sup_id = :sup_id"
);
$sql->bindValue(":confirm_state", 1);
$sql->bindValue(":reject_state", 2);
$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$totalRecords = count($sql->fetchAll(PDO::FETCH_ASSOC));

$sql = $pdo->prepare(
    "SELECT 
        *, 
        t_orders.id AS o_id,t_orders.create_date AS order_create_date  
    FROM 
        t_orders
    JOIN m_customers 
    ON 
        t_orders.cus_id = m_customers.id
    WHERE 
        (order_status = :confirm_state OR order_status = :reject_state)
    AND 
        t_orders.sup_id = :sup_id
    LIMIT
        $pageStart, $rowLimit"
);
$sql->bindValue(":confirm_state", 1);
$sql->bindValue(":reject_state", 2);
$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$orderHistoryLists = $sql->fetchAll(PDO::FETCH_ASSOC);

$pageLists = ceil($totalRecords / $rowLimit); 

?>