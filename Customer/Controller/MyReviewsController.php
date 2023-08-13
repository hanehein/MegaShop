<?php

session_start();

$id = $_GET["id"];

print_r($id);

if (!isset($id)) {
    header("Location: ../../View/errors/error.php");
} else {

    echo "ok";
    include "../Model/model.php";

    $sql = $pdo->prepare(
        " SELECT * FROM `t_product_reviews` 
        INNER JOIN `m_customers` ON `t_product_reviews`.`customer_id` = `m_customers`.id
        INNER JOIN `m_products` ON `t_product_reviews`.`product_id` = `m_products`.id
        WHERE `t_product_reviews`.`customer_id` = :id;
        "
    );

    $sql->bindValue(":id", $id);

    $sql->execute();

    $_SESSION['profileEdit'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../View/profile/myReviews.php");
}
