<?php
session_start();

// check from stage is  login page or not 
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

if (!isset($_POST["from_login"])) {
    header("Location: ../../View/errors/error.php");
}

$email = $_POST["email"];
$password = $_POST["password"];

//Db Connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT 
        * 
    FROM 
        m_customers 
    WHERE cus_email=:email"
);
$sql->bindValue(":email", $email);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($result) == 0) {
    $_SESSION["login_error"] = "Email not found!";
    header("Location: ../../View/accountInfo/cusLogin.php");
} else {
    if (password_verify($password, $result[0]["cus_password"])) {
        $_SESSION["logined_customer_id"] = $result[0]["id"];
        $_SESSION["logined_customer"] = $result[0];
        header("Location: ../../View/profile/profile.php");
    } else {
        $_SESSION["login_error"] = "Email or password incorrect!";
        header("Location: ../../View/accountInfo/cusLogin.php");
    }
}