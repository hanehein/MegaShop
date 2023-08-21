<?php

$customer_id = 1;

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        *
    FROM 
        t_shopping_cart
    INNER JOIN m_products
    ON
        t_shopping_cart.product_id = m_products.id
    INNER JOIN m_suppliers
    ON
        t_shopping_cart.supplier_id = m_suppliers.id
    WHERE
        customer_id = :id"
);

$sql->bindValue(":id", $customer_id);
$sql->execute();
$productLists = $sql->fetchAll(PDO::FETCH_ASSOC);

