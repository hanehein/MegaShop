<?php
ini_set('display_errors', 1);
// session_start();

if (!isset($_SESSION["adminName"])) {
    header("Location: ../View/adminProfile/adminLogin.php"); //view from admin dashboard
}