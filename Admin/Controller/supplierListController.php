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
//all data fetch
$sql = $pdo->prepare("
    SELECT * FROM m_suppliers 
    JOIN m_regions ON m_suppliers.region_id = m_regions.id 
    WHERE m_suppliers.del_flg = 0 AND sup_approve = 1
    ");
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);



//normal fetch
$sql = $pdo->prepare("
        SELECT *, m_suppliers.id as supplierId FROM m_suppliers 
        JOIN m_regions ON m_suppliers.region_id = m_regions.id
        WHERE m_suppliers.del_flg = 0 AND sup_approve = 1 LIMIT $pageStart, $rowLimits
    ");
$sql->execute();
$supLists = $sql->fetchAll(PDO::FETCH_ASSOC);

$pageList = ceil(count($totalRecord) / $rowLimits);
