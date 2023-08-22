<?php
$MAX_IMAGE = 8;

//chech with post or get
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

//check from stage is addproduct page or not
if (!isset($_POST["from_addproduct"])) {
    header("Location: ../../View/errors/error.php");
}

session_start();
$supplier_id = $_SESSION["sup_id"];

$p_name = $_POST["product_name"];
$p_category = $_POST["product_category"];
$p_brand = $_POST["product_brand"];
$p_buy_price = $_POST["product_buy_price"];
$p_sell_price = $_POST["product_sell_price"];
$p_stock = $_POST["product_stock"];
$p_discount = $_POST["product_discount"];
$p_descirption = $_POST["product_description"];
$create_date = date("Y-m-d");

if(isset($_POST["color"])){
    $p_colors = implode(",", $_POST["color"]);
}else{
    $p_colors = NULL;
}

if(isset($_POST["size"])){
    $p_sizes = implode(",", $_POST["size"]);
}else{
    $p_sizes = NULL;
}

//move images to storage
foreach ($_FILES as $key => $value) {
    if ($_FILES[$key]["size"] != 0) {
        $photo_tmp_name = $_FILES[$key]["tmp_name"];
        $photo_name = $_FILES[$key]["name"];
        move_uploaded_file($photo_tmp_name, "../../../Storage/products/$photo_name");
    }
}

//connect database
include "../../Model/model.php";

$sql = $pdo->prepare(
    'INSERT INTO m_products (
            p_name,
            p_category,
            p_brand,
            p_sell_price,
            p_buy_price,
            p_stock,
            p_description,
            p_photo1,
            p_photo2,
            p_photo3,
            p_photo4,
            p_photo5,
            p_photo6,
            p_photo7,
            p_photo8,
            p_size,
            p_color,
            p_discount,
            supplier_id,
            create_date
        ) VALUES (
            :name,
            :category,
            :brand,
            :sell_price,
            :buy_price,
            :stock,
            :description,
            :photo1,
            :photo2,
            :photo3,
            :photo4,
            :photo5,
            :photo6,
            :photo7,
            :photo8,
            :size,
            :color,
            :discount,
            :sup_id,
            :date
        )'
);

$sql->bindValue(":name", $p_name);
$sql->bindValue(":category", $p_category);
$sql->bindValue(":brand", $p_brand);
$sql->bindValue(":sell_price", $p_sell_price);
$sql->bindValue(":buy_price", $p_buy_price);
$sql->bindValue(":stock", $p_stock);
$sql->bindValue(":description", $p_descirption);
$sql->bindValue(":size", $p_sizes);
$sql->bindValue(":color", $p_colors);
$sql->bindValue(":discount", $p_discount);
$sql->bindValue(":sup_id", $supplier_id);
$sql->bindValue(":date", $create_date);

for ($i = 1; $i <= $MAX_IMAGE; $i++) {
    $sql->bindValue(":photo$i", NULL);
}

$idx = 0;
foreach ($_FILES as $key => $value) {
    if ($_FILES[$key]["size"] != 0) {
        $photo_name = $_FILES[$key]["name"];
        $idx++;
        $sql->bindValue(":photo$idx", "Storage/products/$photo_name");
    }
}

$sql->execute();

//go to product lists page
header("Location: ../../View/products/product.php");
