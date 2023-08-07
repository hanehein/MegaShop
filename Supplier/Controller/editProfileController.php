<?php
session_start();
$id= $_GET["id"];
// if(!isset($id)){
//     header("Location: ../View/errors/error.php");
// }else{
//connect database
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT sup_name, sup_email, sup_password, sup_phone, sup_shop_name, sup_photo FROM m_suppliers
    WHERE id = :id"
);

$sql->bindValue(":id", $id);
$sql->execute();
$_SESSION["data"] = $sql->fetchAll(PDO::FETCH_ASSOC);
print_r($_SESSION["data"]);


// go to view page
header("Location: ../View/profile/updateProfile.php");

?>