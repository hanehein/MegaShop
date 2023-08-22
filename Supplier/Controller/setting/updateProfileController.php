<?php
if (count($_POST) == 0) {
    header("Location:  ../../View/errors/error.php");
}

if (!isset($_POST["from_update"])) {
    header("Location:  ../../View/errors/error.php");
}

session_start();
$supplier_id = $_SESSION["sup_id"];

$sup_shop_name = $_POST["sup_shop_name"];
$sup_name = $_POST["sup_name"];
$sup_email = $_POST["sup_email"];
$sup_phone = $_POST["sup_phone"];
$shop_photo = NULL;
$supplier_photo = NULL;

// move image
if ($_FILES["shop_photo"]["size"] != 0) {
    $photo_tmp_name = $_FILES["shop_photo"]["tmp_name"];
    $shop_photo = $_FILES["shop_photo"]["name"];
    move_uploaded_file($photo_tmp_name, "../../../Storage/suppliers/$shop_photo");
}

if ($_FILES["sup_photo"]["size"] != 0) {
    $photo_tmp_name = $_FILES["sup_photo"]["tmp_name"];
    $supplier_photo = $_FILES["sup_photo"]["name"];
    move_uploaded_file($photo_tmp_name, "../../../Storage/suppliers/$supplier_photo");
}

include "../../Model/model.php";
$sql = $pdo->prepare(
    "UPDATE 
        m_suppliers  
    SET
        sup_name = :sup_name,
        sup_email = :sup_email,
        sup_phone = :sup_phone,
        sup_shop_name = :sup_shop_name,
        sup_photo = :sup_photo,
        shop_photo_path = :shop_photo
    WHERE 
        id = :id
        "
);
$sql->bindValue(":id", $supplier_id);
$sql->bindValue(":sup_name", $sup_name);
$sql->bindValue(":sup_email", $sup_email);
$sql->bindValue(":sup_phone", $sup_phone);
$sql->bindValue(":sup_shop_name", $sup_shop_name);
$sql->bindValue(":sup_photo", $supplier_photo);
$sql->bindValue(":shop_photo", $shop_photo);
$sql->execute();

header("Location: ../../View/profile/supProfile.php");
