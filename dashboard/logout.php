<?php
ob_start();
include "inc/sess.php";
session_destroy();
header("location:../");
?>