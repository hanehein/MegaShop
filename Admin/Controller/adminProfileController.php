<?php
// session_start();
ini_set('display_errors', 1);
// include "../../Controller/middleware/loginCheck.php";
// $adminId = $_SESSION["adminId"];

include "../../Model/model.php";
$sql = $pdo->prepare("
        SELECT * FROM m_admin WHERE del_flg = 0;
    ");
$sql->execute();
$adminProfile = $sql->fetchAll(PDO::FETCH_ASSOC);
