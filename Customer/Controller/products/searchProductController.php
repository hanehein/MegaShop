<?php

//chech with post or get
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

//check from stage is addproduct page or not
if (!isset($_POST["from_customer_searchproduct"])) {
    header("Location: ../../View/errors/error.php");
}

$searchValue = $_POST["search_value"];

// connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
        *
    FROM 
        m_products 
    WHERE 
        m_products.p_name LIKE :search 
    AND 
        m_products.p_approved = 1
    AND 
        m_products.del_flg = 0
    LIMIT 0,5
    "
);
$sql->bindValue(":search","%$searchValue%");
$sql->execute();
$searchProductLists = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($searchProductLists);
?>