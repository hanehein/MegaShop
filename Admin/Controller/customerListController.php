<?php 
    ini_set('display_errors', 1);
    include "../../Model/model.php";//path view from customerRegisterList 
    $sql = $pdo->prepare("
        SELECT * FROM m_customers WHERE del_flg = 0 AND cus_registered = 1;
    ");
    $sql->execute();
    $customerLists = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($customerLists);
?>