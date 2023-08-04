
<?php

//DB connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_package WHERE del_flg=0"
);
$sql->execute();
$package = $sql -> fetchAll(PDO::FETCH_ASSOC);


?>