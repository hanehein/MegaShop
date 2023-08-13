<?php
session_start();
include "../../Model/model.php";
$id = $_SESSION["sup_id"];
$searchName = $_POST["searchText"];
$sql = $pdo->prepare(
    "SELECT * FROM `m_products`
      INNER JOIN m_category 
      on `m_product`.`p_category` = `m_category`.id 
      WHERE sup_id = :sup_id 
      AND `m_product`.p_name LIKE :search"
  );
  $sql->bindValue(":search",'%', $searchName,'%');
  $sql->bindValue(":id", $id);
  $sql->execute();
  $productLists = $sql->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($productLists);
?>