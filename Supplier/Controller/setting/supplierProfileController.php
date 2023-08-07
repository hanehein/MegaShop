<?php
session_start();
//DB connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_suppliers WHERE id = :id"
);
$sql->bindValue(":id", 4);
$sql->execute();//real sql run
$profile = $sql->fetchAll(PDO::FETCH_ASSOC);
?>