<?php 
if(!isset($_GET["order_id"])){
    header("Location: ../../View/errors/error.php");
}

session_start();
$order_id = $_GET["order_id"];

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "UPDATE t_orders
    SET order_status = 2
    WHERE id = :id"
);
$sql->bindValue(":id", $order_id);
$sql->execute();

// go to order history review page
header("Location: ../../View/order/orderHistoryReview.php");

?>