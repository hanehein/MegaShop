<?php
//DB connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_suppliers WHERE del_flg=0"
);
$sql->execute();
$data = $sql -> fetchAll(PDO::FETCH_ASSOC);
print_r($data);
?>