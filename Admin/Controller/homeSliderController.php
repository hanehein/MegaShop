<?php 

include '../../Model/model.php';

$sql = $pdo->prepare(
    "SELECT * FROM m_herosection"
);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

?>