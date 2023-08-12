<?php 
    ini_set('display_errors', 1);
    include "../Model/model.php";
    $shopName = $_POST["searchShop"];
    $sql = $pdo->prepare("
        SELECT * FROM m_suppliers WHERE del_flg = 0 AND sup_approve = 1 AND sup_shop_name LIKE :search
    ");
    $sql->bindValue(":search",'%'.$shopName.'%');
    $sql->execute();
    $supLists = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($supLists);
?>