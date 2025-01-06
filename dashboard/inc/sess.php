<?php
session_start();
$username = $_SESSION['mysession'];
if(!$username)
{
    header("location:../");
}
?>