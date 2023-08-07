
<?php
session_start();
$package_id = $_GET["plan_id"];
//DB connection
include "../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_package WHERE del_flg=0 AND  id =  :id;"
);
$sql->bindValue(":id",$package_id);
$sql->execute();
$_SESSION["plan"] = $sql -> fetchAll(PDO::FETCH_ASSOC);
print_r($_SESSION["plan"]);
echo "<pre>";
header("Location: ../View/profile/payment.php");

?>