<?php 
    ini_set('display_errors', 1);
    include "../../Model/model.php";//path view from pendinglist 

    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }else {
        $page = 1;
    }
    $rowLimits = 3; 
    $pageStart = ($page - 1) * $rowLimits;
    $pageStart = ($pageStart < 0)? 1 : $pageStart; 
    //all data fetch
    $sql = $pdo->prepare("
        SELECT * FROM m_suppliers 
        JOIN m_regions ON m_suppliers.region_id = m_regions.id 
        WHERE m_suppliers.del_flg = 0 AND sup_approve = 0
    ");
    $sql->execute();
    $totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);




    // normal fetch
    $sql = $pdo->prepare("
        SELECT * FROM m_suppliers 
        JOIN m_regions ON m_suppliers.region_id = m_regions.id 
        WHERE m_suppliers.del_flg = 0 AND sup_approve = 0 LIMIT $pageStart, $rowLimits;
    ");
    $sql->execute();
    $supPendingLists = $sql->fetchAll(PDO::FETCH_ASSOC);
    $pageList =ceil(count($totalRecord)/$rowLimits);
