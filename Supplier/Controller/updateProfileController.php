<?php
ini_set('display_errors',1);
if(count($_POST)==0){
    header("Location: ../../../View/errors/error.php");
}else{
    $id = $_POST["id"];
    $sup_name = $_POST["sup_name"];
    $sup_email = $_POST["sup_email"];
    $password = $_POST["password"];
    $sup_phone = $_POST["sup_phone"];
    $sup_shop_photo = $_POST["sup_shop_photo"];
    $sup_shop_name = $_POST["sup_shop_name"];
    
    
    include "../Model/model.php";
    $sql = $pdo ->prepare(
        "UPDATE m_suppliers WHERE sup_name SET
        sup_name = :sup_name,
        sup_email = :sup_email,
        password = :password,
        sup_phone = :sup_phone,
        sup_shop_photo = :sup_shop_photo,
        sup_shop_name = :sup_shop_name
        WHERE id = :id
        "
        );
        $sql->bindValue(":sup_name", $sup_name);
        $sql->bindValue(":sup_email", $sup_email);
        $sql->bindValue(":password", $password);
        $sql->bindValue(":sup_phone", $sup_phone);
        $sql->bindValue(":sup_shop_photo", $sup_shop_photo);
        $sql->bindValue(":sup_shop_name", $sup_shop_name);
        $sql->execute();
        $_SESSION["profile"] = $sql->fetchAll(PDO::FETCH_ASSOC);
        header("Location: ../../supplierProfileController.php");
        
}
?>