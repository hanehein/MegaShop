<?php

// check post method or get method
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

// check from stage is  login page or not 
if (!isset($_POST["from_signup"])) {
    header("Location: ../../View/errors/error.php");
}

session_start();

$shop_name = $_POST["shop_name"];
$supplier_name = $_POST["supplier_name"];
$email = $_POST["email"];
$shop_address = $_POST["shop_address"];
$phone = $_POST["phone"];

//Db Connection
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_suppliers
    WHERE sup_email = :email"
);

$sql->bindValue(":email", $email);
$sql->execute();
$supplier = $sql->fetchAll(PDO::FETCH_ASSOC);

//check email is already register or not
if(count($supplier) == 0){
    //Db Connection
    include "../../Model/model.php";

    $sql = $pdo->prepare(
        "INSERT INTO m_suppliers (
            sup_name,
            sup_shop_name,
            sup_email,
            sup_phone,
            sup_address
        ) VALUES (
            :sup_name,
            :shop_name,
            :email,
            :phone,
            :address
        )"
    );
    
    $sql->bindValue(":sup_name", $supplier_name);
    $sql->bindValue(":shop_name", $shop_name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":address", $shop_address);
    $sql->execute();

    header("Location: ../../View/account/login.php");
}else{
    $_SESSION["signup_error"] = "Email is already registered!";
    header("Location: ../../View/account/signUp.php");
}