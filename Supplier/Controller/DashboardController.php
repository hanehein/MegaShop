<?php
$id = $_SESSION["sup_id"];


// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_supliers WHERE id=:id"
);
$sql->bindValue(":id", $id);
$sql->execute(); // real sql run 

$supplier = $sql->fetchAll(PDO::FETCH_ASSOC);



// header("Location: ../View/dashboard/dashboard.php");



?>