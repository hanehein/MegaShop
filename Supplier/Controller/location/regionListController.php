<?php 

//login check

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_regions"
);

$sql->execute();
$regions = $sql->fetchAll(PDO::FETCH_ASSOC);

?>