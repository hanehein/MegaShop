<?php
session_start();
ini_set('display_errors', 1);
include "./middleware/loginCheck.php";
$adminName =  $_SESSION["adminName"];
include "../Model/model.php";
$sql = $pdo->prepare("
        SELECT * FROM m_admin WHERE admin_name=:name 
    ");
$sql->bindValue(":name", $adminName);
$sql->execute();
$_SESSION["admin"] =  $sql->fetchAll(PDO::FETCH_ASSOC);
header("Location: ../View/adminDashboard/adminDashboard.php");
