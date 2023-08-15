<?php
ini_set('display_errors', 1);


//Direct Access?

if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

//Db Connection
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        * 
    FROM 
        m_customers
    WHERE
        cus_email = :email"
);

$sql->bindValue(":email", $email);
$sql->execute();
$customer = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($customer) != 0){
    session_start();
    $_SESSION["signup_error"] = "This email is already registered";
    header("Location: ../../View/accountInfo/cusSignup.php");

}else{
    

    $sql = $pdo->prepare(
        "INSERT INTO m_customers
            (
                cus_name,
                cus_email,
                cus_phone,
                cus_password
            )
            VALUES 
            (
                :name,
                :email,
                :phone,
                :password
            )
        "
    );

    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
    
    $sql->execute();
    header("Location: ../../View/accountInfo/cusLogin.php");
}