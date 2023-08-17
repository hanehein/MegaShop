<?php
session_start();
ini_set('display_errors', 1);
// include "./middleware/loginCheck.php";
// admin
$adminName =  $_SESSION["adminName"];
include "../Model/model.php";
$sql = $pdo->prepare("
        SELECT * FROM m_admin WHERE admin_name=:name
    ");
$sql->bindValue(":name", $adminName);
$sql->execute();
$_SESSION["admin"] =  $sql->fetchAll(PDO::FETCH_ASSOC);
// suppliers
$sql2 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(id) FROM m_suppliers WHERE del_flg = 0 AND sup_approve = 1) AS total_suppliers,
    (SELECT COUNT(pack_id) FROM m_suppliers WHERE del_flg = 0 AND sup_approve = 1 AND pack_id = 2) AS total_gold,
    (SELECT COUNT(pack_id) FROM m_suppliers WHERE del_flg = 0 AND sup_approve = 1 AND pack_id = 1) AS total_silver,
    (SELECT COUNT(pack_id) FROM m_suppliers WHERE del_flg = 0 AND sup_approve = 1 AND pack_id = 0) AS total_basic
    FROM m_suppliers
    WHERE del_flg = 0 AND sup_approve = 1;
");
$sql2->execute();
$_SESSION["totalSuppliers"] = $sql2->fetchAll(PDO::FETCH_ASSOC);
// customers
$sql3 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(id) FROM m_customers WHERE del_flg = 0 AND cus_registered = 1) AS total_customers
    FROM m_customers
    WHERE del_flg = 0 AND cus_registered = 1;
");
$sql3->execute();
$_SESSION["totalCustomers"] = $sql3->fetchAll(PDO::FETCH_ASSOC);
//products
$sql4 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(id) FROM m_products WHERE del_flg = 0 AND p_approved = 1) AS total_products
    FROM m_products
    WHERE del_flg = 0 AND p_approved = 1;
");
$sql4->execute();
$_SESSION["totalProducts"] = $sql4->fetchAll(PDO::FETCH_ASSOC);
//brand
$sql5 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(DISTINCT brand_name) FROM m_brand WHERE del_flg = 0) AS total_brand
    FROM m_brand
    WHERE del_flg = 0;
");
$sql5->execute();
$_SESSION["totalBrand"] = $sql5->fetchAll(PDO::FETCH_ASSOC);
//category
$sql6 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(DISTINCT cat_name) FROM m_category WHERE del_flg = 0) AS total_category
    FROM m_category
    WHERE del_flg = 0;
");
$sql6->execute();
$_SESSION["totalCategory"] = $sql6->fetchAll(PDO::FETCH_ASSOC);


header("Location: ../View/adminDashboard/adminDashboard.php");




// SELECT *, COUNT(m_suppliers.id) AS total_suppliers
//         FROM m_admin
//         LEFT JOIN m_suppliers ON m_admin.admin_id = m_suppliers.admin_id_fk 
//         WHERE admin_name=:name AND m_supplier.del_flg = 0 AND m_suppliers.sup_approve = 1
// SELECT *, COUNT(m_suppliers.id) AS total_suppliers 
// FROM m_suppliers WHERE m_suppliers.del_flg = 0 AND sup_approve = 1