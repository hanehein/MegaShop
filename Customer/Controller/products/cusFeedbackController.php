<?php
ini_set('display_errors', 1);
$rate = $_POST["rateVal"];
$feedback =$_POST["feedback"];
$cus_id = 1;//get from login 
$create_date = date("Y-m-d");
//DB connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    "INSERT INTO t_customer_feedbacks (
        rate,
        feedback,
        customer_id,
        create_date
    )VALUES(
       :rate,
       :feedback,
       :cus_id,
       :create_date 
    )"
);
$sql->bindValue(":rate", $rate);
$sql->bindValue(":feedback", $feedback);
$sql->bindValue(":cus_id", $cus_id);
$sql->bindValue(":create_date", $create_date);
$sql->execute();

header("Location: ../../View/Product/cusfeedback.php");
