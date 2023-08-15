<?php
ini_set('display_errors', 1);
session_start();
// print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
} else {
    if (isset($_POST["login"])) {
        $id = $_POST["admin_id"];
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $bio = $_POST["bio"];
        $phone = $_POST["phone"];
        include "../Model/model.php";

        $sql = $pdo->prepare(
            "SELECT * FROM m_admin WHERE admin_name=:name"
        );

        $sql->bindValue(":name", $userName);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        // print_r($result);
        if (count($result) == 0) {
            // $_SESSION["loginError"] = "Admin Name not found!";
            header("Location: ../View/adminProfile/adminLogin.php");
        } else {
            if ($password == $result[0]["admin_password"]) {
                $_SESSION["adminId"] = $result[0]["admin_id"];
                $_SESSION["adminName"] = $result[0]["admin_name"];
                header("Location: ./dashboardController.php");
            } else {
                $_SESSION["loginError"] = "Name or Password Incorrect!";
                header("Location: ../View/adminProfile/adminLogin.php");
            }
        }
    } else {
        header("Location: ../View/errors/error.php");
    }
}
