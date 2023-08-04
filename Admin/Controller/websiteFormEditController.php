<?php

print_r($_POST);

if (count($_POST) == 0) { 
    header("Location: ../../View/adminDashboard/logo.php");
} else {
    
    $logo = $_POST["logo"];
    $web = $_POST["webname"];
    $slogan = $_POST["slogan"];


    include '../../Model/model.php';

    $sql = $pdo->prepare(
        " UPDATE m_website_form SET
         logo_photo = :logo,
         web_name = :webname,
         slogan = :slogan
        WHERE id = 1
        "
    );
    $sql->bindValue(":logo",$logo);
    $sql->bindValue(":webname",$web);
    $sql->bindValue(":slogan",$slogan);

    $sql->execute();

    header("Location: ../../View/adminDashboard/websiteForm.php");
}



?>