<?php 
include "./common/supplierPwdHarsh.php";
include "./common/mailSender.php";
ini_set('display_errors', 1);
session_start();
// print_r($_GET);
$id = $_GET["id"];
$supplierName = $_GET["sup_name"];
$email = $_GET["sup_email"];
$password = getpwd(8);
echo ($supplierName);
echo ($email);
echo ($password);
if(!isset($id)){
    header ("Location: ../View/errors/error.php");
} else {
    include "../Model/model.php";
    $sql = $pdo->prepare("
        UPDATE m_suppliers SET sup_approve = 1, sup_password = :password  where id = :id;
    ");
    $sql->bindValue(":id",$id);
    $sql->bindValue(":password",password_hash($password,PASSWORD_DEFAULT));
    $sql->execute();
    //send merchant to reister mail
    $domain = $_SERVER['SEVER_NAME'];
    $mail = new SendMail();
    $mail->sendMail(
        $email,
        "Your Account",
        "<h2>Here is your shop account</h2>
        Username : $supplierName;
        <br/>
        Password : $password
        "
    );

    // header("Location: ../View/supplierList/pendingList.php");
}
    
