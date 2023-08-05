<?php 

ini_set('display_errors', 1);
session_start();

$id = $_GET["id"];


if(!isset($id)){
    header ("Location: ../View/errors/error.php");
} else {
    include "../Model/model.php";
    $sql = $pdo->prepare(
        "UPDATE m_products 
        SET del_flg = 1 WHERE id = :id;
    ");
    $sql->bindValue(":id",$id);
    $sql->execute();

    header("Location: ../View/productlists/productLists.php");
}
    
