<?php 
session_start();
$_SESSION["sup_id"] = NULL;

header("Location: ../../View/account/login.php");
?>