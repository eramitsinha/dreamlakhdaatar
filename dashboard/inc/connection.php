<?php
 // connecting to database using PDO
 $host = "localhost";
 $db = "test";
 $user = "root";
 $password = "";

 $connection = "mysql:host=$host;dbname=$db;charset=UTF8";
 $pdo = new PDO($connection, $user, $password);

 ?>