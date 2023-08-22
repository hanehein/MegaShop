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
        p_approved = 1
    LIMIT 0,6
");
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT 
        *
    FROM
        m_products
    WHERE
        p_discount != 0
    AND
        del_flg = 0
    AND 
        p_approved = 1
    LIMIT 0,6
");
$sql->execute();
$discountedProducts = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT
        product_id, 
        AVG(rating) AS average_rating
    FROM
        t_product_reviews
    GROUP BY
        product_id
    "
);
$sql->execute();
$productRatings = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT 
        * 
    FROM
        m_wishlist
    "
);
$sql->execute();
$productsInWishlist = $sql->fetchAll(PDO::FETCH_ASSOC);

?>