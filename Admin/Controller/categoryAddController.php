<?php

print_r($_POST);

if (count($_POST) == 0) {
    
    header("Location: ../View/productlists/categoryAdd.php");
} else {
    $cat = $_POST["category"];
    $date = $_POST["date"];

    include '../Model/model.php';

    $sql = $pdo->prepare(
        " INSERT INTO m_category
        (
           cat_name,
            create_date
        )
        VALUES 
        (
            :cat,
            :date
        )
        "
    );
    $sql->bindValue(":cat",$cat);
    $sql->bindValue(":date",$date);
    $sql->execute();

    header("Location: ../View/productlists/CategoryControl.php");
}


?>