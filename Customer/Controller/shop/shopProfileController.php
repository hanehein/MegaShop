<?php
ini_set('display_errors', 1);
//DB connection
$id = $_GET["id"];
// print_r($id);

if (!isset($id)) {
  header("Location: ../View/errors/error.php");
} else {
  include "../../Model/model.php";
  $sql = $pdo->prepare(
    "SELECT * FROM m_products 
    INNER JOIN t_product_reviews 
    ON m_products.id = t_product_reviews.product_id"
  );
  $sql->execute();
  $product_ratings = $sql->fetchAll(PDO::FETCH_ASSOC);

  $sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE del_flg=0"
  );
  $sql->execute();
  $products = $sql->fetchAll(PDO::FETCH_ASSOC);
}



  // echo "<pre>";
  // print_r($product_ratings);
// echo "hi";
