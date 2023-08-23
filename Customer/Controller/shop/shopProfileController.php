<?php
ini_set('display_errors', 1);

if (!isset($_GET["id"])) {
    header("Location: ../../View/errors/error.php");
}

$supplier_id = $_GET["id"];

// login check
session_start();
if(!isset($_SESSION["logined_customer_id"])){
    header("Location: ../accountInfo/cusLogin.php");
}
$customer_id = $_SESSION["logined_customer_id"];

//DB connection
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        * 
    FROM 
        m_products 
    WHERE 
        del_flg = 0 
    AND 
        supplier_id = :id
    AND 
        p_approved = 1;"
);
$sql->bindValue(":id", $supplier_id);
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);

//Average rating
$sql = $pdo->prepare(
    "SELECT 
        product_id, 
        AVG(rating) AS average_rating
    FROM 
        t_product_reviews
    GROUP BY 
        product_id"
);
$sql->execute();
$productRatings = $sql->fetchAll(PDO::FETCH_ASSOC);

//Total followers
$sql = $pdo->prepare(
    "SELECT  
        *
    FROM 
        t_follow_stores
    WHERE 
        sup_id = :supplier_id;"
);
$sql->bindValue(":supplier_id", $supplier_id);
$sql->execute();
$tot_followers = $sql->fetchAll(PDO::FETCH_ASSOC);

//supplier
$sql = $pdo->prepare(
    "SELECT  
        *
    FROM 
        m_suppliers
    WHERE 
        id = :supplier_id"
);
$sql->bindValue(":supplier_id", $supplier_id);
$sql->execute();
$sup_data = $sql->fetchAll(PDO::FETCH_ASSOC)[0];

//products in wishlist
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
