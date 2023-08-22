<?php
ini_set('display_errors', 1);
// session_start();

if (!isset($_SESSION["adminId"])) {
    header("Location: ../adminProfile/adminLogin.php"); //view from admin dashboard
};
