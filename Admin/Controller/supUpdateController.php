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
    $township = $_POST["township"];
    $plan = $_POST["plan"];
    $bankAcc = $_POST["bankAcc"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $shopPhoto = $_FILES["shopPhoto"]["name"];

    include "../Model/model.php";
    $sql = $pdo->prepare("
        UPDATE m_suppliers SET 
        sup_name = :name,
        pack_id = :plan,
        sup_email = :email,
        township = :township,
        sup_phone = :phone,
        bank_account = :bankAcc,
        sup_shop_name = :shopName
        where id = :id
    ");
    $sql->bindValue(":id",$id);
    $sql->bindValue(":name",$supplierName);//
    $sql->bindValue(":email",$shopEmail);//
    $sql->bindValue(":shopName", $shopName);
    $sql->bindValue(":township",$township);
    $sql->bindValue(":plan",$plan);
    $sql->bindValue(":bankAcc",$bankAcc);
    $sql->bindValue(":phone",$phone);
    
    $sql->execute();
    header("Location: ../View/supplierList/approveList.php");

    // $sql->bindValue(":password",password_hash($password,PASSWORD_DEFAULT));
   
    //send merchant to register mail
    // $domain = $_SERVER['SEVER_NAME'];
    // $mail = new SendMail();
    // $mail->sendMail(
    //     $shopEmail,
    //     "Your Account",
    //     "<h2>Here is your shop account</h2>
    //     Username : $supplierName
    //     <br/>
    //     Password : $password
    //     "
    // );
    // echo ($shopEmail);
    // echo ($supplierName);
    // echo ($password);
}