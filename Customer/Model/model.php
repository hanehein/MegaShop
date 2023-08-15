<?php
$hostname = "localhost:81/";
$port = 3306;
$dbname = "megashop_db";
$uname = "root";
$pwd = "";
//connection
$pdo = new PDO(
    "mysql:hostname=$hostname; port=$port; dbname=$dbname",
    $uname,
    $pwd
);
//set error exc
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>