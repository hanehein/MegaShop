<?php 
// include "./common/supplierPwdHarsh.php";
include "./common/mailSender.php";
ini_set('display_errors', 1);
session_start();
// print_r($_POST);//ok here
// echo "--------";

if(count($_POST) == 0){
    header ("Location: ../View/errors/error.php");
} else {
    $id = $_POST["id"];
    // $image = $_POST["image"];
    $cusName = $_POST["cusName"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $township = $_POST["township"];
    $phone = $_POST["phone"];
    

    include "../Model/model.php";
    $sql = $pdo->prepare("
        UPDATE m_customers SET notify = 1 where id = :id;
    ");
    $sql->bindValue(":id",$id);
   
    $sql->execute();
    //send merchant to register mail
    $domain = $_SERVER['SEVER_NAME'];
    $body = file_get_contents("../emailTemplate/template/index.html");
    $mail = new SendMail();
    $mail->sendMail(
        $email,
        "Check Our Special Promotion!",
        // "Username : $supplierName
        // <br/>
        // Password : $password",
        $body,
        "../emailTemplate/template/images/undraw_Shopping_Bags_drx3.png"
    );
    echo ($email);
    echo ($cusName);

    header("Location: ../View/customerList/registeredCustomer.php");
}