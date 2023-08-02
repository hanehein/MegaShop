<?php
session_start();
//DB connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_suppliers WHERE del_flg=0"
);
$sql->execute();//real sql run
$_SESSION["profile"] = $sql->fetchAll(PDO::FETCH_ASSOC);
header("Location: ../../../View/profile/supprofile.php");
?>