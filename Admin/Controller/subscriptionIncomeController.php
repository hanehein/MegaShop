<?php

ini_set('display_errors', 1);
include "../../Model/model.php"; //path view from adminSubscriptionIncome
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$rowLimits = 5;
$pageStart = ($page - 1) * $rowLimits;
$pageStart = ($pageStart < 0) ? 1 : $pageStart;
//all data fetch
$sql = $pdo->prepare("
    SELECT * FROM m_suppliers 
    INNER JOIN m_package ON m_suppliers.pack_id = m_package.pack_id 
    WHERE m_suppliers.del_flg = 0 AND sup_approve = 1 AND m_suppliers.pack_id != 0
    ");
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);
// Normal fetch
$sql = $pdo->prepare("
        SELECT * FROM m_suppliers 
        INNER JOIN m_package ON m_suppliers.pack_id = m_package.pack_id 
        WHERE m_suppliers.del_flg = 0 AND sup_approve = 1 AND m_suppliers.pack_id != 0 LIMIT $pageStart, $rowLimits
    ");
$sql->execute();
$subIncome = $sql->fetchAll(PDO::FETCH_ASSOC);
$pageList =ceil(count($totalRecord)/$rowLimits);
?>



<!-- SELECT * FROM m_suppliers 
        INNER JOIN t_sup_payment ON m_suppliers.id = t_sup_payment.sup_id
        INNER JOIN m_package ON m_suppliers.pack_id = m_package.pack_id WHERE m_suppliers.del_flg = 0 AND sup_approve = 1  -->