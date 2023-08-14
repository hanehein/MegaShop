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

    include "../Model/model.php";

    $sql = $pdo->prepare(
        " SELECT * FROM `t_orders` 
        INNER JOIN `m_customers` ON `t_orders`.`cus_id` = `m_customers`.id
        INNER JOIN `t_c_payment` ON `t_orders`.`cpay_id` = `t_c_payment`.id
        INNER JOIN `m_suppliers` ON `t_orders`.`sup_id` = `m_suppliers`.id
        WHERE `t_orders`.`cus_id` = :id;
        "
    );

    $sql->bindValue(":id", $id);

    $sql->execute();

    $_SESSION['profileEdit'] = $sql->fetchAll(PDO::FETCH_ASSOC);





    // normal fetch
    $sql = $pdo->prepare(
        "  SELECT * FROM `t_orders` 
        INNER JOIN `m_customers` ON `t_orders`.`cus_id` = `m_customers`.id
        INNER JOIN `t_c_payment` ON `t_orders`.`cpay_id` = `t_c_payment`.id
        INNER JOIN `m_suppliers` ON `t_orders`.`sup_id` = `m_suppliers`.id
        WHERE `t_orders`.`cus_id` = :id LIMIT $pageStart, $rowLimits
    "
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $orderlists = $sql->fetchAll(PDO::FETCH_ASSOC);

    $pageList = ceil(count( $_SESSION['profileEdit']) / $rowLimits);

    print_r($pageList);

    header("Location: ../View/profile/orderHistory.php");
}
