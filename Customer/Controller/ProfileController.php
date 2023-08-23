<?php

session_start();

$cus_id = $_SESSION["logined_customer_id"];


if (!isset($cus_id)) {
    header("Location: ../View/errors/error.php");
} else {
    include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_customers 
    WHERE id = :cus_id"
);
$sql->bindValue(":cus_id", $cus_id);
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['profileEdit'] = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>