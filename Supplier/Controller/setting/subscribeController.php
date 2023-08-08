<?php
include "../../View/profile/plan.php";
session_start();
$package_id = $_GET["plan_id"];
//DB connection
include "../../Model/model.php";


$sql = $pdo->prepare(
    "UPDATE m_suppliers SET 
    pack_id = :package_id 
    WHERE id =  :id;"
);
$sql->bindValue(":package_id", $package_id);
$sql->execute();

header("Location: ../../View/profile/payment.php");

?>