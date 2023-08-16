<?php

session_start();

$order = $_SESSION["order"];
// $product = $_SESSION["p_id"];

print_r($order);

// if (!isset($order)) {
//     echo "error";
// } else {
//     include "../../Model/model.php";

//     $sql = $pdo->prepare(
//         "SELECT * FROM `t_orders`
//         INNER JOIN `t_c_payment`
//         WHERE `t_c_payment`.`order_id` = :order"
//     );

//     $sql->bindValue(":order",$order);
//     print_r($order);

//     $sql->execute();

//     $result = $sql->fetchAll(PDO::FETCH_ASSOC);
// }
