<?php

session_start();

$id = $_GET["id"];


if (isset($_GET["page"])) {
    $page = $_GET["page"];
    echo "page";
} else {
    $page = 1;

}
$rowLimits = 5;
$pageStart = ($page - 1) * $rowLimits;
$pageStart = ($pageStart < 0) ? 1 : $pageStart;
if (!isset($id)) {
    header("Location: ../../View/errors/error.php");
} else {

    include "../../Model/model.php";

    $sql = $pdo->prepare(
        " SELECT * , `t_orders`.`create_date` as create_date FROM `t_c_payment`
        INNER JOIN `t_orderdetails` ON `t_c_payment`.`order_id` = `t_orderdetails`.`order_id`
        INNER JOIN `m_products` ON `t_orderdetails`.`p_id` = `m_products`.`id`
        INNER JOIN `t_orders` ON `t_c_payment`.`order_id` = `t_orders`.`id`
        INNER JOIN `m_suppliers` ON `t_c_payment`.`sup_id` = `m_suppliers`.`id`
        WHERE `t_c_payment`.`cus_id` = :id;
        "
    );

    $sql->bindValue(":id", $id);

    $sql->execute();

    $orderlists = $sql->fetchAll(PDO::FETCH_ASSOC);





    // normal fetch
    $sql = $pdo->prepare(
        "  SELECT * , `t_orders`.`create_date` as create_date FROM `t_c_payment`
        INNER JOIN `t_orderdetails` ON `t_c_payment`.`order_id` = `t_orderdetails`.`order_id`
        INNER JOIN `m_products` ON `t_orderdetails`.`p_id` = `m_products`.`id`
        INNER JOIN `t_orders` ON `t_c_payment`.`order_id` = `t_orders`.`id`
        INNER JOIN `m_suppliers` ON `t_c_payment`.`sup_id` = `m_suppliers`.`id`
        WHERE `t_c_payment`.`cus_id` = :id LIMIT $pageStart, $rowLimits
    "
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $_SESSION['orderlists'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    $pageList = ceil(count($orderlists) / $rowLimits);



}
