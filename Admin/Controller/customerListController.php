<?php 
session_start();
    ini_set('display_errors', 1);
    include "../../Model/model.php";//path view from customerRegisterList 
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
        SELECT * FROM m_customers WHERE del_flg = 0 AND cus_registered = 1
    ");
    $sql->execute();
    $totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);



    //normal fetch
    $sql = $pdo->prepare("
        SELECT * FROM m_customers WHERE del_flg = 0 AND cus_registered = 1 LIMIT $pageStart, $rowLimits
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