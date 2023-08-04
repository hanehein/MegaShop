<?php


if (count($_POST) == 0) { 
    header("Location: ../../View/productlists/categoryEdit.php");
} else {
    $id = $_POST["id"];
    $cat = $_POST["cat"];
    $date = $_POST["date"];

    include '../../Model/model.php';

    $sql = $pdo->prepare(
        " UPDATE m_category SET
         cat_name = :cat,
         update_date = :date
        WHERE id = :id
        "
    );
    $sql->bindValue(":cat",$cat);
    $sql->bindValue(":date",$date);
    $sql->bindValue(":id",$id);
    $sql->execute();

    header("Location: ../../View/productlists/categoryControl.php");
}
