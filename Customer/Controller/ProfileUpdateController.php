<?php


if (count($_POST) == 0) { 
    header("Location: ../../View/adminDashboard/logo.php");
} else {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $region = $_POST["region"];
    $phone = $_POST["phone"];

    //get photo
    $profile = $_FILES["profile"]["name"];
    $profiletmp = $_FILES["profile"]["tmp_name"];


    include '../Model/model.php';
    if (move_uploaded_file($profiletmp, "../../Storage/profile/" .$profile)) {
        $sql = $pdo->prepare(
            " UPDATE m_customers SET
             cus_name = :name,
             cus_email = :email,
             cus_address = :region,
             cus_phone = :phone,
             cus_photo = :profile
            WHERE id = :id
            "
        );
        $sql->bindValue(":name",$name);
        $sql->bindValue(":email",$email);
        $sql->bindValue(":region",$region);
        $sql->bindValue(":phone",$phone);
        $sql->bindValue(":profile","../../Storage/profile/" . $profile);
        $sql->bindValue(":id",$id);
        
    
        $sql->execute();
    
        header("Location: ../View/profile/profile.php");
    } else {
        header("Location: ../View/errors/error.php");
    }
    
}



?>