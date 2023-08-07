<?php
session_start();


// check from stage is  register page or not 
if (isset($_POST["login"])) {
    $name = $_POST["name"];
    $passwords = $_POST["password"];
    //Db Connection
    include "../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT * FROM m_suppliers WHERE sup_name=:name"
    );

    $sql->bindValue(":name", $name);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) == 0) {
        $_SESSION["loginerror"] = "Email not found!";
        header("Location: ../View/profile/login.php");
    } else {
        if (password_verify($passwords, $result[0]["sup_password"])) {
                $_SESSION["sup_id"] =$result[0]["id"];
                header("Location: ../View/dashboard/dashboard.php");
        } else {
            $_SESSION["loginerror"] = "Email or password incorrect!";
            header("Location: ../../../View/profile/login.php");
        }
    }
} else {
    // go to error page
    header("Location: ../../../../View/errors/error.php");

}
