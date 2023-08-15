<?php
ini_set('display_errors',1);
if(count($_POST)==0){
    header("Location:  ../../View/errors/error.php");
   
}else{
    $id = $_POST["id"];
    $sup_name = $_POST["sup_name"];
    $sup_email = $_POST["sup_email"];
    $password = $_POST["sup_password"];
    $sup_phone = $_POST["sup_phone"];
    $sup_shop_photo = $_POST["image"];
    $sup_shop_name = $_POST["sup_shop_name"];
    
    
    include "../../Model/model.php";
    $sql = $pdo ->prepare(
        "UPDATE m_suppliers  SET
        sup_name = :sup_name,
        sup_email = :sup_email,
        sup_password = :sup_password,
        sup_phone = :sup_phone,
        sup_shop_name = :sup_shop_name,
        sup_shop_photo = :sup_shop_photo
        
        WHERE id = :id
        "
        );
        $sql->bindValue(":id", $id);
        $sql->bindValue(":sup_name", $sup_name);
        $sql->bindValue(":sup_email", $sup_email);
        $sql->bindValue(":sup_password",password_hash($password,PASSWORD_DEFAULT));
        $sql->bindValue(":sup_phone", $sup_phone);
        $sql->bindValue(":sup_shop_name", $sup_shop_name);
        $sql->bindValue(":sup_shop_photo", $sup_shop_photo);
       
        $sql->execute();
        $profile = $sql->fetchAll(PDO::FETCH_ASSOC);
        
       header("Location: ../../View/profile/supProfile.php");
        
}
