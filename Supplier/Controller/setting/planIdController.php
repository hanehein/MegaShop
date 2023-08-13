
<?php

//DB connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_suppliers WHERE id = :id"
);
$sql->bindValue(":id",12);
$sql->execute();
$sup_plan_id= $sql -> fetchAll(PDO::FETCH_ASSOC);


?>