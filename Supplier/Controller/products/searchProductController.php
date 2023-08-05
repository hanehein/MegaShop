<?php 
//chech with post or get
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

//check from stage is addproduct page or not
if (!isset($_POST["from_searchproduct"])) {
    header("Location: ../../View/errors/error.php");
}

$searchValue = $_POST["searchValue"];
//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
    m_products.id AS id,
    m_products.p_name AS name, 
    m_products.p_photo1 AS photo,
    m_category.cat_name AS category, 
    m_brand.band_name AS brand, 
    m_products.p_discount AS discount, 
    m_products.p_buy_price AS buyprice, 
    m_products.p_sell_price AS sellprice
    FROM m_products
    INNER JOIN m_category ON m_products.p_category = m_category.id
    INNER JOIN m_brand ON m_products.p_brand = m_brand.id
    WHERE m_products.p_name LIKE :search
    AND m_products.del_flg = 0;
    "
);
$sql->bindValue(":search","%$searchValue%");
$sql->execute();
$searchProductLists = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($searchProductLists);
?>