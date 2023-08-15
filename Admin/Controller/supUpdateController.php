<?php 
// include "./common/supplierPwdHarsh.php";
// include "./common/mailSender.php";
ini_set('display_errors', 1);
session_start();
print_r($_POST);//ok here
// echo "--------";

if(count($_POST) == 0){
    header ("Location: ../View/errors/error.php");
} else {
    $id = $_POST["id"];
    $supplierName = $_POST["supplierName"];
    $shopEmail = $_POST["email"];
    $shopName = $_POST["shopName"];
    $region = $_POST["region"];
    $plan = $_POST["plan"];
    $bankAcc = $_POST["bankAcc"];
    $duration = $_POST["duration"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $shopPhoto = $_FILES["shopPhoto"]["name"];

    include "../Model/model.php";
    $sql = $pdo->prepare("
        UPDATE m_suppliers SET 
        sup_name = :name,
        pack_id = :plan,
        sup_email = :email,
        sup_phone = :phone,
        bank_account = :bankAcc,
        sup_shop_name = :shopName,
        pack_actual_duration = :duration,
        region_id = :region
        where id = :id
    ");
    $sql->bindValue(":id",$id);
    $sql->bindValue(":name",$supplierName);//
    $sql->bindValue(":email",$shopEmail);//
    $sql->bindValue(":shopName", $shopName);
    $sql->bindValue(":region",$region);
    $sql->bindValue(":plan",$plan);
    $sql->bindValue(":duration",$duration);
    $sql->bindValue(":bankAcc",$bankAcc);
    $sql->bindValue(":phone",$phone);
    
    $sql->execute();
    header("Location: ../View/supplierList/approveList.php");
}