<?php

print_r($_POST);

if (count($_POST) == 0) {
    
    header("Location: ../../View/productlists/brandAdd.php");
} else {
    $brand = $_POST["brand"];
    $date = $_POST["date"];

    include '../Model/model.php';

    $sql = $pdo->prepare(
        " INSERT INTO m_brand
        (
            band_name,
            create_date
        )
        VALUES 
        (
            :brand,
            :date
        )
        "
    );
    $sql->bindValue(":brand",$brand);
    $sql->bindValue(":date",$date);
    $sql->execute();

    header("Location: ../View/productlists/brandControl.php");
}


?>