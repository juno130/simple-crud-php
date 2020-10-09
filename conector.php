<?php

$host ="localhost";
$login = "root";
$password = "12345";
$basededatos = "db_crud";

$con = mysqli_connect($host, $login, $password, $basededatos) or die(mysqli_error());

?>