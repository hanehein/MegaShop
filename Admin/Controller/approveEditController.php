<?php 
include "./common/supplierPwdHarsh.php";
include "./common/mailSender.php";
ini_set('display_errors', 1);
session_start();
// print_r($_POST);//ok here
echo "--------";

if(count($_POST) == 0){
    header ("Location: ../View/errors/error.php");
} else {
    $id = $_POST["id"];
    $supplierName = $_POST["supplierName"];
    $shopEmail = $_POST["email"];
    $shopName = $_POST["shopName"];
    $shopAddress = $_POST["shopAddress"];
    $township = $_POST["township"];
    $plan = $_POST["plan"];
    $bankAcc = $_POST["bankAcc"];
    $phone = $_POST["phone"];
    $password = getpwd(8);

    include "../Model/model.php";
    $sql = $pdo->prepare("
        UPDATE m_suppliers SET sup_approve = 1, sup_password = :password where id = :id;
    ");
    $sql->bindValue(":id",$id);
    $sql->bindValue(":password",password_hash($password,PASSWORD_DEFAULT));
    $sql->execute();
    //send merchant to register mail
    $domain = $_SERVER['SEVER_NAME'];
    $mail = new SendMail();
    $mail->sendMail(
        $shopEmail,
        "Your Account",
        "<h2>Here is your shop account</h2>
        Username : $supplierName
        <br/>
        Password : $password
        "
    );
    echo ($shopEmail);
    echo ($supplierName);
    echo ($password);

    header("Location: ../View/supplierList/approveList.php");
}