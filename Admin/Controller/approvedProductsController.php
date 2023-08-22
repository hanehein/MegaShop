<?php 

include '../../Model/model.php';
if(isset($_GET["page"])){
    $page = $_GET["page"];
}else {
    $page = 1;
}
$rowLimits = 3; 
$pageStart = ($page - 1) * $rowLimits;
$pageStart = ($pageStart < 0)? 1 : $pageStart; 

$sql = $pdo->prepare(
    "SELECT * , `m_products`.id as `p_id`
    FROM `m_products`
    INNER JOIN `m_category` ON `m_products`.`p_category` = `m_category`.id
    INNER JOIN `m_brand` ON `m_products`.`p_brand` = `m_brand`.id
    INNER JOIN `m_suppliers` ON `m_products`.`supplier_id` = `m_suppliers`.id
    WHERE `p_approved` = 1 AND `m_products`.`del_flg` = 0;"
);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

//normal fetch
$sql = $pdo->prepare(
    "SELECT * , `m_products`.id as `p_id`
    FROM `m_products`
    INNER JOIN `m_category` ON `m_products`.`p_category` = `m_category`.id
    INNER JOIN `m_brand` ON `m_products`.`p_brand` = `m_brand`.id
    INNER JOIN `m_suppliers` ON `m_products`.`supplier_id` = `m_suppliers`.id
    WHERE `p_approved` = 1 AND `m_products`.`del_flg` = 0 LIMIT $pageStart, $rowLimits
        ");
    $sql->execute();
    $productlists = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $pageList = ceil(count($result) / $rowLimits);
?>