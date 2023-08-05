<?php 

session_start();

$id = $_GET["id"];

if (!isset($id)) {
    header ("Location: ../../../../View/productlists/categoryControl.php");
} else{
    include "../Model/model.php";

    $sql =$pdo->prepare(
        " SELECT * FROM m_category WHERE id = :id
        "
    );

    $sql->bindValue(":id", $id);

    $sql->execute();

    $_SESSION['categoryedit'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../View/productlists/categoryEdit.php");

}
