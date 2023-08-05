<?php

print_r($_POST);

if (count($_POST) == 0) { 
    header("Location: ../../View/adminDashboard/logo.php");
} else {
    
    $img1 = $_POST["img1"];
    $img2 = $_POST["img2"];
    $img3 = $_POST["img3"];


    include '../Model/model.php';

    $sql = $pdo->prepare(
        " UPDATE m_herosection SET
         hero_photo1 = :img1,
         hero_photo2 = :img2,
         hero_photo3 = :img3
        WHERE id = 1
        "
    );
    $sql->bindValue(":hero_photo1",$img1);
    $sql->bindValue(":hero_photo2",$img2);
    $sql->bindValue(":hero_photo3",$img3);

    $sql->execute();

    header("Location: ../View/adminDashboard/homeSlider.php");
}



?>