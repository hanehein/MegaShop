<?php

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        * 
    FROM 
        m_products
    WHERE 
        del_flg = 0 
    AND 
        p_approved = 1"
);
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

