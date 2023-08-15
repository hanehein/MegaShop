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
            sup_email,
            sup_address,
            sup_phone,
            bank_account,
            sup_shop_name,
            region_id,
            township_id,
            create_date
        ) VALUES (
            :sup_name,
            :email,
            :township,
            :address,
            :phone,
            :bank_acc,
            :shop_name,
            :region_id,
            :township_id,
            :creat_date
        )"
    );
    
    $sql->bindValue(":shop_name", $shop_name);
    $sql->bindValue(":sup_name", $sup_name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":region_id", $region);
    $sql->bindValue(":township_id", $township);
    $sql->bindValue(":bank_acc", $bank_acc);
    $sql->bindValue(":address", $shop_address);
    $sql->execute();

    header("Location: ../../View/account/login.php");
}else{
    $_SESSION["signup_error"] = "Email is already registered!";
    header("Location: ../../View/account/signUp1.php");
}