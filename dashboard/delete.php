<?php
ob_start();
$id = $_POST['id'];
$type = $_POST['type'];
include "inc/sess.php";
include "inc/connection.php";
if($type=="customer")
{
    $stmt = $pdo->prepare("DELETE FROM customers where id='$id'");
    $stmt->execute();
}
else
{
    header("location:logout.php");
}

?>