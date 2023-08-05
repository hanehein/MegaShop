<?php
session_start();

// check from stage is  login page or not 
if (count($_POST) == 0) {
    header("Location: ../../../../View/errors/error.php");
}

if (!isset($_POST["from_login"])) {
    header("Location: ../../../../View/errors/error.php");
}

$email = $_POST["email"];
$password = $_POST["password"];

//Db Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_suppliers WHERE sup_email=:email"
);

$sql->bindValue(":email", $email);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($result) == 0) {
    //email is invalid
    $_SESSION["login_error"] = "Email is not found!";
    header("Location: ../View/profile/login.php");
} else {
    //email is valid
    if (password_verify($password, $result[0]["sup_password"])) {
        //passwor is correct
        $_SESSION["sup_id"] = $result[0]["id"];
        //go to dashboard
        header("Location: ../View/dashboard/dashboard.php");
    } else {
        //password is incorrect
        $_SESSION["login_error"] = "Email or password is incorrect!";
        //go to login page
        header("Location: ../../../View/profile/login.php");
    }
}
