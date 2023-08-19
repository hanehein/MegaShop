<?php

// $p_id = $_GET['id'];
// $cus_id = $_GET['cus_id'];
$p_id = 17;
$cus_id = 1;

include "../../Model/model.php";

$sql = $pdo->prepare(
    " SELECT * FROM `m_products` WHERE id = :id;
        "
);

$sql->bindValue(":id", $p_id);

$sql->execute();

$products = $sql->fetchAll(PDO::FETCH_ASSOC);
