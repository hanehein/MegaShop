<?php

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
    t_product_reviews.rating AS rating, 
    t_product_reviews.review AS review,
    m_products.p_name AS p_name, 
    m_customers.cus_name AS cus_name, 
    t_product_reviews.create_date AS create_date,
    m_products.id AS p_id
    FROM t_product_reviews
    INNER JOIN m_products ON t_product_reviews.product_id = m_products.id
    INNER JOIN m_customers ON t_product_reviews.customer_id = m_customers.id
    WHERE t_product_reviews.del_flg = 0
    ORDER BY t_product_reviews.create_date DESC"
);
$sql->execute();
$reviewLists = $sql->fetchAll(PDO::FETCH_ASSOC);

?>