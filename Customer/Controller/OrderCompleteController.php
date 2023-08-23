<?php


$p_id = $_SESSION["product"];
$order = $_SESSION["order"];


if (!isset($order)) {
    echo "error";
} else {
    include "../../Model/model.php";

    $sql = $pdo->prepare(
        "SELECT * FROM `t_orders` WHERE `order_id` = :order;"
    );

    $sql->bindValue(":order",$order);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
}
