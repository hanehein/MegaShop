<?php 
//connect database
include "../../Model/model.php";

//get incoming order lists
$sql = $pdo->prepare(
    "SELECT *,
    t_orders.id AS order_id,
    t_orders.create_date AS order_create_date 
    FROM t_orders 
    JOIN m_customers ON t_orders.cus_id = m_customers.id
    where t_orders.order_status = 0 AND t_orders.sup_id = :supplier_id
    ORDER BY t_orders.create_date DESC"
);

$sql->bindValue(":supplier_id", 1);
$sql->execute();
$incomingOrders = $sql->fetchAll(PDO::FETCH_ASSOC);

//connect database
include "../../Model/model.php";

// get order details lists
$sql = $pdo->prepare(
    "SELECT * FROM t_orderdetails
    INNER JOIN m_products
    ON t_orderdetails.p_id = m_products.id"
);

$sql->execute();
$orderDetails = $sql->fetchAll(PDO::FETCH_ASSOC);
?>