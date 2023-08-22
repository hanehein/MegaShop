<?php 
session_start();
    ini_set('display_errors', 1);
    include "../../Model/model.php";//path view from customerRegisterList 
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }else {
        $page = 1;
    }

    $rowLimits = 5; 
    $pageStart = ($page - 1) * $rowLimits;
    $pageStart = ($pageStart < 0)? 1 : $pageStart; 


    //all data fetch
    $sql = $pdo->prepare("
        SELECT * FROM m_customers 
        JOIN m_regions ON m_customers.region_id = m_regions.id 
        JOIN m_townships ON m_customers.township_id = m_townships.id 
        WHERE m_customers.del_flg = 0;
    ");
    $sql->execute();
    $totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);



    //normal fetch
    $sql = $pdo->prepare("
        SELECT *, 
        m_customers.id as customer_id, 
        m_regions.name as region_name,
        m_regions.id as region_real_id, 
        m_townships.name as township_name,
        m_townships.id as township_real_id, 
        m_townships.region_id as township_region_id 
        FROM m_customers 
        JOIN m_regions ON m_customers.region_id = m_regions.id
        JOIN m_townships ON m_customers.township_id = m_townships.id  
        WHERE m_customers.del_flg = 0 LIMIT $pageStart, $rowLimits
    ");
    $sql->execute();
    $customerLists = $sql->fetchAll(PDO::FETCH_ASSOC);

    $pageList =ceil(count($totalRecord)/ $rowLimits);
    
    // print_r($customerLists);
    // 1 page 10 //0,10  
    //0,10 replace with rowLimits
    //10,10
    //20,10
    //(page -1 ) * rowLimit
?>