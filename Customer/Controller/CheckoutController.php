<?php

$p_id = $_SESSION["product"];

// $cus_id = $_GET['cus_id'];
// $p_id = 17;
$cus_id = $_SESSION["logined_customer_id"];

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
