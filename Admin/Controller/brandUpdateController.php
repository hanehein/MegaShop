<?php

print_r($_POST);

if (count($_POST) == 0) { 
    header("Location: ../../View/productlists/brandEdit.php");
} else {
    $id = $_POST["id"];
    $brand = $_POST["brand"];
    $date = $_POST["date"];

    include '../Model/model.php';

    $sql = $pdo->prepare(
        " UPDATE m_brand SET
         band_name = :brand,
         update_date = :date
        WHERE id = :id
        "
    );
    $sql->bindValue(":brand",$brand);
    $sql->bindValue(":date",$date);
    $sql->bindValue(":id",$id);
    $sql->execute();

    header("Location: ../View/productlists/brandControl.php");
}


?>