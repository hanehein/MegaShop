<?php 
ini_set('display_errors', 1);
session_start();
print_r($_GET);
$id = $_GET["id"];
if (!isset($id)) {
    header("Location: ../View/errors/error.php");
} else {
    include "../Model/model.php";
    $sql = $pdo->prepare("
        SELECT * FROM m_admin WHERE admin_id = :id
    ");
    $sql->bindValue(":id", $id);
    $sql->execute();
    $_SESSION["adminSignup"] = $sql->fetchAll(PDO::FETCH_ASSOC);
    header("Location: ../View/adminProfile/adminSignup.php");
}
