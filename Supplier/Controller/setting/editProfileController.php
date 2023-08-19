<?php
session_start();
$id= $_GET["id"];

if(!isset($_GET["id"])){
    header("Location: ../../View/errors/error.php");
}

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        id, 
        sup_name, 
        sup_email, 
        sup_phone, 
        sup_shop_name, 
        sup_photo 
    FROM 
        m_suppliers
    WHERE 
        id = :id"
);

$sql->bindValue(":id", $id);
$sql->execute();
$supplier_datas = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["data"] = $supplier_datas[0];

// go to view page
header("Location: ../../View/profile/updateProfile.php");

?>