<?php

$hostname = "localhost";
$port = 3306;
$dbname = "megashop_db";
$uname = "root";
$pwd = "";

//Connection
$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname",
    $uname,$pwd);

print_r($pdo);
// set error exc
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

