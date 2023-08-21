<?php
ini_set('display_errors', 1);


// $sup_id = $_GET["id"];
// print_r( $_GET["id"]);

// $cus_id = $_GET["cus_id"];

$create_date = date("Y-m-d");
//DB connection
include "../../Model/model.php";

$sql = $pdo->prepare(
  "INSERT INTO t_follow_stores(
    sup_id,
    cus_id,
    create_date)
    VALUES(
    :sup_id,
    :cus_id,
    :create_date)"
);
$sql->bindValue(":sup_id", 12);
$sql->bindValue(":cus_id", 1);
$sql->bindValue(":create_date", $create_date);

$sql->execute();
