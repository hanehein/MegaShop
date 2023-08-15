<?php
//chech with post or get
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

//check from stage is order review page or not
if (!isset($_POST["from_orderReview"])) {
    header("Location: ../../View/errors/error.php");
}

session_start();
$supplier_id = $_SESSION["sup_id"];

$orderValue = $_POST["orderValue"];
$rowLimit = $_POST["rowLimit"];
$page = $_POST["page"];
$pageStart = ($page - 1) * $rowLimit;

//connect database
include "../../Model/model.php";

$query = "SELECT 
            t_product_reviews.rating AS rating, 
            t_product_reviews.review AS review,
            m_products.p_name AS p_name, 
            m_customers.cus_name AS cus_name, 
            t_product_reviews.create_date AS create_date,
            m_products.id AS p_id
        FROM 
            t_product_reviews
        INNER JOIN m_products 
        ON 
            t_product_reviews.product_id = m_products.id
        INNER JOIN m_customers 
        ON 
            t_product_reviews.customer_id = m_customers.id
        WHERE 
            t_product_reviews.del_flg = 0
        AND 
            m_products.supplier_id = :sup_id"
        ;

if($orderValue == 0){
    //order by date
    $sql = $pdo->prepare(
        $query." ORDER BY t_product_reviews.create_date DESC LIMIT 
        $pageStart, $rowLimit");

}else if($orderValue == 1){
    //order by rating
    $sql = $pdo->prepare($query." ORDER BY t_product_reviews.rating DESC LIMIT 
    $pageStart, $rowLimit");
};
 
$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$reviewLists = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($reviewLists);
?>