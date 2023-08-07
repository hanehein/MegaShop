<?php
ini_set('display_errors', 1);

    include "../../Model/model.php";//path view from subscriptionIncome
    $sql = $pdo->prepare("
        SELECT * FROM m_suppliers WHERE del_flg = 0 AND sup_approve = 1;
    ");
    $sql->execute();
    $incomeLists = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($incomeLists);

