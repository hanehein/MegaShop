<?php

session_start();
$customer_id = $_SESSION["logined_customer_id"];

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        *
    FROM 
        `t_shopping_cart` 
    WHERE
        `customer_id` = :id"
);

$sql->bindValue(":id", $customer_id);
$sql->execute();
$productLists = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($productLists);

