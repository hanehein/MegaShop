<?php

// check post method or get method
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}

// check from stage is  login page or not 
if (!isset($_POST["from_signup"])) {
    header("Location: ../../View/errors/error.php");
}

echo "<pre>";
print_r($_POST);
echo $_POST["bank_acc"];
die("");

$supplier_name = $_POST["supplier_name"];
$shop_name = $_POST["shop_name"];
$email = $_POST["email"];
$township = $_POST["township"];
$shop_address = $_POST["shop_address"];
$phone = $_POST["phone"];
$bank_acc = $_POST["bank_acc"];


//Db Connection
include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_suppliers
    WHERE sup_email = :email"
);

$sql->bindValue(":email", $email);
$sql->execute();
$supplier = $sql->fetchAll(PDO::FETCH_ASSOC);

//check email is already register or not
if(count($supplier) == 0){
    //Db Connection
    include "../../Model/model.php";

    $sql = $pdo->prepare(
        "INSERT INTO m_suppliers (
            sup_name,
            sup_email,
            township,
            sup_address,
            sup_phone,
            bank_account,
            sup_shop_name,
            create_date
        ) VALUES (
            :sup_name,
            :email,
            :township,
            :address,
            :phone,
            :bank_acc,
            :shop_name,
            :creat_date
        )"
    );
    
    $sql->bindValue(":sup_name", $supplier_name);
   
    $sql->bindValue(":email", $email);
    $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
    $sql->bindValue(":password", $passsword);
    $sql->bindValue(":township", $township);
    $sql->bindValue(":address", $shop_address);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":shop_name", $shop_name);
  
    $sql->execute();

    header("Location: ../../View/account/login.php");
}else{
    $_SESSION["signup_error"] = "Email is already registered!";
    header("Location: ../../View/account/signUp.php");
}