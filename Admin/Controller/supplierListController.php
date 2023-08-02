<?php 
    ini_set('display_errors', 1);
    include "../../Model/model.php";//path view from approvedlist 
    $sql = $pdo->prepare("
        SELECT * FROM m_suppliers WHERE del_flg = 0;
    ");
    $sql->execute();
    $supLists = $sql->fetchAll(PDO::FETCH_ASSOC);










?>