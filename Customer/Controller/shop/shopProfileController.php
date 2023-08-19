<?php
ini_set('display_errors', 1);

if (!isset($_GET["id"])) {
  header("Location: ../View/errors/error.php");
}
$id = $_GET["id"];



 //DB connection
  include "../../Model/model.php";
  $sql = $pdo->prepare(
    "SELECT * FROM m_products 
    INNER JOIN t_product_reviews 
    ON m_products.id = t_product_reviews.product_id WHERE supplier_id = :id"
  );
  $sql->bindValue(":id",$id);
  $sql->execute();
  $product_ratings = $sql->fetchAll(PDO::FETCH_ASSOC);

  $sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE del_flg=0"
  );
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
  product_id;"
);
$sql->execute();
$avgs = $sql->fetchAll(PDO::FETCH_ASSOC);

  //Total followers
  $sql = $pdo->prepare(
    "SELECT  
    COUNT(cus_id) AS total_followers
  FROM 
    t_follow_stores
  WHERE sup_id = :supplier_id;"
  );
  $sql->bindValue(":supplier_id",$id);
  $sql->execute();
  $tot_followers = $sql->fetchAll(PDO::FETCH_ASSOC);

  //Shop Name
  $sql = $pdo->prepare(
    "SELECT  
    *
  FROM 
    m_suppliers
  WHERE id = :supplier_id;"
  );
  $sql->bindValue(":supplier_id",$id);
  $sql->execute();
  $sup_datas= $sql->fetchAll(PDO::FETCH_ASSOC);
  

  // echo "<pre>";
  // print_r($product_ratings);
// echo "hi";
