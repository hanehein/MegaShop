<?php 

ini_set('display_errors', 1);
session_start();
$c_id = $_SESSION["logined_customer_id"];
$p_id = $_GET["id"];

print_r($id);
if(!isset($p_id)){
    header ("Location: ../View/errors/error.php");
} else {
    include "../Model/model.php";
    $sql = $pdo->prepare(
        "DELETE FROM `m_wishlist` 
        WHERE `c_id` = :c_id AND `product_id` = :p_id;
    ");
    $sql->bindValue(":c_id",$c_id);
    $sql->bindValue(":p_id",$p_id);
    $sql->execute();

    header("Location: ../View/profile/wishlist.php");
}
    
