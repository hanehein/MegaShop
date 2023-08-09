<?php

include '../../Model/model.php';

$sql = $pdo->prepare(
    "SELECT * FROM m_customers 
    WHERE id = 1"
);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

?>