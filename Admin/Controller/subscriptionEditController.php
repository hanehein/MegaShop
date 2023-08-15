<?php
session_start();
ini_set('display_errors', 1);

$id = $_GET["id"];

if(!isset($id)){
    header("Location: ../View/errors/error.php");
} else {
    include "../Model/model.php";
    $sql = $pdo->prepare("
    SELECT * FROM m_suppliers 
    INNER JOIN m_package ON m_suppliers.pack_id = m_package.pack_id WHERE m_suppliers.id = :id;
    ");
    $sql->bindValue(":id",$id);
    $sql->execute();
    $_SESSION["subIncomeEdit"] = $sql->fetchAll(PDO::FETCH_ASSOC);
    header("Location: ../View/adminDashboard/subscriptionEdit.php");
}

