<?php 

session_start();

$id = $_GET["id"];

if (!isset($id)) {
    echo "error";
    // header ("Location: ../View/errors/error.php");
} else{

    include "../Model/model.php";

    $sql =$pdo->prepare(
        " SELECT * FROM m_customers WHERE id = :id
        "
    );

    $sql->bindValue(":id", $id);

    $sql->execute();

    $_SESSION['profileEdit'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../View/profile/ProfileEdit.php");


}
