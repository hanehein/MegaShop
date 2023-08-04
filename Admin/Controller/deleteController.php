<?php 

ini_set('display_errors', 1);
session_start();
// print_r($_GET);
$id = $_GET["id"];


if(!isset($id)){
    header ("Location: ../View/errors/error.php");
} else {
    include "../Model/model.php";
    $sql = $pdo->prepare("
        UPDATE m_suppliers SET del_flg = 1 where id = :id;
    ");
    $sql->bindValue(":id",$id);
    $sql->execute();
    // $supLists = $sql->fetchAll(PDO::FETCH_ASSOC);
    header("Location: ../View/supplierList/supplierEdit.php");
}
    
