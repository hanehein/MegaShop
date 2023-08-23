<?php 

session_start();

$id = $_GET["id"];

print_r($id);

if (!isset($id)) {
    header("Location: ../../View/errors/error.php");
} else{
    include "../Model/model.php";

    $sql =$pdo->prepare(
        " SELECT * FROM `t_follow_stores` 
        INNER JOIN `m_customers` ON `t_follow_stores`.`cus_id` = `m_customers`.`id`
        INNER JOIN `m_suppliers` ON `t_follow_stores`.`sup_id` = `m_suppliers`.`id`
        WHERE cus_id = :id
        "
    );

    $sql->bindValue(":id", $id);

    $sql->execute();

    $_SESSION['profileEdit'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../View/profile/followedStores.php");


}
