<?php

if(!isset($_GET["product_id"])){
    header("Location: ../../View/errors/error.php");
}

$product_id = $_GET["product_id"];
session_start();


//get product's information

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        *,
        m_products.id AS p_id
    FROM 
        m_products
    INNER JOIN m_category 
    ON 
        m_products.p_category = m_category.id
    INNER JOIN m_brand 
    ON 
        m_products.p_brand = m_brand.id
    WHERE 
        m_products.id = :id"
);

$sql->bindValue(":id",$product_id);
$sql->execute();
$product = $sql->fetchAll(PDO::FETCH_ASSOC);
$product[0]["max_photo"] = 8;

$_SESSION["product_detail"] = $product[0];


//get product's rating and reviews

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
    t_product_reviews.rating AS rating,
    t_product_reviews.review AS review,
    t_product_reviews.create_date AS create_date,
    m_customers.cus_name AS cus_name
    FROM t_product_reviews
    INNER JOIN m_customers ON t_product_reviews.customer_id = m_customers.id
    WHERE product_id = :id"
);

$sql->bindValue(":id",$product_id);
$sql->execute();
$reviews = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["product_reviews"] = $reviews;


//go to product detail page
header("Location: ../../View/products/productDetail.php");
?>