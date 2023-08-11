<?php 

//login check

//chech with post or get
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

//check from stage is addproduct page or not
if (!isset($_POST["from_message"])) {
    header("Location: ../../View/errors/error.php");
}

session_start();
$supplier_id = $_SESSION["sup_id"];

$userID = $_POST["currentUserID"];

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        * 
    FROM 
        t_messages
    INNER JOIN m_customers
    ON
        t_messages.cus_id = m_customers.id
    WHERE
        t_messages.cus_id = :user_id
    AND
        t_messages.sup_id = :supplier_id
    ORDER BY
        t_messages.id"
);

$sql->bindValue(":user_id", $userID);
$sql->bindValue(":supplier_id",$supplier_id);
$sql->execute();
$currentUserMessages = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($currentUserMessages);





?>