<?php
//  echo ($_POST["region_id"]);
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

$regionID = $_POST["region_id"];
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        * 
    FROM 
        m_townships
    WHERE
        region_id = :region_id"
);

$sql->bindValue(":region_id", $regionID);
$sql->execute();
$townships = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($townships);
?>