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
    "INSERT INTO t_follow_stores(
        sup_id,
        cus_id,
        create_date
    ) VALUES (
        :sup_id,
        :cus_id,
        :create_date
    )"
);
$sql->bindValue(":sup_id", $supplier_id);
$sql->bindValue(":cus_id", $customer_id);
$sql->bindValue(":create_date", date("Y-m-d"));
$sql->execute();

header("Location: ../../View/shop/shopprofile.php?id=$supplier_id");
