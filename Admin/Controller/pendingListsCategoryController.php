<?php

include '../../Model/model.php';

$sql = $pdo->prepare(
    "SELECT * FROM m_products 
    INNER JOiN `m_category`
    ON `m_products`.`p_category` = `m_category`.id
    WHERE `p_approved` = 0;"
);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);



?>