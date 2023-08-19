<?php


session_start();

$choice_pack_id = $_GET["choice_id"];
print_r($_GET["choice_id"]);

//DB connection
include "../../Model/model.php";


$sql = $pdo->prepare(
    "UPDATE m_suppliers 
    SET pack_id = :choice_package_id 
    WHERE id = :id
    ;"
);
$sql->bindValue(":id", 12);
$sql->bindValue(":choice_package_id", $choice_pack_id);
$sql->execute();

header("Location:../../View/profile/payment.php");
?>