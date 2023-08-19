<?php

$customer_id = 1;

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        *
    FROM 
        `m_wishlist` 
    WHERE  
        `m_wishlist`.`del_flg` = 0 
    AND 
        `c_id` = :id"
);

$sql->bindValue(":id", $customer_id);
$sql->execute();
$productLists = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($productLists);

