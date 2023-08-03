<?php 
include "./common/mailSender.php";
include "./common/supplierPwdHarsh.php";
ini_set('display_errors', 1);
session_start();
print_r($_POST); 

if(isset($_POST["create"])){
    $supplierName = $_POST["supplierName"];
    $shopName = $_POST["shopName"];
    $email = $_POST["email"];
    $plan = $_POST["plan"];
    $township = $_POST["township"];
    $phone = $_POST["phone"];
    $shopAddress = $_POST["shopAddress"];
    $bankAcc = $_POST["bankAcc"];
    $approve = 1;
    //generate password
    
    $password = getpwd(8);


    include "../Model/model.php";
    $sql = $pdo->prepare("
        INSERT INTO m_suppliers
        (
            sup_name,
            pack_id,
            sup_email,
            sup_password,
            township,
            sup_address,
            sup_phone,
            bank_account,
            sup_shop_name,
            create_date,
            sup_approve
        ) 
        VALUES
        (
            :name,
            :plan,
            :email,
            :password,
            :township,
            :address,
            :phone,
            :bankAcc,
            :shopName,
            :createdDate,
            :approve
        )
    ");

    $sql->bindValue(":name",$supplierName);
    $sql->bindValue(":shopName",$shopName);
    $sql->bindValue(":password",password_hash($password,PASSWORD_DEFAULT));
    $sql->bindValue(":email",$email);
    $sql->bindValue(":plan",$plan);
    $sql->bindValue(":township",$township);
    $sql->bindValue(":phone",$phone);
    $sql->bindValue(":address",$shopAddress);
    $sql->bindValue(":bankAcc",$bankAcc);
    $sql->bindValue(":createdDate",date("Y-m-d"));
    $sql->bindValue(":approve",$approve);
    $sql->execute();
    //send merchant to reister mail
    $domain = $_SERVER['SEVER_NAME'];
    $mail = new SendMail();
    $mail->sendMail(
        $email,
        "Your Account",
        "<h2>Here is your shop account</h2>
        Username : $supplierName
        <br/>
        Password : $password
        "
    );
    header("Location: ../../View/supplierList/approveList.php");
    
}