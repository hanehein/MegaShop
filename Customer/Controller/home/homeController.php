<?php 

// login check
session_start();
if(!isset($_SESSION["logined_customer_id"])){
    header("Location: ../accountInfo/cusLogin.php");
}

$customer_id = $_SESSION["logined_customer_id"];

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
    LIMIT 0,12
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
    WHERE
        c_id = :customer_id
    "
);
$sql->bindValue(":customer_id",$customer_id);
$sql->execute();
$productsInWishlist = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT 
        * 
    FROM
        t_shopping_cart
    WHERE
        customer_id = :customer_id
    "
);
$sql->bindValue(":customer_id",$customer_id);
$sql->execute();
$productsInCart = $sql->fetchAll(PDO::FETCH_ASSOC);
?>