<?php

$hostname = "localhost:81/";
$port = 3307;
$dbname = "megashop_db";
$uname = "root";
$pwd = "";

//Connection
$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname",
    $uname,$pwd);

// set error exc
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

