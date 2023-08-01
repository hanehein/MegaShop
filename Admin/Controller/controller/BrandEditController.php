<?php 

session_start();

$id = $_GET["id"];

if (!isset($id)) {
    header ("Location: ../../../../View/productlists/brandControl.php");
} else{
    include "../../Model/model.php";

    $sql =$pdo->prepare(
        " SELECT * FROM m_brand WHERE id = :id
        "
    );

    $sql->bindValue(":id", $id);

    $sql->execute();

    $_SESSION['brandedit'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../../View/productlists/brandEdit.php");




}
