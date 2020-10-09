<?php

$id = $_POST["id"];
require("conector.php");

$sql ="DELETE FROM personas WHERE id = ".$id;
mysqli_query($con, $sql) or die(mysqli_error());


?>

<h1>PERSONA BORRADA</h1>
<a href="index.php">INICIO</a>