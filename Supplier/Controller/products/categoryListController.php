<?php

//connect database
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_category"
);

$sql->execute();
$categories = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($categories);
?>