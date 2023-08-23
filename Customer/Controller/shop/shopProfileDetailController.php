<?php
ini_set('display_errors', 1);

if (!isset($_GET["id"])) {
    header("Location: ../../View/errors/error.php");
}

$id = $_GET["id"];
//DB connection
include "../../Model/model.php";

//Product Datas
$sql = $pdo->prepare(
    "SELECT  
        *
    FROM 
        m_products
    WHERE 
        id = :supplier_id
    AND 
        p_approved = 1;"
);
$sql->bindValue(":supplier_id", $id);
$sql->execute();
$p_datas = $sql->fetchAll(PDO::FETCH_ASSOC);

//Shop Name
$sql = $pdo->prepare(
    "SELECT  
        *
    FROM 
        m_suppliers
    WHERE 
        id = :supplier_id;"
);
$sql->bindValue(":supplier_id", $id);
$sql->execute();
$sup_datas = $sql->fetchAll(PDO::FETCH_ASSOC)[0];

//Total followers
$sql = $pdo->prepare(
    "SELECT  
        *
    FROM 
        t_follow_stores
    WHERE 
        sup_id = :supplier_id;"
);
$sql->bindValue(":supplier_id", $id);
$sql->execute();
$tot_followers = $sql->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
$row_limit = 3;
$page_start = ($page - 1) * $row_limit;
$page_start = ($page_start < 0) ? 0 : $page_start;

//All Data Count
$sql = $pdo->prepare(
    "SELECT * FROM t_shop_reviews 
  INNER JOIN m_customers 
  ON t_shop_reviews.cus_id=m_customers.id"
);
$sql->execute();
$total_data = $sql->fetchAll(PDO::FETCH_ASSOC);

//Shop Review box
$sql = $pdo->prepare(
    "SELECT * FROM t_shop_reviews 
  INNER JOIN m_customers 
  ON t_shop_reviews.cus_id=m_customers.id 
 LIMIT $page_start,$row_limit"
);
// $sql->bindValue(":sup_id",$sup_id);
$sql->execute();
$reviews = $sql->fetchAll(PDO::FETCH_ASSOC);
$page_lists = ceil(count($total_data) / $row_limit);

//All Data Count
$sql = $pdo->prepare(
    "SELECT * FROM t_product_reviews 
  INNER JOIN m_customers 
  ON t_product_reviews.customer_id=m_customers.id"
);
$sql->execute();
$total_record = $sql->fetchAll(PDO::FETCH_ASSOC);

//Product Review box
$sql = $pdo->prepare(
    "SELECT * FROM t_product_reviews 
  INNER JOIN m_customers 
  ON t_product_reviews.customer_id=m_customers.id
  LIMIT $page_start,$row_limit "
);
$sql->execute();
$p_reviews = $sql->fetchAll(PDO::FETCH_ASSOC);
$page_lists = ceil(count($total_record) / $row_limit);

//rating bar graph
$sql = $pdo->prepare(
    "SELECT count(id) As countperson, rating FROM t_shop_reviews GROUP By rating"
);
$sql->execute();
$reviewers = $sql->fetchAll(PDO::FETCH_ASSOC);

//total reviews
$sql = $pdo->prepare(
    "SELECT count(id) As countperson FROM t_shop_reviews"
);
$sql->execute();
$total = $sql->fetchAll(PDO::FETCH_ASSOC);

//Average rating Percent
$sql = $pdo->prepare(
    "SELECT 
      AVG(rating) AS avg_rating
  FROM 
      t_shop_reviews"
);
$sql->execute();
$shop_reviews = $sql->fetchAll(PDO::FETCH_ASSOC);
