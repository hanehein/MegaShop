<?php

// login check
session_start();
if(!isset($_SESSION["logined_customer_id"])){
    header("Location: ../accountInfo/cusLogin.php");
}

$customer_id = $_SESSION["logined_customer_id"];

// connect database
include "../../Model/model.php";

$product_query = "SELECT * FROM m_products WHERE del_flg = 0 AND p_approved = 1";

// filter by search value
if (isset($_GET["search_value"])) {
    $filterSearchValue = $_GET["search_value"];
    $product_query .= " AND p_name LIKE '%$filterSearchValue%'";
}

// filter by category
if (isset($_GET["category"])) {
    $filterCategory = $_GET["category"];
    $product_query .= " AND p_category = $filterCategory";
}

//filter by brand
if (isset($_GET["brands"])) {
    $filterBrands = $_GET["brands"];
    $product_query .= " AND p_brand IN (" . implode(",", $filterBrands) . ")";
}

// filter by price
$filterByPrice = FALSE;
if (
    isset($_GET["min_price"]) && $_GET["min_price"] != '' &&
    isset($_GET["max_price"]) && $_GET["max_price"] != ''
) {
    $filterByPrice = TRUE;
    $min_price = $_GET["min_price"];
    $max_price = $_GET["max_price"];
    $product_query .= " AND p_sell_price BETWEEN $min_price AND $max_price";
}

// filter by order


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
