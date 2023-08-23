<?php
ini_set('display_errors', 1);

// login check
session_start();
include "../middleware/loginCheck.php";

if(!isset($_GET["supplier_id"])){
    header("Location: ../../View/errors/error.php");
}

$customer_id = $_SESSION["logined_customer_id"];
$supplier_id = $_GET["supplier_id"];

//DB connection
include "../../Model/model.php";

$sql = $pdo->prepare(
    "DELETE FROM 
        t_follow_stores 
    WHERE 
        sup_id = :sup_id 
    AND 
        cus_id = :cus_id"
);
$sql->bindValue(":sup_id", $supplier_id);
$sql->bindValue(":cus_id", $customer_id);
$sql->execute();

header("Location: ../../View/shop/shopprofile.php?id=$supplier_id");
