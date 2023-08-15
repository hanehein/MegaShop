<?php 

// check post method or get method
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

// check from stage is  login page or not 
if (!isset($_POST["from_login"])) {
    header("Location: ../../View/errors/error.php");
}

session_start();

$email = $_POST["email"];
$password = $_POST["password"];

//Db Connection
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_suppliers
    WHERE sup_email = :email"
);

$sql->bindValue(":email", $email);
$sql->execute();
$supplier = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($supplier) == 0){
    // invalid email
    $_SESSION["login_error"] = "Email is not found!";
    //go to login page
    header("Location: ../../View/account/login.php");
}else{
    if($supplier[0]["sup_approve"] == 0){
        //not approved by admin
        $_SESSION["login_error"] = "Your account is not approved by admin.Check Your Email Again!!";
        //go to login page
        header("Location: ../../View/account/login.php");
    }else{
        if(password_verify($password,$supplier[0]["sup_password"])){
            //login success
            $_SESSION["sup_id"] = $supplier[0]["id"];
            // go to dashboard
            header("Location: ../../View/dashboard/dashboard.php");
        }else{
            // invalid email
            $_SESSION["login_error"] = "Email or password incorrect!";
            //go to login page
            header("Location: ../../View/account/login.php");
        }
    }
}
