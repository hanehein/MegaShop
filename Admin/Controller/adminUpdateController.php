<?php 
ini_set('display_errors', 1);
session_start();
print_r($_POST);//ok here
// echo "--------";

if(count($_POST) == 0){
    header ("Location: ../View/errors/error.php");
} else {
    $id = $_POST["id"];
    $adminName = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $position = $_POST["bio"];
    $image = $_POST["image"];

    include "../Model/model.php";
    $sql = $pdo->prepare("
        UPDATE m_admin SET 
        admin_email = :email,
        admin_password = :password,
        admin_name = :name,
        admin_bio = :position,
        phone = :phone,
        image = :img
        where admin_id = :id
    ");
    $sql->bindValue(":id",$id);
    $sql->bindValue(":name",$adminName);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":password", $password);
    $sql->bindValue(":position",$position);
    $sql->bindValue(":img",$image);
    $sql->bindValue(":phone",$phone);
    $sql->execute();
    header("Location: ../View/adminProfile/adminLogin.php");
}