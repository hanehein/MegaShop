<?php
session_start();
$supplier_id = $_SESSION["sup_id"];

//DB connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT 
        * 
    FROM 
        m_suppliers 
    WHERE 
        id = :id"
);

$sql->bindValue(":id", $supplier_id);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$supplier = $result[0];
?>