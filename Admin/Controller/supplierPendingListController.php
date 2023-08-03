<?php 
    ini_set('display_errors', 1);
    include "../../Model/model.php";//path view from pendinglist 
    $sql = $pdo->prepare("
        SELECT * FROM m_suppliers WHERE del_flg = 0 AND sup_approve = 0;
    ");
    $sql->execute();
    $supPendingLists = $sql->fetchAll(PDO::FETCH_ASSOC);
?>