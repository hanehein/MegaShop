<?php
ini_set('display_errors', 1);
session_start();
print_r($_GET);
$id = $_GET["id"];
if (!isset($id)) {
    header("Location: ../View/errors/error.php");
} else {
    include "../Model/model.php";
    $sql = $pdo->prepare("
        SELECT *, 
        m_customers.id as customer_id, 
        m_regions.name as region_name,
        m_regions.id as region_real_id, 
        m_townships.name as township_name,
        m_townships.id as township_real_id, 
        m_townships.region_id as township_region_id 
        FROM m_customers 
        JOIN m_regions ON m_customers.region_id = m_regions.id
        JOIN m_townships ON m_customers.township_id = m_townships.id 
        WHERE m_customers.id = :id
    ");
    $sql->bindValue(":id", $id);
    $sql->execute();
    $_SESSION["cusNotify"] = $sql->fetchAll(PDO::FETCH_ASSOC);
    header("Location: ../View/customerList/cusNotifyEdit.php");
}



