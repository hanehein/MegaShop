<?php

print_r($_POST);

if (count($_POST) == 0) { 
    header("Location: ../../View/adminDashboard/logo.php");
} else {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $profile = $_POST["profile"];


    include '../Model/model.php';

    $sql = $pdo->prepare(
        " UPDATE m_customers SET
         cus_name = :name,
         cus_email = :email,
         cus_address = :address,
         cus_phone = :phone,
         cus_photo = :profile
        WHERE id = :id
        "
    );
    $sql->bindValue(":name",$name);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":address",$address);
    $sql->bindValue(":phone",$phone);
    $sql->bindValue(":profile",$profile);
    $sql->bindValue(":id",$id);
    

    $sql->execute();

    header("Location: ../View/profile/profile.php");
}



?>