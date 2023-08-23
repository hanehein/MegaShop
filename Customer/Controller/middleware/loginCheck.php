<?php

if(!isset($_SESSION["logined_customer_id"])){
    header("Location: ../../View/accountInfo/cusLogin.php");
}

?>