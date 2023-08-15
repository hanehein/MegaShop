<?php

ini_set('display_errors', 1);
session_start();
// print_r($_GET);
$id = $_GET["id"];
if (!isset($id)) {
    header("Location: ../View/errors/error.php");
} else {
    include "../Model/model.php";
    $sql = $pdo->prepare("
        SELECT * FROM m_customers 
        JOIN m_regions ON m_customers.region_id = m_regions.id  
        WHERE m_customers.id = :id
    ");
    $sql->bindValue(":id", $id);
    $sql->execute();
    $_SESSION["cusNotify"] = $sql->fetchAll(PDO::FETCH_ASSOC);
    header("Location: ../View/customerList/cusNotifyEdit.php");
}



