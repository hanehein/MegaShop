<?php
ini_set('display_errors', 1);
//DB connection
include "../../Model/model.php";

$sql = $pdo->prepare(
  "SELECT * FROM m_suppliers"
);
$sql->execute();
$supplier = $sql->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET["page"])){
  $page = $_GET["page"];
}else{
  $page = 1;
}
$row_limit = 3;
$page_start = ($page - 1) * $row_limit ;
$page_start = ($page_start<0) ? 0 : $page_start;

//All Data Count
$sql = $pdo->prepare(
  "SELECT * FROM t_shop_reviews 
  INNER JOIN m_customers 
  ON t_shop_reviews.cus_id=m_customers.id"
);
$sql->execute();
$total_data = $sql->fetchAll(PDO::FETCH_ASSOC);

//Shop Review box
$sql = $pdo->prepare(
  "SELECT * FROM t_shop_reviews 
  INNER JOIN m_customers 
  ON t_shop_reviews.cus_id=m_customers.id 
 LIMIT $page_start,$row_limit"
);
// $sql->bindValue(":sup_id",$sup_id);
$sql->execute();
$reviews = $sql->fetchAll(PDO::FETCH_ASSOC);
$page_lists = ceil(count($total_data)/$row_limit);
 
//All Data Count
$sql = $pdo->prepare(
  "SELECT * FROM t_product_reviews 
  INNER JOIN m_customers 
  ON t_product_reviews.customer_id=m_customers.id"
);
$sql->execute();
$total_record = $sql->fetchAll(PDO::FETCH_ASSOC);

//Product Review box
$sql = $pdo->prepare(
  "SELECT * FROM t_product_reviews 
  INNER JOIN m_customers 
  ON t_product_reviews.customer_id=m_customers.id
  LIMIT $page_start,$row_limit "
);
$sql->execute();
$p_reviews = $sql->fetchAll(PDO::FETCH_ASSOC);
$page_lists = ceil(count($total_record)/$row_limit);

//rating bar graph
$sql = $pdo->prepare(
  "SELECT count(id) As countperson, rating FROM t_shop_reviews GROUP By rating"
);
$sql->execute();
$reviewers = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
