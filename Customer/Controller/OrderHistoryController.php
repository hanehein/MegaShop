<?php 

session_start();

$id = $_GET["id"];

print_r($id);

if (!isset($id)) {

    header("Location: ../../View/errors/error.php");
} else{

    echo "ok";
    include "../Model/model.php";

    $sql =$pdo->prepare(
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

    header("Location: ../View/profile/orderHistory.php");


}
