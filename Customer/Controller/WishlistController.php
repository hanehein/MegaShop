<?php

session_start();

$id = $_GET["id"];

print_r($id);

if (!isset($id)) {
    header("Location: ../../View/errors/error.php");
} else {
    include "../Model/model.php";

    $sql = $pdo->prepare(
        " SELECT * , `m_wishlist`.`del_flg` as`del_flg`
        FROM `m_wishlist` 
                INNER JOIN `m_customers` ON `m_wishlist`.`c_id` = `m_customers`.`id`
                INNER JOIN `m_products` ON `m_wishlist`.`product_id` = `m_products`.`id`
                WHERE  `m_wishlist`.`del_flg` = 0 AND `c_id` = :id;
        "
    );

    $sql->bindValue(":id", $id);

    $sql->execute();

    $_SESSION['profileEdit'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../View/profile/wishlist.php");
}
