<?php

// $p_id = $_GET['id'];
// $cus_id = $_GET['cus_id'];
$p_id = 1;
$cus_id = 1;

include "../../Model/model.php";

$sql = $pdo->prepare(
    "  SELECT * FROM `t_shopping_cart` 
    INNER JOIN `m_customers` ON `t_shopping_cart`.`customer_id` = `m_customers`.`id`
    INNER JOIN `m_products` ON `t_shopping_cart`.`product_id` = `m_products`.`id` WHERE `customer_id` = :cus_id AND `product_id` = :p_id;
        "
);

$sql->bindValue(":cus_id", $cus_id);
$sql->bindValue(":p_id", $p_id);

$sql->execute();

$products = $sql->fetchAll(PDO::FETCH_ASSOC);
