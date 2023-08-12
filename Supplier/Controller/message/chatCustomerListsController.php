<?php
session_start();
$supplier_id = $_SESSION["sup_id"];

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_customers
    WHERE m_customers.id 
    IN (SELECT DISTINCT cus_id FROM t_messages WHERE sup_id = :sup_id)"
);

$sql->bindValue(":sup_id", $supplier_id);
$sql->execute();
$chatCustomerLists = $sql->fetchAll(PDO::FETCH_ASSOC);

?>