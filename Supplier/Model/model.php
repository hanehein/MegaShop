<?php

$hostname = "mega-shop-do-user-14537762-0.b.db.ondigitalocean.com";
$port = 25060;
$dbname = "megashop_db";
$uname = "doadmin";
$pwd = "AVNS_Qr_6jGlFpoH7Mj_qaj_";
//connection
$pdo = new PDO(
    "mysql:hostname=$hostname; port =$port; dbname=$dbname",
    $uname,
    $pwd);
//set error exc
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>