<?php 
session_start();
ini_set('display_errors', 1);
$adminId =  $_SESSION["adminId"];
include "../../Model/model.php";
$sql = $pdo->prepare("
    SELECT * FROM m_admin WHERE id=:id  
");
$sql->bindValue(":id",$adminId);
$sql->execute();
$admin =  $sql->fetchAll(PDO::FETCH_ASSOC);

?>