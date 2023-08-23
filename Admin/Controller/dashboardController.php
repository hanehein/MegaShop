<?php
session_start();
ini_set('display_errors', 1);
include "../../Controller/middleware/loginCheck.php";
// admin
$adminId = $_SESSION["adminId"];
$adminName =  $_SESSION["adminName"];
if (isset($_SESSION["adminId"])) {

    include "../../Model/model.php";
    $sql = $pdo->prepare("
        SELECT * FROM m_admin WHERE admin_name=:name
    ");
    $sql->bindValue(":name", $adminName);
    $sql->execute();
    $admin =  $sql->fetchAll(PDO::FETCH_ASSOC);
    // suppliers
    $sql2 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(id) FROM m_suppliers WHERE del_flg = 0 AND sup_approve = 1) AS total_suppliers
    FROM m_suppliers
    WHERE del_flg = 0 AND sup_approve = 1;
");
    $sql2->execute();
    $supplier = $sql2->fetchAll(PDO::FETCH_ASSOC);
    //Pending Suppliers
    $sqlPending = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(id) FROM m_suppliers WHERE del_flg = 0 AND sup_approve = 0) AS pending_suppliers
    FROM m_suppliers
    WHERE del_flg = 0 AND sup_approve = 0;
");
    $sqlPending->execute();
    $pendingSuppliers = $sqlPending->fetchAll(PDO::FETCH_ASSOC);
    // customers
    $sql3 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(id) FROM m_customers WHERE del_flg = 0) AS total_customers
    FROM m_customers
    WHERE del_flg = 0;
");
    $sql3->execute();
    $customer = $sql3->fetchAll(PDO::FETCH_ASSOC);
    //products
    $sql4 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(id) FROM m_products WHERE del_flg = 0 AND p_approved = 1) AS total_products
    FROM m_products
    WHERE del_flg = 0 AND p_approved = 1;
");
    $sql4->execute();
    $product = $sql4->fetchAll(PDO::FETCH_ASSOC);
    //pending products
    $sql4PendingProduct = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(id) FROM m_products WHERE del_flg = 0 AND p_approved = 0) AS pending_products
    FROM m_products
    WHERE del_flg = 0 AND p_approved = 0;
");
    $sql4PendingProduct->execute();
    $pendingProducts = $sql4PendingProduct->fetchAll(PDO::FETCH_ASSOC);
    //brand
    $sql5 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(DISTINCT band_name) FROM m_brand WHERE del_flg = 0) AS total_brand
    FROM m_brand
    WHERE del_flg = 0;
");
    $sql5->execute();
    $brand = $sql5->fetchAll(PDO::FETCH_ASSOC);
    //category
    $sql6 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(DISTINCT cat_name) FROM m_category WHERE del_flg = 0) AS total_category
    FROM m_category
    WHERE del_flg = 0;
");
    $sql6->execute();
    $category = $sql6->fetchAll(PDO::FETCH_ASSOC);
    //order
    $sql9 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(DISTINCT id) FROM t_orders WHERE del_flg = 0) AS total_orders
    FROM t_orders
    WHERE del_flg = 0;
");
    $sql9->execute();
    $order = $sql9->fetchAll(PDO::FETCH_ASSOC);
    //rating & review
    $sql10 = $pdo->prepare("
    SELECT *,
    (SELECT COUNT(DISTINCT id) FROM t_customer_feedbacks WHERE del_flg = 0) AS total_feedbacks
    FROM t_customer_feedbacks
    WHERE del_flg = 0;
");
    $sql10->execute();
    $feedback = $sql10->fetchAll(PDO::FETCH_ASSOC);
    //chart
    $sql7 = $pdo->prepare("
    SELECT COUNT(id) AS countPerson, create_date FROM `m_customers` GROUP BY create_date;
");
    $sql7->execute();
    $chart = $sql7->fetchAll(PDO::FETCH_ASSOC);
    //plan 
    $sql8 = $pdo->prepare("
    SELECT COUNT(id) AS plan, pack_id FROM `m_suppliers` WHERE sup_approve = 1 AND del_flg = 0 GROUP BY pack_id;
");
    $sql8->execute();
    $plan = $sql8->fetchAll(PDO::FETCH_ASSOC);
    //order_region donut chart
    $sql11 = $pdo->prepare("
    SELECT
    m_regions.name AS region_name,
    COUNT(t_orders.id) AS order_count
    FROM
        t_orders
    JOIN
        m_regions ON t_orders.cus_state = m_regions.id
    GROUP BY
        m_regions.name
    ORDER BY
        order_count DESC
    LIMIT 5;
");
    $sql11->execute();
    $region = $sql11->fetchAll(PDO::FETCH_ASSOC);
};
//sells
$sql12 = $pdo->prepare("
    SELECT SUM(total_amount) AS total_order_amount
    FROM t_orders;
");
$sql12->execute();
$totalSale = $sql12->fetchAll(PDO::FETCH_ASSOC);
