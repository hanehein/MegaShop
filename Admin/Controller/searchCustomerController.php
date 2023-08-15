<?php 
session_start();
ini_set('display_errors', 1);
    include "../Model/model.php";

    $searchName = $_POST["searchText"];
    
    $sql = $pdo->prepare("
        SELECT * FROM m_customers WHERE del_flg = 0 AND cus_registered = 1 AND cus_name LIKE :search
    ");
    $sql->bindValue(":search",'%'.$searchName.'%');
    $sql->execute();

    $customerLists = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($customerLists);
