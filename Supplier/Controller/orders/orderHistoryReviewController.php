<?php

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT *, t_orders.id AS order_id,t_orders.create_date AS order_create_date  
    FROM t_orders
    JOIN m_customers ON t_orders.cus_id = m_customers.id
    WHERE (order_status = :confirm_state OR order_status = :reject_state)
    AND t_orders.sup_id = :supplier_id"
);
$sql->bindValue(":confirm_state", 1);
$sql->bindValue(":reject_state", 2);
$sql->bindValue(":supplier_id", 1);
$sql->execute();
$orderHistoryLists = $sql->fetchAll(PDO::FETCH_ASSOC);

?>