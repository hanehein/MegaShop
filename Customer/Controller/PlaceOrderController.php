<?php 
echo "<pre>";
print_r($_POST);
session_start();
if(count($_POST) == 0){
    header ("Location: ../View/errors/error.php");
} else {
    $name = $_POST["name"];
    $country = $_POST["country"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $region = $_POST["region"];
    $township = $_POST["township"];
    $address = $_POST["address"];
    $order = $_POST["order"];
    $payment = $_POST["payment"];
    $cus_id = $_POST["cus"];
    $sup_id = $_POST["sup"];
    $p_id = $_POST["product"];
    $amount = $_POST["amount"];
    $qty = $_POST["qty"];
    $del = 0;
    $deli = 2000;
    $status = 1;
    // Return date/time info of a timestamp; then format the output
    $mydate=getdate(date("U"));
    $date = "$mydate[year]-$mydate[mon]-$mydate[mday]";

    function gettoken($size = 102){
        $character = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $randomString = "";
        for ($i=0; $i < $size; $i++) { 
            $index = rand(0, strlen($character) - 1);
            $randomString .= $character[$index];
        }
        return $randomString;
    }

    $token = substr(gettoken(102),0,6);

    print_r($token);

    include '../Model/model.php';

    // $sql = $pdo->prepare(
    //     " INSERT INTO t_c_payment
    //     (
    //        payment_type,
    //        cus_id,
    //        sup_id,
    //        order_id,
    //        create_date
    //     )
    //     VALUES 
    //     (
    //         :payment,
    //         :cus_id,
    //         :sup_id,
    //         :token,
    //         :date
    //     )
    //     "
    // );
    // $sql->bindValue(":payment",$payment);
    // $sql->bindValue(":cus_id",$cus_id);
    // $sql->bindValue(":sup_id",$sup_id);
    // $sql->bindValue(":token",$token);
    // $sql->bindValue(":date",$date);
    // $sql->execute();



    // $sql = $pdo->prepare(
    //     " INSERT INTO t_orders
    //     (
    //         order_id,
    //         cus_id,
    //         sup_id,
    //         total_quantity,
    //         total_amount,
    //         cus_phone,
    //         cus_state,
    //         cus_township,
    //         cus_address,
    //         order_note,
    //         payment_type,
    //         delivery_fee,
    //         order_status,
    //         del_flg,
    //         create_date
    //     )
    //     VALUES 
    //     (
    //         :token
    //         :cus_id,
    //         :sup_id,
    //         :qty,
    //         :amount,
    //         :phone,
    //         :region,
    //         :township,
    //         :address,
    //         :order,
    //         :payment,
    //         :deli, 
    //         :status,
    //         :del,
    //         :date  
    //     )
    //     "
    // );
    // $sql->bindValue(":token",$token);
    // $sql->bindValue(":cus_id",$cus_id);
    // $sql->bindValue(":sup_id",$sup_id);
    // $sql->bindValue(":qty",$qty);
    // $sql->bindValue(":amount",$amount);
    // $sql->bindValue(":phone",$phone);
    // $sql->bindValue(":region",$region);
    // $sql->bindValue(":township",$township);
    // $sql->bindValue(":address",$address);
    // $sql->bindValue(":order",$order);
    // $sql->bindValue(":payment",$payment);
    // $sql->bindValue(":deli",$deli);
    // $sql->bindValue(":status",$status);
    // $sql->bindValue(":del",$del);
    // $sql->bindValue(":date",$date);
    // $sql->execute();

    // $_SESSION["order"] = $token;
    // $_SESSION["p_id"] = $p_id;


    // header("Location: ../View/order/orderComplete.php");    

}
?>