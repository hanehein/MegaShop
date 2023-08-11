<?php 

//login check

//chech with post or get
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

//check from stage
if (!isset($_POST["from_send_message"])) {
    header("Location: ../../View/errors/error.php");
}

session_start();
$supplier_id = $_SESSION["sup_id"];

$userID = $_POST["currentChatUser"];
$message = $_POST["message"];



// connect database
include "../../Model/model.php";
$sql = $pdo->prepare(
    "INSERT INTO `t_messages` (
        `cus_id`, 
        `sup_id`, 
        `from_to`, 
        `message`, 
        `create_date`
    ) VALUES (
        :cus_id, 
        :sup_id, 
        :from_to, 
        :message,
        :date
    )"
);

$sql->bindValue(":cus_id", $userID);
$sql->bindValue(":sup_id", $supplier_id);
$sql->bindValue(":from_to", 0);
$sql->bindValue(":message", $message);
$sql->bindValue(":date", date("Y-m-d"));
$sql->execute();


?>