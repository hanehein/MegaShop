<?php

// $p_id = $_GET['id'];
$p_id = 17;

include "../../Model/model.php";

$sql = $pdo->prepare(
    " SELECT * FROM `m_products` WHERE id = :id;
        "
);

$sql->bindValue(":id", $p_id);

$sql->execute();

$products = $sql->fetchAll(PDO::FETCH_ASSOC);
