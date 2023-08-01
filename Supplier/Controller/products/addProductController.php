<?php

echo "<pre>";
var_dump($_POST);

//check from stage is addproduct page or not
// if( isset($_POST["from_addproduct"])){

//     $p_name = $_POST["product_name"];
//     $p_category = $_POST["product_category"];
//     $p_brand = $_POST["product_brand"];
//     $p_buy_price = $_POST["product_buy_price"];
//     $p_sell_price = $_POST["product_sell_price"];
//     $p_stock = $_POST["product_stock"];
//     $p_discount = $_POST["product_discount"];
//     $p_descirption = $_POST["product_description"];
//     $create_date = date("Y-m-d");


//     // connect database
//     include "../../Model/model.php";

//     $sql = $pdo->prepare(
//         'INSERT INTO m_products (
//             p_name,
//             p_category,
//             p_brand,
//             p_sell_price,
//             p_buy_price,
//             p_stock,
//             p_description,
//             p_photo1,
//             p_discount,
//             supplier_id,
//             create_date
//         ) VALUES (
//             :name,
//             :category,
//             :brand,
//             :sell_price,
//             :buy_price,
//             :stock,
//             :description,
//             :photo1,
//             :discount,
//             :sup_id,
//             :date
//         )'
//     );

//     $sql->bindValue(":name",$p_name);
//     $sql->bindValue(":category",$p_category);
//     $sql->bindValue(":brand",$p_brand);
//     $sql->bindValue(":sell_price",$p_sell_price);
//     $sql->bindValue(":buy_price",$p_buy_price);
//     $sql->bindValue(":stock",$p_stock);
//     $sql->bindValue(":description",$p_descirption);
//     $sql->bindValue(":photo1","dfsafsdf.png");
//     $sql->bindValue(":discount",$p_discount);
//     $sql->bindValue(":sup_id",1);
//     $sql->bindValue(":date",$create_date);

//     $sql->execute();

//     //go to product lists page
//     header("Location: ../../View/products/product.php");
// }else {
//     header("Location: ../../View/errors/error.php");
// }

?>