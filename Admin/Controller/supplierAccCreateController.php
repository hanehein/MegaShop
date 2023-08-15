<?php
include "./common/mailSender.php";
include "./common/supplierPwdHarsh.php";
ini_set('display_errors', 1);
session_start();
// print_r($_POST); 

if(count($_POST) == 0){
    header("Location: ../View/errors/error.php");
}//not complete

if (isset($_POST["create"])) {
    $supplierName = $_POST["supplierName"];
    $shopName = $_POST["shopName"];
    $email = $_POST["email"];
    $plan = $_POST["plan"];
    $region = $_POST["region"];
    $township = $_POST["township"];
    $phone = $_POST["phone"];
    $shopAddress = $_POST["address"];
    $bankAcc = $_POST["bankAcc"];
    $approve = 1;
    $duration = $_POST["duration"];
    
    
    //generate password
    $password = getpwd(8);
    //get photo
    $shopPhoto = $_FILES["shopPhoto"]["name"];
    $shopPhototmp = $_FILES["shopPhoto"]["tmp_name"];


    

    include "../Model/model.php";
    if (move_uploaded_file($shopPhototmp, "../../Storage/shopPhoto/" . $shopPhoto)) {
        $sql = $pdo->prepare("
                INSERT INTO m_suppliers
                (
                    sup_name,
                    pack_id,
                    sup_email,
                    sup_password,
                    sup_address,
                    sup_phone,
                    bank_account,
                    sup_shop_name,
                    shop_photo_path,
                    create_date,
                    sup_approve,
                    pack_actual_duration,
                    region_id,
                    township_id
                ) 
                VALUES
                (
                    :name,
                    :plan,
                    :email,
                    :password,
                    :address,
                    :phone,
                    :bankAcc,
                    :shopName,
                    :path,
                    :createdDate,
                    :approve,
                    :duration,
                    :region,
                    :township
                )
            ");

        $sql->bindValue(":name", $supplierName);
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
        $sql->bindValue(":email", $email);
        $sql->bindValue(":address", $shopAddress);
        $sql->bindValue(":plan", $plan);
        $sql->bindValue(":duration", $duration);
        $sql->bindValue(":region", $region);
        $sql->bindValue(":township", $township);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":bankAcc", $bankAcc);
        $sql->bindValue(":path","../../Storage/shopPhoto/" . $shopPhoto);
        $sql->bindValue(":createdDate", date("Y-m-d"));
        $sql->bindValue(":approve", $approve);
        $sql->execute();
        //sent mail
        $domain = $_SERVER['SEVER_NAME'];
        $body = file_get_contents("../emailTemplate/template/index.php"); //
        $body = str_replace("supplierName", $supplierName, $body);
        $body = str_replace("password", $password, $body);
        $mail = new SendMail();
        $mail->sendMail(
            $email,
            "Your Shop UserName & Password",
            $body,
            "../emailTemplate/template/images/Logo-supplier.png" //
        );
        echo "<script>window.location.assign('../View/supplierList/approveList.php')</script>";
    } else {
        header("Location: ../View/errors/error.php");
    }
    //send merchant to register mail
    // $domain = $_SERVER['SEVER_NAME'];
    // $body = file_get_contents("../emailTemplate/template/index.php"); //
    // $body = str_replace("supplierName", $supplierName, $body);
    // $body = str_replace("password", $password, $body);
    // $mail = new SendMail();

    // $mail->sendMail(
    //     $email,
    //     "Your Shop UserName & Password",
    //     $body,
    //     "../emailTemplate/template/images/undraw_Shopping_Bags_drx3.png" //
    // );
    // header("Location: ../View/supplierList/approveList.php");
}
