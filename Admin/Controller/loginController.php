<?php
ini_set('display_errors', 1);
session_start();
// print_r($_POST);

if (isset($_POST["login"])) {
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    include "../Model/model.php";

    $sql = $pdo->prepare(
        "SELECT * FROM m_admin WHERE admin_name=:name"
    );

    $sql->bindValue(":name", $userName);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($result);
    if (count($result) == 0) {
        $_SESSION["loginError"] = "Email not found!";
        header("Location: ../View/adminProfile/adminLogin.php");
    } else {
        if ($password == $result[0]["admin_password"]) {
            header("Location: ../View/adminDashboard/adminDashboard.php");
        } else {
            $_SESSION["loginError"] = "Email or password incorrect!";
            header("Location: ../View/adminProfile/adminLogin.php");
        }
    }
} else {
    header("Location: ../View/errors/error.php");
}
