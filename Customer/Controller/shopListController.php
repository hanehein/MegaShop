<?php
ini_set('display_errors', 1);
// session_start();
// print_r($_GET);
// $id = $_GET["id"];


include "../../Model/model.php";
$sql = $pdo->prepare("
    SELECT m_suppliers.id as supplierId, sup_shop_name as shopName, shop_photo_path as shopPhoto
    FROM m_suppliers
    WHERE del_flg = 0
    AND sup_approve = 1
    AND shop_photo_path IS NOT NULL
    ORDER BY create_date ASC;
        ");
// $sql->bindValue(":id",$id);
$sql->execute();
$shopLists = $sql->fetchAll(PDO::FETCH_ASSOC);
