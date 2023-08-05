<?php 
// include "./common/supplierPwdHarsh.php";
include "./common/mailSender2.php";
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
    $body = file_get_contents("../notifyEmail/Notify/notify.php");//
    // $body = str_replace("supplierName",$supplierName,$body);
    // $body = str_replace("password",$password,$body);
    $mail = new SendMail();
    
    $mail->sendMail(
        $email,
        "check out special promotions we offer this weekend!",
        $body,
        "../notifyEmail/Notify/images/image-2.png",
        "../notifyEmail/Notify/images/undraw_Contact_us_re_4qqt.png"
    );
    

    header("Location: ../View/customerList/registeredCustomer.php");
}

// "../emailTemplate/template/images/undraw_Shopping_Bags_drx3.png"//