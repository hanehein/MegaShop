<?php
//chech with post or get
if (count($_POST) == 0) {
    header("Location: ../../View/errors/error.php");
}


//check from stage is addproduct page or not
// if (!isset($_POST["from_contactAdmin"])) {
//     header("Location: ../../View/errors/error.php");
// }
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$create_date = date("Y-m-d");


//DB connection
include "../../Model/model.php";
$sql = $pdo->prepare(
    'INSERT INTO t_contact_admin(
        cus_name,
        cus_email,
        cus_phone,
        message,
        create_date
        )VALUES(
            :name,
            :email,
            :phone,
            :message,
            :create_date
            )
         '
  );
  $sql->execute();
  $sql->bindValue(":name", $name);
  $sql->bindValue(":email", $email);
  $sql->bindValue(":phone", $phone);
  $sql->bindValue(":message", $message);
  $sql->bindValue(":create_date", $create_date);

?>