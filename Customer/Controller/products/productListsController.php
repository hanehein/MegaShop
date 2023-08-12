<?php

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_products
    WHERE del_flg = 0 
    AND p_approved = 1"
);
$sql->execute();
$productLists = $sql->fetchAll(PDO::FETCH_ASSOC);


?>