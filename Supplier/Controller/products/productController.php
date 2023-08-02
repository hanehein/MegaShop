<?php

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_products.p_name AS name, m_category.cat_name AS category, m_brand.band_name AS brand, m_products.p_discount AS discount, m_products.p_buy_price AS buyprice, m_products.p_sell_price AS sellprice
    FROM m_products
    INNER JOIN m_category ON m_products.p_category = m_category.id
    INNER JOIN m_brand ON m_products.p_brand = m_brand.id"
);
$sql->execute();

$products = $sql->fetchAll(PDO::FETCH_ASSOC);

?>