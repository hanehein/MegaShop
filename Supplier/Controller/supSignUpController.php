<?php
include "./common/passwordHash.php";
ini_set('display_errors', 1);
session_start();

if (isset($_POST["signup"])) {
    $supplierName = $_POST["sup_name"];
    $shopName = $_POST["shop_name"];
    $email = $_POST["sup_email"];
    $township = $_POST["township"];
    $phone = $_POST["phone"];
    $shopAddress = $_POST["shop_address"];
    $bankAcc = $_POST["bank_acc"];


    //generate password

    $password = getpwd(8);
    echo ($password);



    include "../Model/model.php";
    $sql = $pdo->prepare("
        INSERT INTO m_suppliers
        (
            sup_name,
            sup_email,
            sup_password,
            township,
            sup_address,
            sup_phone,
            bank_account,
            sup_shop_name,
            create_date
        ) 
        VALUES
        (
            :name,
            :email,
            :password,
            :township,
            :address,
            :phone,
            :bankAcc,
            :shopName,
            :createdDate
        )
    ");

    $sql->bindValue(":name", $supplierName);
    $sql->bindValue(":shopName", $shopName);
    $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
    $sql->bindValue(":email", $email);
    $sql->bindValue(":township", $township);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":address", $shopAddress);
    $sql->bindValue(":bankAcc", $bankAcc);
    $sql->bindValue(":createdDate", date("Y-m-d"));
    $sql->execute();

    header("Location: ../View/profile/login.php");
}
