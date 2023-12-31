<?php 

if(!isset($_GET["product_id"])){
    header("Location: ../../View/errors/error.php");
}

session_start();
include "../middleware/loginCheck.php";
$customer_id = $_SESSION["logined_customer_id"];

$product_id = $_GET["product_id"];

//connect database
include "../../Model/model.php";

//product details
$sql = $pdo->prepare(
    "SELECT 
        *,
        m_products.id AS p_id
    FROM 
        m_products
    INNER JOIN m_suppliers 
    ON 
        m_products.supplier_id = m_suppliers.id
    WHERE 
        m_products.id = :product_id"
);

$sql->bindValue(":product_id",$product_id);
$sql->execute();
$product = $sql->fetchAll(PDO::FETCH_ASSOC);
$product[0]["max_photo"] = 8;

//reviews
$sql = $pdo->prepare(
    "SELECT 
        *,
        t_product_reviews.create_date as review_create_date
    FROM 
        t_product_reviews 
    INNER JOIN m_customers
    ON 
        t_product_reviews.customer_id = m_customers.id
    WHERE 
        t_product_reviews.product_id = :product_id"
);
$sql->bindValue(":product_id",$product_id);
$sql->execute();
$reviews = $sql->fetchAll(PDO::FETCH_ASSOC);

//average rating
$sql = $pdo->prepare(
    "SELECT 
        product_id,
        AVG(rating) AS average_rating
    FROM 
        t_product_reviews
    WHERE 
        t_product_reviews.product_id = :product_id
    GROUP BY
        t_product_reviews.product_id"
);
$sql->bindValue(":product_id",$product_id);
$sql->execute();
$averageRating = $sql->fetchAll(PDO::FETCH_ASSOC);

//group rating
$sql = $pdo->prepare(
    "SELECT 
        rating,
        COUNT(*) AS rate_count
    FROM 
        t_product_reviews
    WHERE
        product_id = :product_id
    GROUP BY
        rating"
);
$sql->bindValue(":product_id",$product_id);
$sql->execute();
$rate_count = $sql->fetchAll(PDO::FETCH_ASSOC);

//order
$sql = $pdo->prepare(
    "SELECT 
        *
    FROM 
        t_orderdetails
    INNER JOIN t_orders
    ON t_orderdetails.order_id = t_orders.id
    WHERE
        t_orders.cus_id = :customer_id"
);
$sql->bindValue(":customer_id",$customer_id);
$sql->execute();
$orders = $sql->fetchAll(PDO::FETCH_ASSOC);



$_SESSION["product_detail"] = $product[0];
$_SESSION["product_reviews"] = $reviews;
$_SESSION["average_rating"] = $averageRating;
$_SESSION["rate_count"] = $rate_count;
$_SESSION["orders"] = $orders;

header("Location: ../../View/product/singleProductDetail.php");
?>

