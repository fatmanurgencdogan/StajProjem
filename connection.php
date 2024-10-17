<?php

$host="localhost";
$user="root";
$password="";
$db="membership";

$connection = mysqli_connect($host, $user, $password, $db);
mysqli_set_charset($connection, "UTF8");

?>