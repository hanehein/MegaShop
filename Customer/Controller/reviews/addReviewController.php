<?php 
if(count($_POST) == 0){
    header("Location: ../../View/errors/error.php");
}

if(!isset($_POST["from_single_product_detail"])){
    header("Location: ../../View/errors/error.php");
}

session_start();
include "../middleware/loginCheck.php";
$customer_id = $_SESSION["logined_customer_id"];
$product_id = $_POST["product_id"];
$rating = $_POST["rating"];
$review = $_POST["review"];

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "INSERT INTO `t_product_reviews` (
        `rating`, 
        `review`, 
        `product_id`, 
        `customer_id`,
        `create_date`
    ) VALUES (
        :rating, 
        :review, 
        :p_id, 
        :c_id, 
        :create_date
    )"
);

$sql->bindValue(":rating", $rating);
$sql->bindValue(":review", $review);
$sql->bindValue(":p_id", $product_id);
$sql->bindValue(":c_id", $customer_id);
$sql->bindValue(":create_date", date("Y-m-d"));
$sql->execute();

header("Location: ../products/productDetailsController.php?product_id=$product_id");

?>