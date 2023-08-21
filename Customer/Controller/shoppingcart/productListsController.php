<?php

$customer_id = 1;

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

