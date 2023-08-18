<?php
ini_set('display_errors', 1);
include "../../Model/model.php"; //path view from approvedlist
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$rowLimits = 5;
$pageStart = ($page - 1) * $rowLimits;
$pageStart = ($pageStart < 0) ? 1 : $pageStart;

$sql = $pdo->prepare(
    "SELECT * FROM `t_orders` 
     INNER JOIN `m_customers` ON `t_orders`.`cus_id` = `m_customers`.id
     INNER JOIN `t_c_payment` ON `t_orders`.`cpay_id` = `t_c_payment`.id
     INNER JOIN `m_suppliers` ON `t_orders`.`sup_id` = `m_suppliers`.id
     "
);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT * FROM `t_orders` 
    INNER JOIN `m_customers` ON `t_orders`.`cus_id` = `m_customers`.id
    INNER JOIN `t_c_payment` ON `t_orders`.`cpay_id` = `t_c_payment`.id
    INNER JOIN `m_suppliers` ON `t_orders`.`sup_id` = `m_suppliers`.id LIMIT $pageStart, $rowLimits
    ");
$sql->execute();
$orderlists = $sql->fetchAll(PDO::FETCH_ASSOC);

$pageList = ceil(count($result) / $rowLimits);
