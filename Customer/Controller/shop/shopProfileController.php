<?php
ini_set('display_errors', 1);
//DB connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE del_flg=0"
  );
  $sql->execute();
  $products = $sql->fetchAll(PDO::FETCH_ASSOC);
//   echo "<pre>";
//   print_r($products);
// echo "hi";
?>