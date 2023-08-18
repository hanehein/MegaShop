<?php

// connect database
include "../../Model/model.php";

$product_query = "SELECT * FROM m_products WHERE del_flg = 0 AND p_approved = 1";

if(isset($_GET["brands"])){
    $filterBrands = $_GET["brands"];
    $product_query = $product_query." AND p_brand IN (".implode(",", $filterBrands).")";
}



$sql = $pdo->prepare($product_query);
$sql->execute();
$productLists = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT 
        product_id, 
        AVG(rating) AS average_rating
    FROM 
        t_product_reviews
    GROUP BY 
        product_id;"
);
$sql->execute();
$productRatings = $sql->fetchAll(PDO::FETCH_ASSOC);

$customer_id = 1;
$sql = $pdo->prepare(
    "SELECT 
        *
    FROM 
        m_wishlist
    WHERE
        c_id = :customer_id"
);

$sql->bindValue(":customer_id", $customer_id);
$sql->execute();
$productsInWishlist = $sql->fetchAll(PDO::FETCH_ASSOC);

