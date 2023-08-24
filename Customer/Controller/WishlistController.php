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
    $_SESSION["id"] = $id;
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

    $wishlist = $sql->fetchAll(PDO::FETCH_ASSOC);

    // normal fetch
    $sql = $pdo->prepare(
        "  SELECT * , `m_wishlist`.`del_flg` as`del_flg`
        FROM `m_wishlist` 
                INNER JOIN `m_customers` ON `m_wishlist`.`c_id` = `m_customers`.`id`
                INNER JOIN `m_products` ON `m_wishlist`.`product_id` = `m_products`.`id`
                WHERE  `m_wishlist`.`del_flg` = 0 AND `c_id` = :id LIMIT $pageStart, $rowLimits
    "
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $_SESSION['profileEdit'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    $pageList = ceil(count($wishlist) / $rowLimits);

}
