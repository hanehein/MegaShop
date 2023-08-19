<?php

if(isset($_POST) && isset($_POST["from_wishlist_js"])){
    $product_id = $_POST["product_id"];

    // connect database
    include "./../../Model/model.php";

    $sql = $pdo->prepare(
        "DELETE FROM 
            m_wishlist
        WHERE 
            c_id = :customer_id
        AND
            product_id = :product_id"
    );      

    $sql->bindValue(":customer_id",1);
    $sql->bindValue(":product_id",$product_id);
    $sql->execute();
}



?>