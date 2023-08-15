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
    $shopName = $_POST["shopName"];
    $shopEmail = $_POST["email"];
    $plan = $_POST["plan"];
    $duration = $_POST["duration"];
    $bankAcc = $_POST["bankAcc"];
    $township = $_POST["township"];
    $activatedDate = $_POST["createDate"];
    // $shopPhoto = $_FILES["shopPhoto"]["name"];


    include "../Model/model.php";
    $sql = $pdo->prepare("
        UPDATE m_suppliers SET 
        pack_id = :plan,
        sup_email = :email,
        township = :township,
        bank_account = :bankAcc,
        sup_shop_name = :shopName,
        pack_actual_duration = :duration,
        create_date = :createdDate
        where id = :id
    ");
    $sql->bindValue(":id",$id);
    $sql->bindValue(":email",$shopEmail);
    $sql->bindValue(":shopName", $shopName);
    $sql->bindValue(":township",$township);
    $sql->bindValue(":plan",$plan);
    $sql->bindValue(":duration",$duration);
    $sql->bindValue(":bankAcc",$bankAcc);
    $sql->bindValue(":createdDate", $activatedDate);
    $sql->execute();
    header("Location: ../View/adminDashboard/adminSubscriptionIncome.php");

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