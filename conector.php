<?php
//este archivo es el encargado de establecer la conexion a la base de datos mysql
$host ="localhost";
$login = "root";
$password = "";
$basededatos = "db_crud";

$con = mysqli_connect($host, $login, $password, $basededatos) or die(mysqli_error());

?>
