<?php 

if(!isset($_GET["order_id"])){
    header("Location: ../../View/errors/error.php");
}

session_start();
$order_id = $_GET["order_id"];

//connect database
include "../../Model/model.php";

// get order general informations
$sql = $pdo->prepare(
    "SELECT *,t_orders.create_date AS order_create_date
    FROM t_orders 
    JOIN m_customers ON t_orders.cus_id = m_customers.id
    where t_orders.id = :order_id"
);

$sql->bindValue(":order_id", $order_id);
$sql->execute();
$order = $sql->fetchAll(PDO::FETCH_ASSOC);



//connect database
include "../../Model/model.php";

// get order details informations
$sql = $pdo->prepare(
    "SELECT * FROM t_orderdetails
    INNER JOIN m_products
    ON t_orderdetails.p_id = m_products.id
    WHERE t_orderdetails.order_id = :order_id"
);

$sql->bindValue(":order_id", $order_id);
$sql->execute();
$orderDetails = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["order"] = $order[0];
$_SESSION["orderDetails"] = $orderDetails;

//go to order detail page
header("Location: ../../View/order/orderDetail.php");


?>

