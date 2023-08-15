<?php

//chech with post or get
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

//check from stage is addproduct page or not
if (!isset($_POST["from_customer_searchproduct"])) {
    header("Location: ../../View/errors/error.php");
}

$searchValue = $_POST['searchValue'];




?>