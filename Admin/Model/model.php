<?php

$hostname = "megashop-do-user-14537762-0.b.db.ondigitalocean.com";
$port = 25060;
$dbname = "megashop_db";
$uname = "doadmin";
$pwd = "AVNS_GXwfrWR2c0tg20CnL2E";

//Connection
$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname",
    $uname,
    $pwd
);

// set error exc
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
