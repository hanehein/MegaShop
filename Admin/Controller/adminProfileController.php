<?php
ini_set('display_errors', 1);
include "../../Model/model.php"; //
$sql = $pdo->prepare("
        SELECT * FROM m_admin WHERE del_flg = 0;
    ");
$sql->execute();
$adminProfile = $sql->fetchAll(PDO::FETCH_ASSOC);
