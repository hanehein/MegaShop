<?php 
 ini_set('display_errors', 1);
    session_start();
    // print_r($_GET);
    $id = $_GET["id"];

    if(!isset($id)){
        header("Location: ../View/errors/error.php");
    } else {
        include "../Model/model.php";
        $sql = $pdo->prepare("
            SELECT *, m_suppliers.id as supplierId FROM m_suppliers
            JOIN m_regions ON m_suppliers.region_id = m_regions.id 
            WHERE m_suppliers.id = :id;
        ");
        $sql->bindValue(":id",$id);
        $sql->execute();
        $_SESSION["supEdit"] = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        header("Location: ../View/supplierList/supplierEdit.php");
    }
