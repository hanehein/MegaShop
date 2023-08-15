<?php

// check post method or get method
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

// check from stage is  login page or not 
if (!isset($_POST["from_signup"])) {
    header("Location: ../../View/errors/error.php");
}

$shop_name = $_POST["shop_name"];
$sup_name = $_POST["sup_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$region = $_POST["region"];
$township = $_POST["township"];
$bank_acc = $_POST["bank_acc"];
$shop_address = $_POST["shop_address"];
$create_date = date("Y-m-d");

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
            bank_account,
            region_id,
            township_id,
            sup_address,
            create_date
        ) VALUES (
            :sup_name,
            :shop_name,
            :sup_email,
            :sup_phone,
            :bank_account,
            :region,
            :township,
            :address,
            :create_date
        )"
    );

    $sql->bindValue(":sup_name", $sup_name);
    $sql->bindValue(":shop_name", $shop_name);
    $sql->bindValue(":sup_email",$email);
    $sql->bindValue(":sup_phone", $phone);
    $sql->bindValue(":bank_account", $bank_acc);
    $sql->bindValue(":region", $region);
    $sql->bindValue(":township", $township);
    $sql->bindValue(":address", $shop_address);
    $sql->bindValue(":create_date", $create_date);
    $sql->execute();
    header("Location: ../../View/account/login.php");
}else{
    session_start();
    $_SESSION["signup_error"] = "Email is already registered!";
    header("Location: ../../View/account/signUp.php");
}