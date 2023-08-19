<?php
ini_set('display_errors', 1);
session_start();
print_r($_POST["sup_id"]);
die("");
$sup_id = $_POST["sup_id"];
$cus_id = $_POST["cus_id"];
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
$sql->bindValue(":sup_id", $sup_id);
$sql->bindValue(":cus_id", $cus_id);

$sql->execute();
