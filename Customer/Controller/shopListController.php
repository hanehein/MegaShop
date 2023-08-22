<?php
ini_set('display_errors', 1);

include "../../Model/model.php";
$sql = $pdo->prepare("
    SELECT *, m_suppliers.id as supplierId, sup_shop_name as shopName, shop_photo_path as shopPhoto
    FROM m_suppliers
    WHERE del_flg = 0
    AND sup_approve = 1
    AND shop_photo_path IS NOT NULL
    ORDER BY create_date ASC;
        ");
// $sql->bindValue(":id",$id);
$sql->execute();
$shopLists = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql2 = $pdo->prepare("
    SELECT *, m_suppliers.id as supplierId, sup_shop_name as shopName, shop_photo_path as shopPhoto
    FROM m_suppliers
    WHERE del_flg = 0
    AND sup_approve = 1
    ORDER BY create_date ASC;
        ");
// $sql->bindValue(":id",$id);
$sql2->execute();
$shopName = $sql2->fetchAll(PDO::FETCH_ASSOC);

