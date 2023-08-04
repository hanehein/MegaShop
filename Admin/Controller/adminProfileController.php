<?php
ini_set('display_errors', 1);
include "../../Model/model.php"; //path view from approvedlist 
$sql = $pdo->prepare("
        SELECT * FROM m_admin WHERE del_flg = 0;
    ");
$sql->execute();
$adminProfile = $sql->fetchAll(PDO::FETCH_ASSOC);
